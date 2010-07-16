<?php

class Laporan_ssp extends Controller {

	function Laporan_ssp()
	{
		parent::Controller();
		$this->load->library('auth');
		$this->auth->check_user_authentification();
		$this->load->model('pajak_model');
		$this->load->model('laporanssp_model');
		$this->load->helper('indodate');
	}
	
	function index()
	{
		$data['title'] = "Display Laporan SSP";
		$data['main_content'] = 'laporan_pajak/ssp_display';
		$data['laporan_data'] = $this->laporanssp_model->get_all_data();
		$this->load->view('layout/template', $data);
	}

	function add()
	{
		$data['title'] = "Tambah Laporan SSP";
		$data['main_content'] = 'laporan_pajak/ssp_form';
		$data['act'] = 'add';
		$data['form_act'] = 'insert';
		$data['laporan_data'] = FALSE;
		$data['months'] = bulan_list();
		$data['years'] = tahun_list();
		$this->load->view('layout/template', $data);
	}

	function view()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Lihat Laporan SSP";
		$data['main_content'] = 'laporan_pajak/ssp_form';
		$data['act'] = 'view';
		$data['form_act'] = '';
		$data['laporan_data'] = $this->laporanssp_model->get_data_by_id($id);
		$data['months'] = bulan_list();
		$data['years'] = tahun_list();
		$this->load->view('layout/template', $data);
	}

	function edit()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Edit Laporan SSP";
		$data['main_content'] = 'laporan_pajak/ssp_form';
		$data['act'] = 'edit';
		$data['form_act'] = 'update/'.$id;
		$data['laporan_data'] = $this->laporanssp_model->get_data_by_id($id);
		$data['months'] = bulan_list();
		$data['years'] = tahun_list();
		$this->load->view('layout/template', $data);
	}

	function insert()
	{
		if (!$this->_laporanssp_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->add();
		}
		else
		{
			$this->laporanssp_model->fill_data();
			//Insert Data
			if($this->laporanssp_model->insert_data()) 
			{
				$this->session->set_userdata('SUCCESSMSG', 'Laporan Pajak SSP baru sukses ;)');
				redirect('laporan_ssp');
			}
		}
	}

	function update()
	{
		$id = $this->uri->segment(3);
		if (!$this->_laporanssp_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->edit();
		}
		else
		{
			$this->laporanssp_model->fill_data();
			//Update Data
			if($this->laporanssp_model->update_data($id))
			{
				$this->session->set_userdata('SUCCESSMSG', 'Update Laporan Pajak SSP sukses ;)');
				redirect('laporan_ssp');
			}
		}
	}

	function cetak()
	{
		if(!$this->pajak_model->check_data())
		{
			$this->session->set_userdata('ERRMSG_ARR', 'Anda harus mengisi data wajib pajak terlebih dahulu sebelum mencetak laporan pajak');
			redirect($goto);
		}
		else
		{
			$this->load->library('fpdf');
			define('FPDF_FONTPATH',$this->config->item('fonts_path'));
			$this->fpdf->FPDF("P","cm","letter");
			$id = $this->uri->segment(3);
			$data['wajib_pajak_data'] = $this->pajak_model->get_data();	
			$data['laporan_data'] = $this->laporanssp_model->get_data_by_id($id);	
			$this->load->view('laporan_pajak/ssp_report', $data);
		}
	}	
	
	function delete()
	{
		$id = $this->input->post('id');
		if($this->laporanssp_model->delete_data($id))
		{
			$msg = 'S#Laporan SSP yang Anda pilih telah dihapus.';
		}
		else
		{
			$msg .= 'E#Terjadi kesalahan dalam menghapus data Laporan SSP yang Anda pilih. Harap coba lagi.';
		}
		echo $msg;
	}

	function _laporanssp_validation()
	{		
		$this->form_validation->set_rules('map', 'MAP/Kode Jenis Pajak', 'trim|required|numeric');
		$this->form_validation->set_rules('kode', 'Kode Jenis Setoran', 'trim|required|numeric');
		$this->form_validation->set_rules('uraian', 'Uraian Pembayaran', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah Pembayaran', 'trim|required|is_natural');
		$this->form_validation->set_rules('terbilang', 'Terbilang', 'trim|required');
		
		return $this->form_validation->run();
	}

}
/* End of file laporan_ssp.php */
/* Location: ./application/controllers/laporan_ssp.php */
