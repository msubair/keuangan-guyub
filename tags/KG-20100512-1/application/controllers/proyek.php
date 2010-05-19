<?php

class Proyek extends Controller {

	function Proyek()
	{
		parent::Controller();	
		$this->load->library('auth');
		$this->auth->check_user_authentification();
		$this->load->model('proyek_model');		
	}
	
	function index()
	{
		$data['title'] = "Display Proyek";
		$data['main_content'] = 'proyek/display';
		$data['project_data'] = $this->proyek_model->get_all_data();
		$this->load->view('layout/template', $data);
	}

	function add()
	{
		$data['title'] = "Tambah Proyek";
		$data['main_content'] = 'proyek/form';
		$data['act'] = 'add';
		$data['form_act'] = 'insert';
		$data['project_data'] = FALSE;
		$this->load->view('layout/template', $data);
	}

	function view()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Lihat Proyek";
		$data['main_content'] = 'proyek/form';
		$data['act'] = 'view';
		$data['form_act'] = '';
		$data['project_data'] = $this->proyek_model->get_data_by_id($id);
		$this->load->view('layout/template', $data);
	}	

	function edit()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Edit Proyek";
		$data['main_content'] = 'proyek/form';
		$data['act'] = 'edit';
		$data['form_act'] = 'update/'.$id;
		$data['project_data'] = $this->proyek_model->get_data_by_id($id);
		$this->load->view('layout/template', $data);		
	}
	
	function popup()
	{
		$data['project_data'] = $this->proyek_model->get_all_data();
		$this->load->view('proyek/popup', $data);
	}
	
	function insert()
	{
		if (!$this->_proyek_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->add();
		}
		else
		{
			$this->proyek_model->fill_data();
			//Cek Akun
			if(!$this->proyek_model->check_name())
			{
				$this->session->set_userdata('ERRMSG_ARR', 'Nama Proyek telah digunakan');
				$this->add();
			}
			//Insert Data
			elseif($this->proyek_model->insert_data()) 
			{
				$this->session->set_userdata('SUCCESSMSG', 'Proyek baru sukses ;)');
				redirect('proyek');
			}
		}
	}

	function update()
	{
		$id = $this->uri->segment(3);
		if (!$this->_proyek_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->edit();
		}
		else
		{
			$this->proyek_model->fill_data();
			//Cek Akun
			if(!$this->proyek_model->check_name($id))
			{
				$this->session->set_userdata('ERRMSG_ARR', 'Nama Proyek telah digunakan');
				$this->edit();
			}		
			//Update Data
			elseif($this->proyek_model->update_data($id))
			{
				$this->session->set_userdata('SUCCESSMSG', 'Update Proyek sukses ;)');
				redirect('proyek');
			}
		}
	}

	function delete()
	{
		$id = $this->input->post('id');
		$proyek_data = $this->proyek_model->get_data_by_id($id);
		if($this->_check_jurnal_exist($id))
		{
			$msg = 'E#Proyek '.$proyek_data['nama_proyek'].' tidak dapat dihapus karena telah dipakai di jurnal.';
		}
		else
		{
			if($this->proyek_model->delete_data($id))
			{
				$msg = 'S#Proyek '.$proyek_data['nama_proyek'].' telah dihapus.';
			}
			else
			{
				$msg .= 'E#Terjadi kesalahan dalam menghapus data proyek '.$proyek_data['nama_proyek'].'. Harap coba lagi.';
			}
		}
		echo $msg;
	}
	
	function _check_jurnal_exist($id)
	{
		$this->load->model('jurnal_model');
		$this->jurnal_model->set_project(0,$id);
		$journal_data = $this->jurnal_model->get_data();
		if ($journal_data)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function _proyek_validation()
	{
		$this->form_validation->set_rules('nama', 'Nama Proyek', 'trim|required');
		$this->form_validation->set_rules('klien', 'Klien', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|dateISO');
		$this->form_validation->set_rules('biaya', 'Prekiraan Biaya', 'trim|integer');
		$this->form_validation->set_rules('from', 'Perkiraan Waktu', 'trim|dateISO');
		$this->form_validation->set_rules('to', 'Perkiraan Waktu', 'trim|dateISO');
	
		return $this->form_validation->run();
	}

}
/* End of file proyek.php */
/* Location: ./application/controllers/proyek.php */
