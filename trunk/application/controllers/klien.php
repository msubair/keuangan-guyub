<?php

class Klien extends Controller {

	function Klien()
	{
		parent::Controller();	
		$this->load->library('auth');
		$this->auth->check_user_authentification();
		$this->load->model('klien_model');		
	}
	
	function index()
	{
		$data['title'] = "Display Klien";
		$data['main_content'] = 'klien/display';
		$data['client_data'] = $this->klien_model->get_all_data();
		$this->load->view('layout/template', $data);
	}

	function add()
	{
		$data['title'] = "Tambah Klien";
		$data['main_content'] = 'klien/form';
		$data['act'] = 'add';
		$data['form_act'] = 'insert';
		$data['client_data'] = FALSE;
		$this->load->view('layout/template', $data);
	}

	function view()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Lihat Klien";
		$data['main_content'] = 'klien/form';
		$data['act'] = 'view';
		$data['form_act'] = '';
		$data['client_data'] = $this->klien_model->get_data_by_id($id);
		$this->load->view('layout/template', $data);
	}	

	function edit()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Edit Klien";
		$data['main_content'] = 'klien/form';
		$data['act'] = 'edit';
		$data['form_act'] = 'update/'.$id;
		$data['client_data'] = $this->klien_model->get_data_by_id($id);
		$this->load->view('layout/template', $data);
	}
	
	function popup()
	{
		$data['client_data'] = $this->klien_model->get_all_data();
		$this->load->view('klien/popup', $data);
	}

	function insert()
	{
		if (!$this->_klien_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->add();
		}
		else
		{
			$this->klien_model->fill_data();
			//Cek Akun
			if(!$this->klien_model->check_name())
			{
				$this->session->set_userdata('ERRMSG_ARR', 'Nama Klien telah digunakan');
				$this->add();
			}
			//Insert Data
			elseif($this->klien_model->insert_data()) 
			{
				$this->session->set_userdata('SUCCESSMSG', 'Klien baru sukses ;)');
				redirect('klien');
			}			
		}
	}

	function update()
	{
		$id = $this->uri->segment(3);
		if (!$this->_klien_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->edit();
		}
		else
		{
			$this->klien_model->fill_data();
			//Cek Akun
			if(!$this->klien_model->check_name($id))
			{
				$this->session->set_userdata('ERRMSG_ARR', 'Nama Klien telah digunakan');
				$this->edit();
			}
			//Update Data
			elseif($this->klien_model->update_data($id))
			{
				$this->session->set_userdata('SUCCESSMSG', 'Update Klien sukses ;)');
				redirect('klien');
			}
		}
	}

	function delete()
	{
		$id = $this->input->post('id');
		$klien_data = $this->klien_model->get_data_by_id($id);
		if($this->_check_project_exist($id))
		{
			$msg = 'E#Klien '.$klien_data['nama'].' tidak dapat dihapus karena telah digunakan pada proyek.';
		}
		else
		{
			if($this->klien_model->delete_data($id))
			{
				$msg = 'S#Klien '.$klien_data['nama'].' telah dihapus.';
			}
			else
			{
				$msg .= 'E#Terjadi kesalahan dalam menghapus data klien '.$klien_data['nama'].'. Harap coba lagi.';
			}
		}
		echo $msg;
	}
	
	function _check_project_exist($id)
	{
		$this->load->model('proyek_model');
		$this->proyek_model->set_klien_id($id);
		$proyek_data = $this->proyek_model->get_all_data();
		if ($proyek_data)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	function _klien_validation()
	{	
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('npwp', 'NPWP', 'trim|numeric');		
		$this->form_validation->set_rules('npwp1', 'NPWP', 'trim|numeric');		
		$this->form_validation->set_rules('npwp2', 'NPWP', 'trim|numeric');		
		$this->form_validation->set_rules('npwp3', 'NPWP', 'trim|numeric');		
		$this->form_validation->set_rules('npwp4', 'NPWP', 'trim|numeric');		
		$this->form_validation->set_rules('npwp5', 'NPWP', 'trim|numeric');		
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('telpon', 'Telpon', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
	
		return $this->form_validation->run();
	}

}
/* End of file klien.php */
/* Location: ./application/controllers/klien.php */
