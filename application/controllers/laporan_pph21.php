<?php

class Laporan_pph21 extends Controller {

	function Laporan_pph21()
	{
		parent::Controller();
		$this->load->library('auth');
		$this->auth->check_user_authentification();
		$this->load->model('pajak_model');
		$this->load->model('laporanpph21_model');
		$this->load->helper('indodate');
	}
	
	function index()
	{
		$data['title'] = "Display Laporan Pajak PPH 21";
		$data['main_content'] = 'laporan_pajak/pph21_display';
		$data['laporan_data'] = $this->laporanpph21_model->get_all_data();
		$this->load->view('layout/template', $data);
	}	

	function add()
	{
		$data['title'] = "Tambah Laporan Pajak PPH 21";
		$data['main_content'] = 'laporan_pajak/pph21_form';
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
		$data['title'] = "Lihat Laporan Pajak PPH 21";
		$data['main_content'] = 'laporan_pajak/pph21_form';
		$data['act'] = 'view';
		$data['form_act'] = '';
		$data['laporan_data'] = $this->laporanpph21_model->get_data_by_id($id);
		$data['months'] = bulan_list();
		$data['years'] = tahun_list();
		$this->load->view('layout/template', $data);
	}

	function edit()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Edit Laporan Pajak PPH 21";
		$data['main_content'] = 'laporan_pajak/pph21_form';
		$data['act'] = 'edit';
		$data['form_act'] = 'update/'.$id;
		$data['laporan_data'] = $this->laporanpph21_model->get_data_by_id($id);
		$data['months'] = bulan_list();
		$data['years'] = tahun_list();
		$this->load->view('layout/template', $data);
	}

	function insert()
	{
		if (!$this->_laporanpph21_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->add();
		}
		else
		{
			$this->laporanpph21_model->fill_data();
			//Insert Data
			if($this->laporanpph21_model->insert_data()) 
			{
				$this->session->set_userdata('SUCCESSMSG', 'Laporan Pajak PPH 21 baru sukses ;)');
				redirect('laporan_pph21');
			}
		}
	}

	function update()
	{
		$id = $this->uri->segment(3);
		if (!$this->_laporanpph21_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->edit();
		}
		else
		{
			$this->laporanpph21_model->fill_data();
			//Update Data
			if($this->laporanpph21_model->update_data($id))
			{
				$this->session->set_userdata('SUCCESSMSG', 'Update Laporan Pajak PPH 21 sukses ;)');
				redirect('laporan_pph21');
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
			$this->fpdf->FPDF("P","cm","legal");
			$id = $this->uri->segment(3);
			$data['wajib_pajak_data'] = $this->pajak_model->get_data();	
			$data['laporan_data'] = $this->laporanpph21_model->get_data_by_id($id);	
			$this->load->view('laporan_pajak/pph21_report', $data);	
		}	
	}	
	
	function delete()
	{
		$id = $this->input->post('id');
		$laporanpph21_data = $this->laporanpph21_model->get_data_by_id($id);
		if($this->laporanpph21_model->delete_data($id))
		{
			$msg = 'S#Laporan PPh 21 untuk bulan '.nama_bulan($laporanpph21_data['bulan']).' tahun '.$laporanpph21_data['tahun'].' telah dihapus.';
		}
		else
		{
			$msg .= 'E#Terjadi kesalahan dalam menghapus data Laporan PPh 21 untuk bulan '.nama_bulan($laporanpph21_data['bulan']).' tahun '.$laporanpph21_data['tahun'].'. Harap coba lagi.';
		}
		echo $msg;
	}

	function _laporanpph21_validation()
	{		
		$this->form_validation->set_rules('penerima_1', 'Jumlah Penerima Penghasilan Pegawai Tetap', 'trim|integer');
		$this->form_validation->set_rules('penerima_2', 'Jumlah Penerima Penghasilan Penerima Pensiun Berkala', 'trim|integer');
		$this->form_validation->set_rules('penerima_3', 'Jumlah Penerima Penghasilan Pegawai Tidak Tetap', 'trim|integer');
		$this->form_validation->set_rules('penerima_4', 'Jumlah Penerima Penghasilan Distributor MLM', 'trim|integer');
		$this->form_validation->set_rules('penerima_5', 'Jumlah Penerima Penghasilan Petugas Dinas Luar Asuransi', 'trim|integer');
		$this->form_validation->set_rules('penerima_6', 'Jumlah Penerima Penghasilan Penjaja Barang Dagangan', 'trim|integer');
		$this->form_validation->set_rules('penerima_7', 'Jumlah Penerima Penghasilan Tenaga Ahli', 'trim|integer');
		$this->form_validation->set_rules('penerima_8', 'Jumlah Penerima Penghasilan Anggota Dewan Komisaris', 'trim|integer');
		$this->form_validation->set_rules('penerima_9', 'Jumlah Penerima Penghasilan Mantan Pegawai yang Menerima Jasa Produksi', 'trim|integer');
		$this->form_validation->set_rules('penerima_10', 'Jumlah Penerima Penghasilan Pegawai yang Melakukan Penarikan Dana Pensiun', 'trim|integer');
		$this->form_validation->set_rules('penerima_11', 'Jumlah Penerima Penghasilan Peserta Kegiatan', 'trim|integer');
		$this->form_validation->set_rules('penerima_12', 'Jumlah Penerima Penghasilan Bukan Pegawai yang Menerima Penghasilan yang Bersifat Berkesinambungan', 'trim|integer');
		$this->form_validation->set_rules('penerima_13', 'Jumlah Penerima Penghasilan Bukan Pegawai yang Menerima Penghasilan yang Tidak Bersifat Berkesinambungan', 'trim|integer');
		$this->form_validation->set_rules('penerima_14', 'Jumlah Penerima Penghasilan Pegawai atau Pemberi Jasa sebagai Wajib Pajak Luar Negeri', 'trim|integer');
		$this->form_validation->set_rules('penerima_15', 'Jumlah Penerima Penghasilan PPh Pasal 21 dan/atau Pasal 26', 'trim|integer');
		$this->form_validation->set_rules('penerima_16', 'Jumlah Penerima Penghasilan STP PPh Pasal 21 dan/atau Pasal 26', 'trim|integer');
		$this->form_validation->set_rules('penerima_17', 'Jumlah Penerima Penghasilan Penyetoran dengan SSP PPh Pasal 21', 'trim|integer');
		$this->form_validation->set_rules('penerima_18', 'Jumlah Penerima Penghasilan Penyetoran dengan SSP', 'trim|integer');
		$this->form_validation->set_rules('penerima_19', 'Jumlah Penerima Penghasilan Penerima Uang Pesangon', 'trim|integer');
		$this->form_validation->set_rules('penerima_20', 'Jumlah Penerima Penghasilan Pejabat Negara', 'trim|integer');
		$this->form_validation->set_rules('bruto_1', 'Jumlah Penghasilan Bruto Pegawai Tetap', 'trim|integer');
		$this->form_validation->set_rules('bruto_2', 'Jumlah Penghasilan Bruto Penerima Pensiun Berkala', 'trim|integer');
		$this->form_validation->set_rules('bruto_3', 'Jumlah Penghasilan Bruto Pegawai Tidak Tetap', 'trim|integer');
		$this->form_validation->set_rules('bruto_4', 'Jumlah Penghasilan Bruto Distributor MLM', 'trim|integer');
		$this->form_validation->set_rules('bruto_5', 'Jumlah Penghasilan Bruto Petugas Dinas Luar Asuransi', 'trim|integer');
		$this->form_validation->set_rules('bruto_6', 'Jumlah Penghasilan Bruto Penjaja Barang Dagangan', 'trim|integer');
		$this->form_validation->set_rules('bruto_7', 'Jumlah Penghasilan Bruto Tenaga Ahli', 'trim|integer');
		$this->form_validation->set_rules('bruto_8', 'Jumlah Penghasilan Bruto Anggota Dewan Komisaris', 'trim|integer');
		$this->form_validation->set_rules('bruto_9', 'Jumlah Penghasilan Bruto Mantan Pegawai yang Menerima Jasa Produksi', 'trim|integer');
		$this->form_validation->set_rules('bruto_10', 'Jumlah Penghasilan Bruto Pegawai yang Melakukan Penarikan Dana Pensiun', 'trim|integer');
		$this->form_validation->set_rules('bruto_11', 'Jumlah Penghasilan Bruto Peserta Kegiatan', 'trim|integer');
		$this->form_validation->set_rules('bruto_12', 'Jumlah Penghasilan Bruto Bukan Pegawai yang Menerima Penghasilan yang Bersifat Berkesinambungan', 'trim|integer');
		$this->form_validation->set_rules('bruto_13', 'Jumlah Penghasilan Bruto Bukan Pegawai yang Menerima Penghasilan yang Tidak Bersifat Berkesinambungan', 'trim|integer');
		$this->form_validation->set_rules('bruto_14', 'Jumlah Penghasilan Bruto Pegawai atau Pemberi Jasa sebagai Wajib Pajak Luar Negeri', 'trim|integer');
		$this->form_validation->set_rules('bruto_15', 'Jumlah Penghasilan Bruto PPh Pasal 21 dan/atau Pasal 26', 'trim|integer');
		$this->form_validation->set_rules('bruto_16', 'Jumlah Penghasilan Bruto STP PPh Pasal 21 dan/atau Pasal 26', 'trim|integer');
		$this->form_validation->set_rules('bruto_17', 'Jumlah Penghasilan Bruto Penyetoran dengan SSP PPh Pasal 21', 'trim|integer');
		$this->form_validation->set_rules('bruto_18', 'Jumlah Penghasilan Bruto Penyetoran dengan SSP', 'trim|integer');
		$this->form_validation->set_rules('bruto_19', 'Jumlah Penghasilan Bruto Penerima Uang Pesangon', 'trim|integer');
		$this->form_validation->set_rules('bruto_20', 'Jumlah Penghasilan Bruto Pejabat Negara', 'trim|integer');
		$this->form_validation->set_rules('pajak_1', 'Jumlah Pajak Terutang Pegawai Tetap', 'trim|integer');
		$this->form_validation->set_rules('pajak_2', 'Jumlah Pajak Terutang Penerima Pensiun Berkala', 'trim|integer');
		$this->form_validation->set_rules('pajak_3', 'Jumlah Pajak Terutang Pegawai Tidak Tetap', 'trim|integer');
		$this->form_validation->set_rules('pajak_4', 'Jumlah Pajak Terutang Distributor MLM', 'trim|integer');
		$this->form_validation->set_rules('pajak_5', 'Jumlah Pajak Terutang Petugas Dinas Luar Asuransi', 'trim|integer');
		$this->form_validation->set_rules('pajak_6', 'Jumlah Pajak Terutang Penjaja Barang Dagangan', 'trim|integer');
		$this->form_validation->set_rules('pajak_7', 'Jumlah Pajak Terutang Tenaga Ahli', 'trim|integer');
		$this->form_validation->set_rules('pajak_8', 'Jumlah Pajak Terutang Anggota Dewan Komisaris', 'trim|integer');
		$this->form_validation->set_rules('pajak_9', 'Jumlah Pajak Terutang Mantan Pegawai yang Menerima Jasa Produksi', 'trim|integer');
		$this->form_validation->set_rules('pajak_10', 'Jumlah Pajak Terutang Pegawai yang Melakukan Penarikan Dana Pensiun', 'trim|integer');
		$this->form_validation->set_rules('pajak_11', 'Jumlah Pajak Terutang Peserta Kegiatan', 'trim|integer');
		$this->form_validation->set_rules('pajak_12', 'Jumlah Pajak Terutang Bukan Pegawai yang Menerima Penghasilan yang Bersifat Berkesinambungan', 'trim|integer');
		$this->form_validation->set_rules('pajak_13', 'Jumlah Pajak Terutang Bukan Pegawai yang Menerima Penghasilan yang Tidak Bersifat Berkesinambungan', 'trim|integer');
		$this->form_validation->set_rules('pajak_14', 'Jumlah Pajak Terutang Pegawai atau Pemberi Jasa sebagai Wajib Pajak Luar Negeri', 'trim|integer');
		$this->form_validation->set_rules('pajak_15', 'Jumlah Pajak Terutang PPh Pasal 21 dan/atau Pasal 26', 'trim|integer');
		$this->form_validation->set_rules('pajak_16', 'Jumlah Pajak Terutang STP PPh Pasal 21 dan/atau Pasal 26', 'trim|integer');
		$this->form_validation->set_rules('pajak_17', 'Jumlah Pajak Terutang Penyetoran dengan SSP PPh Pasal 21', 'trim|integer');
		$this->form_validation->set_rules('pajak_18', 'Jumlah Pajak Terutang Penyetoran dengan SSP', 'trim|integer');
		$this->form_validation->set_rules('pajak_19', 'Jumlah Pajak Terutang Penerima Uang Pesangon', 'trim|integer');
		$this->form_validation->set_rules('pajak_20', 'Jumlah Pajak Terutang Pejabat Negara', 'trim|integer');
		
		return $this->form_validation->run();
	}
		
}
/* End of file laporan_pph21.php */
/* Location: ./application/controllers/laporan_pph21.php */
