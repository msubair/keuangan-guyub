<?php

class User extends Controller {

	function User()
	{
		parent::Controller();
		$this->load->library('auth');
		if(($this->uri->segment(2) !== 'edit' && $this->uri->segment(2) !== 'update') || $this->uri->segment(3) !== $this->session->userdata('SESS_USER_ID'))
		{
			$this->auth->check_user_authentification(1);
		}
		$this->load->model('user_model');
	}
	
	function index()
	{
		$data['title'] = "Display Pengguna";
		$data['main_content'] = 'user/display';
		$data['user_data'] = $this->user_model->get_all_data();
		$this->load->view('layout/template', $data);
	}

	function add()
	{
		$data['title'] = "Tambah Pengguna";
		$data['main_content'] = 'user/form';
		$data['act'] = 'add';
		$data['form_act'] = 'insert';
		$data['user_data'] = FALSE;
		$this->load->view('layout/template', $data);
	}

	function view()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Lihat Pengguna";
		$data['main_content'] = 'user/form';
		$data['act'] = 'view';
		$data['form_act'] = '';
		$data['user_data'] = $this->user_model->get_data_by_id($id);
		$this->load->view('layout/template', $data);
	}

	function edit()
	{
		$id = $this->uri->segment(3);
		$data['title'] = "Edit Pengguna";
		$data['main_content'] = 'user/form';
		$data['act'] = 'edit';
		$data['form_act'] = 'update/'.$id;
		$data['user_data'] = $this->user_model->get_data_by_id($id);
		$this->load->view('layout/template', $data);
	}

	function insert()
	{
		if (!$this->_user_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->add();
		}
		else
		{
			$this->user_model->fill_data();
			//Cek Login
			if(!$this->user_model->check_username())
			{
				$this->session->set_userdata('ERRMSG_ARR', 'Username telah digunakan');
				$this->add();
			}
			//Insert Data
			elseif($this->user_model->insert_data()) 
			{
				$this->session->set_userdata('SUCCESSMSG', 'Register pengguna baru sukses ;)');
				redirect('user');
			}
		}
	}

	function update()
	{
		$id = $this->uri->segment(3);
		if (!$this->_user_validation(1))
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->edit();
		}
		else
		{
			$this->user_model->fill_data();
			//Cek Login
			if(!$this->user_model->check_username($id))
			{
				$this->session->set_userdata('ERRMSG_ARR', 'Username telah digunakan');
				$this->edit();
			}
			//Update Data
			elseif($this->user_model->update_data($id))
			{
				$this->session->set_userdata('SUCCESSMSG', 'Update pengguna sukses ;)');
				if(!$this->session->userdata('ADMIN'))
				{
					redirect('user/edit/'.$id);
				}
				else
				{
					redirect('user');
				}
			}
		}
	}

	function delete()
	{
		$id = $this->input->post('id');
		$user_data = $this->user_model->get_data_by_id($id);
		if($this->user_model->delete_data($id))
		{
			$msg = 'S#User '.$user_data['nama_depan'].' '.$user_data['nama_belakang'].' telah dihapus.';
		}
		else
		{
			$msg .= 'E#Terjadi kesalahan dalam menghapus data user '.$user_data['nama_depan'].' '.$user_data['nama_belakang'].'. Harap coba lagi.';
		}
		echo $msg;
	}

	function _user_validation($edit=0)
	{
		$this->form_validation->set_rules('fname', 'Nama Depan', 'trim|required|alpha');
		$this->form_validation->set_rules('lname', 'Nama Belakang', 'trim|required|alpha');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_underscores');
		if($edit)
		{
			$this->form_validation->set_rules('password', 'Password', 'trim|matches[cpassword]');
		}
		else
		{
			$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
			$this->form_validation->set_rules('cpassword', 'Ulangi Password', 'trim|required');
		}

		return $this->form_validation->run();
	}

}
/* End of file user.php */
/* Location: ./application/controllers/user.php */
