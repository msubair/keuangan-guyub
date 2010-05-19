<?php

class Laporan_proyek extends Controller {

	function Laporan_proyek()
	{
		parent::Controller();	
		$this->load->library('auth');
		$this->auth->check_user_authentification();
	}
	
	function index()
	{
		$data['title'] = "Laporan Proyek";
		$data['main_content'] = 'laporan_proyek/form';
		$this->load->view('layout/template', $data);
	}
	
	function report()
	{
		if (!$this->_laporan_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->index();
		}
		else
		{
			$this->load->model('jurnal_model');	
			$this->load->model('akun_model');
			$this->load->model('pajak_model');
			$this->load->helper('indodate');
			$this->load->library('fpdf');
			define('FPDF_FONTPATH',$this->config->item('fonts_path'));
			$data['wajib_pajak_data'] = $this->pajak_model->get_data();
			$data['proyekID'] = $this->input->post('proyekID');
			$data['proyek'] = $this->input->post('proyek');
			$data['laporan_data'] = $this->_get_data($data['proyekID']);
			$this->load->view('laporan_proyek/report', $data);
		}
	}
		
	function _get_data($project)
	{
		$this->jurnal_model->set_project(0, $project);
		$journal_data = $this->jurnal_model->get_data();

		$this->akun_model->set_account_group_id(array(4,5));
		$akun = $this->akun_model->get_all_data();

		if($akun)
		{
			foreach ($akun as $row)
			{
				$result[$row->kelompok_akun_id][$row->id] = array('nama' => $row->nama, 'saldo' => 0);
			}

			if($journal_data)
			{
				foreach ($journal_data as $row)
				{
					if(isset($result[$row->kelompok_akun_id][$row->akun_id]))
					{
						if($row->debit_kredit == 1)
						{
							$result[$row->kelompok_akun_id][$row->akun_id]['saldo'] += $row->nilai;
						}
						else
						{
							$result[$row->kelompok_akun_id][$row->akun_id]['saldo'] -= $row->nilai;
						}
					}
				}
			}
			return $result;
		}
		else
		{
			$this->session->set_userdata('ERRMSG_ARR', 'Laporan Laba Rugi Proyek tidak dapat dibuat karena belum ada data akun pada kelompok pendapatan dan biaya');
			redirect('laporan_proyek');
		}
	}

	function _laporan_validation()
	{
		$this->form_validation->set_rules('proyek', 'Proyek', 'trim|required');
		
		return $this->form_validation->run();
	}
}
/* End of file laporan_proyek.php */
/* Location: ./application/controllers/laporan_proyek.php */
