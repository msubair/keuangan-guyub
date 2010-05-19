<?php

class Laporan_keuangan extends Controller {

	function Laporan_keuangan()
	{
		parent::Controller();	
		$this->load->library('auth');
		$this->auth->check_user_authentification();
		$this->load->model('jurnal_model');	
		$this->load->model('akun_model');
		$this->load->model('pajak_model');
		$this->load->helper('indodate');
		$this->load->helper('finance');
		$this->load->library('fpdf');
		define('FPDF_FONTPATH',$this->config->item('fonts_path'));
	}
	
	function index()
	{
		$data['title'] = "Laporan Keuangan";
		$data['main_content'] = 'laporan_keuangan/form';
		$data['months'] = bulan_list(1);
		$data['years'] = tahun_list(1);
		$this->load->view('layout/template', $data);
	}	

	function laporan_laba_rugi()
	{
		$data['wajib_pajak_data'] = $this->pajak_model->get_data();
		$bulan = $this->uri->segment(3);
		$data['bulan'] = ($bulan) ? nama_bulan($bulan) : FALSE;
		$data['tahun'] = $this->uri->segment(4);
		$data['laba_rugi_data'] = $this->_get_laba_rugi_data($bulan,$data['tahun']);
		$this->load->view('laporan_keuangan/laba_rugi', $data);
	}
		
	function laporan_neraca_saldo_sebelum_penyesuaian()
	{
		$data['title'] = "LAPORAN NERACA SALDO SEBELUM PENYESUAIAN";
		$data['wajib_pajak_data'] = $this->pajak_model->get_data();
		$bulan = $this->uri->segment(3);
		$data['bulan'] = ($bulan) ? nama_bulan($bulan) : FALSE;
		$data['tahun'] = $this->uri->segment(4);
		$data['neraca_data'] = $this->_get_neraca_data($bulan,$data['tahun'],1);
		$this->load->view('laporan_keuangan/neraca', $data);
	}
	
	function laporan_neraca_saldo_setelah_penyesuaian()
	{
		$data['title'] = "LAPORAN NERACA SALDO SETELAH PENYESUAIAN";
		$data['wajib_pajak_data'] = $this->pajak_model->get_data();	
		$bulan = $this->uri->segment(3);
		$data['bulan'] = ($bulan) ? nama_bulan($bulan) : FALSE;
		$data['tahun'] = $this->uri->segment(4);
		$data['neraca_data'] = $this->_get_neraca_data($bulan,$data['tahun'],array(1,2));
		$this->load->view('laporan_keuangan/neraca', $data);
	}
	
	function laporan_neraca_saldo_setelah_penutupan()
	{
		$data['title'] = "LAPORAN NERACA SALDO SETELAH PENUTUPAN";
		$data['wajib_pajak_data'] = $this->pajak_model->get_data();	
		$bulan = $this->uri->segment(3);
		$data['bulan'] = ($bulan) ? nama_bulan($bulan) : FALSE;
		$data['tahun'] = $this->uri->segment(4);
		$data['neraca_data'] = $this->_get_neraca_data($bulan,$data['tahun']);
		$this->load->view('laporan_keuangan/neraca', $data);
	}
	
	function _get_neraca_data($bulan, $tahun, $f = '')
	{
		if($f)
		{
			$this->jurnal_model->set_f($f);
		}
		$month = ($bulan) ? $bulan : '';
		$year = ($tahun) ? $tahun : '%';
		$this->jurnal_model->set_month_year($month, $year);
		$journal_data = $this->jurnal_model->get_data();

		$this->akun_model->set_account_group_id(array(1,2,3));
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
			$this->session->set_userdata('ERRMSG_ARR', 'Laporan Neraca tidak dapat dibuat karena belum ada data akun pada kelompok aktiva, kewajiban, dan modal');
			redirect('laporan_keuangan');
		}
	}

	function _get_laba_rugi_data($bulan, $tahun)
	{
		$month = ($bulan) ? $bulan : '';
		$year = ($tahun) ? $tahun : '%';
		$this->jurnal_model->set_month_year($month, $year);
		$journal_data = $this->jurnal_model->get_data();

		$this->akun_model->set_account_group_id(array(4,5));
		$akun = $this->akun_model->get_all_data();

		if($akun)
		{
			foreach ($akun as $row)
			{
				$result[0][$row->kelompok_akun_id][$row->id] = array('nama' => $row->nama, 'saldo' => 0);
				$result[1][$row->kelompok_akun_id][$row->id] = array('nama' => $row->nama, 'saldo' => 0);
			}

			if($journal_data)
			{
				foreach ($journal_data as $row)
				{
					if(isset($result[0][$row->kelompok_akun_id][$row->akun_id]))
					{
						if($row->debit_kredit == 1)
						{
							if($row->proyek_id)
							{
								$result[1][$row->kelompok_akun_id][$row->akun_id]['saldo'] += $row->nilai;
							}
							else
							{
								$result[0][$row->kelompok_akun_id][$row->akun_id]['saldo'] += $row->nilai;
							}
						}
						else
						{
							if($row->proyek_id)
							{
								$result[1][$row->kelompok_akun_id][$row->akun_id]['saldo'] -= $row->nilai;
							}
							else
							{
								$result[0][$row->kelompok_akun_id][$row->akun_id]['saldo'] -= $row->nilai;
							}
						}
					}
				}
			}			
			return $result;
		}
		else
		{
			$this->session->set_userdata('ERRMSG_ARR', 'Laporan Laba Rugi tidak dapat dibuat karena belum ada data akun pada kelompok pendapatan dan biaya');
			redirect('laporan_keuangan');
		}
	}

}
/* End of file laporan_keuangan.php */
/* Location: ./application/controllers/laporan_keuangan.php */
