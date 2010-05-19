<?php

class Jurnal extends Controller {

	function Jurnal()
	{
		parent::Controller();
		$this->load->library('auth');
		$this->auth->check_user_authentification();
		$this->load->model('jurnal_model');
		$this->load->model('akun_model');
		$this->load->helper('finance');
	}

	function index()
	{
		$data['title'] = "Jurnal";
		$data['main_content'] = 'jurnal/display';
		$this->load->helper('indodate');
		$data['months'] = bulan_list(1);
		$data['years'] = tahun_list(1);
		$data['journal_data'] = $this->_search_jurnal();
		$this->load->view('layout/template', $data);
	}

	function search()
	{
		$result = $this->_search_jurnal();
		if($result) {
			foreach ($result as $row)
			{
				if($row->debit_kredit == 1)
				{
					$d = $row->nilai;
					$k = '';
				}
				else
				{
					$d = '';
					$k = $row->nilai;
				}
				$data = '[';
				$data .= "'".$row->tgl."',";
				$data .= "'".$row->no."',";
				$data .= "'".$row->item."',";
				$data .= "'".$row->account_name."',";
				$data .= "'".$d."',";
				$data .= "'".$k."',";
				$data .= "'".anchor(site_url()."jurnal/jurnal_koreksi/".$row->id, 'Jurnal Koreksi')."'";
				$data .= ']';
				$journal_data[] = $data;
			}
		}
		echo '['.implode(',',$journal_data).']';
	}

	function jurnal_umum()
	{
		$data['title'] = "Jurnal Umum";
		$data['main_content'] = 'jurnal/form';
		$data['f_id'] = 1;
		$data['accounts'] = $this->akun_model->get_data_for_dropdown();
		$this->load->view('layout/template', $data);
	}

	function jurnal_penyesuaian()
	{
		$data['title'] = "Jurnal Penyesuaian";
		$data['main_content'] = 'jurnal/form';
		$data['f_id'] = 2;
		$data['accounts'] = $this->akun_model->get_data_for_dropdown();
		$this->load->view('layout/template', $data);
	}

	function jurnal_penutup()
	{
		$data['title'] = "Jurnal Penutup";
		$data['main_content'] = 'jurnal/penutup';
		$this->load->view('layout/template', $data);
	}

	function jurnal_koreksi()
		{
		$id = $this->uri->segment(3);
		$data['title'] = "Jurnal Koreksi";
		$data['main_content'] = 'jurnal/koreksi';
		$this->jurnal_model->set_id($id);
		$data['journal_data'] = $this->jurnal_model->get_data();
		$data['accounts'] = $this->akun_model->get_data_for_dropdown();
		$this->load->view('layout/template', $data);
	}

	function buku_besar()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Buku Besar";
		$data['main_content'] = 'jurnal/buku_besar';
		$data['account_data'] = $this->akun_model->get_data_by_id($id);
		$this->jurnal_model->set_account_id($id);
		$data['journal_data'] = $this->jurnal_model->get_data();
		$this->load->view('layout/template', $data);
	}

	function insert()
	{
		$goto = $this->input->post('goto');
		if(!$this->_jurnal_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			redirect($goto);
		}
		else
		{
			$error_message = $this->_detail_validation();
			if($error_message != '')
			{
				$this->session->set_userdata('ERRMSG_ARR', $error_message);
				redirect($goto);
			}
			else
			{
				$this->jurnal_model->fill_data();
				//Check for duplicate no
				if(!$this->jurnal_model->check_no())
				{
					$this->session->set_userdata('ERRMSG_ARR', 'Nomor Jurnal telah digunakan');
					redirect($goto);
				}
				//Insert Data
				elseif($this->jurnal_model->insert_data())
				{
					$this->session->set_userdata('SUCCESSMSG', 'Jurnal baru sukses ;)');
					redirect('jurnal');
				}
			}
		}
	}

	function get_details()
	{
		$laba_rugi = $this->akun_model->get_id_by_name('Ikhtisar Laba Rugi');
		$modal = $this->akun_model->get_id_by_name('Modal');
		if(!$laba_rugi)
		{
			echo 'error_laba_rugi';
		}
		elseif(!$modal)
		{
			echo 'error_modal';
		}
		else
		{
			//Menutup akun pendapatan dengan memindahkan saldo setiap akun pendapatan ke akun ikhtisar laba rugi
			$this->akun_model->set_account_group_id(4);
			$pendapatan = $this->akun_model->get_all_data();
			$i = 1;
			if($pendapatan)
			{
				$sum_pendapatan = 0;
				foreach ($pendapatan as $row)
				{
					if($row->saldo != 0)
					{
						$debit = ($row->saldo < 0) ? abs($row->saldo) : '';
						$kredit = ($row->saldo > 0) ? $row->saldo : '';
						$sum_pendapatan += $row->saldo;
						$this->_create_table_detail($i,$row->id,$debit,$kredit);
						$i++;
					}
				}
				if($sum_pendapatan != 0)
				{
					$debit = ($sum_pendapatan > 0) ? $sum_pendapatan : '';
					$kredit = ($sum_pendapatan < 0) ? abs($sum_pendapatan) : '';
					$this->_create_table_detail($i,$laba_rugi,$debit,$kredit);
					$i++;
				}
			}

			//Menutup akun biaya dengan memindahkan saldo setiap akun biaya ke akun ikhtisar laba rugi
			$this->akun_model->set_account_group_id(5);
			$biaya = $this->akun_model->get_all_data();
			if($biaya)
			{
				$sum_biaya = 0;
				foreach ($biaya as $row)
				{
					if($row->saldo != 0)
					{
						$debit = ($row->saldo < 0) ? abs($row->saldo) : '';
						$kredit = ($row->saldo > 0) ? $row->saldo : '';
						$sum_biaya += $row->saldo;
						$this->_create_table_detail($i,$row->id,$debit,$kredit);
						$i++;
					}
				}
				if($sum_biaya != 0)
				{
					$debit = ($sum_biaya > 0) ? $sum_biaya : '';
					$kredit = ($sum_biaya < 0) ? abs($sum_biaya) : '';
					$this->_create_table_detail($i,$laba_rugi,$debit,$kredit);
					$i++;
				}
			}

			//Menutup akun ikhtisar laba rugi dengan memindahkan saldo akun tersebut ke akun modal
			$sum = $sum_pendapatan + $sum_biaya;
			if($sum != 0)
			{
				$debit = ($sum < 0) ? abs($sum) : '';
				$kredit = ($sum > 0) ? $sum : '';
				$this->_create_table_detail($i,$laba_rugi,$debit,$kredit);
				$i++;
				$this->_create_table_detail($i,$modal,$kredit,$debit);
				$i++;
			}

			//Menutup akun prive (jika ada) dengan memindahkan saldo akun tersebut ke akun modal
			$prive = $this->akun_model->get_id_by_name('Prive');
			if($prive)
			{
				$this->akun_model->get_data_by_id($prive);
				if($prive['saldo'] != 0)
				{
					$debit = ($prive['saldo'] < 0) ? abs($prive['saldo']) : '';
					$kredit = ($prive['saldo'] > 0) ? $prive['saldo'] : '';
					$this->_create_table_detail($i,$prive['id'],$debit,$kredit);
					$i++;
					$this->_create_table_detail($i,$modal,$kredit,$debit);
				}
			}
		}
	}

	function _create_table_detail($i, $akun_id, $debit, $kredit)
	{
		$accounts = $this->akun_model->get_data_for_dropdown();
		$detail['disabled'] = TRUE;
		$detail['class'] = 'field';
		echo '<tr>';
		echo '<td>';
		$akun['id'] = 'akun'.$i;
		$akun['class'] = 'combo';
		$akun['disabled'] = TRUE;
		$selected = $akun_id;
		echo form_dropdown('akun[]', $accounts, $selected ,$akun);
		echo '</td>';
		echo '<td>';
		$detail['id'] = $detail['name'] = 'debit'.$i;
		$detail['value'] = $debit;
		echo form_input($detail);
		echo '</td>';
		echo '<td>';
		$detail['id'] = $detail['name'] = 'kredit'.$i;
		$detail['value'] = $kredit;
		echo form_input($detail);
		echo '</td>';
		echo '</tr>';
	}

	function _search_jurnal()
	{
		$month = ($this->input->post('bulan')) ? $this->input->post('bulan') : date("m");
		$year = ($this->input->post('tahun')) ? $this->input->post('tahun') : date("Y");
		$this->jurnal_model->set_month_year($month, $year);
		return $this->jurnal_model->get_data();
	}

	function _jurnal_validation()
	{
		$this->form_validation->set_rules('nomor', 'Nomor', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required|dateISO');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');

		$akun = $this->input->post('akun');
		for ($i = 1; $i <= count($akun); $i++)
		{
			$this->form_validation->set_rules('debit'.$i, 'Debit', 'trim|integer');
			$this->form_validation->set_rules('kredit'.$i, 'Kredit', 'trim|integer');
		}

		return $this->form_validation->run();
	}

	function _detail_validation()
	{
		$error_message = '';
		if($this->input->post('f_id') != 3)
		{
			if (($this->input->post('debit1') == '' && $this->input->post('kredit1') == '') || ($this->input->post('debit2') == '' && $this->input->post('kredit2') == ''))
			{
				$error_message = "Minimal dua data pada detail harus dimasukkan.";
			}
			else
			{
				$akun_exist = array();
				$debit_sum = 0;
				$kredit_sum = 0;
				$akun = $this->input->post('akun');
				for ($i = 1; $i <= count($akun); $i++)
				{
					$debit = $this->input->post('debit'.$i);
					$kredit =$this->input->post('kredit'.$i);
					// akun tidak boleh ada yang sama
					if(in_array($akun[$i-1],$akun_exist))
					{
						$error_message = "Data akun pada table detail tidak boleh sama.";
					}
					else
					{
						$akun_exist[count($akun_exist)] = $akun[$i-1];
					}
					// hitung jumlah debit
					if ($debit != '') $debit_sum += $debit;
					// hitung jumlah kredit
					if ($kredit != '') $kredit_sum += $kredit;
				}
				if($debit_sum == 0 || $kredit_sum == 0)
				{
					if($error_message) $error_message .= '<br/>';
					$error_message .= "Jumlah data debit maupun kredit tidak boleh 0.";
				}
				if($debit_sum != $kredit_sum)
				{
					if($error_message) $error_message .= '<br/>';
					$error_message .= "Jumlah debit harus sama dengan jumlah kredit.";
				}
			}
		}
		return $error_message;
	}

}
/* End of file jurnal.php */
/* Location: ./application/controllers/jurnal.php */
