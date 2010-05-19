<?php

class Pajak extends Controller {

	function Pajak()
	{
		parent::Controller();
		$this->load->library('auth');
		$this->auth->check_user_authentification(1);
		$this->load->model('pajak_model');
	}
	
	function index()
	{
		$data['title'] = "Wajib Pajak";
		$data['main_content'] = 'pajak/form';		
		$data['pajak_data'] = $this->pajak_model->get_data();
		$this->load->view('layout/template', $data);
	}
			
	function action()
	{
		if (!$this->_pajak_validation())
		{
			$this->session->set_userdata('ERRMSG_ARR', validation_errors());
			$this->index();
		}
		else
		{
			$this->pajak_model->fill_data();
			if($this->pajak_model->check_data())
			{
				$this->update();
			}
			else
			{
				$this->insert();
			}		
		}
	}

	function insert()
	{
		if($this->pajak_model->insert_data()) 
		{
			$this->session->set_userdata('SUCCESSMSG', 'Wajib Pajak baru sukses ;)');
			redirect('pajak');
		}			
	}
	
	function update()
	{
		if($this->pajak_model->update_data())
		{
			$this->session->set_userdata('SUCCESSMSG', 'Update Wajib Pajak sukses ;)');
			redirect('pajak');
		}
	}
	
	function _pajak_validation()
	{
		$this->form_validation->set_rules('npwp', 'NPWP', 'trim|required|numeric');
		$this->form_validation->set_rules('npwp1', 'NPWP', 'trim|required|numeric');
		$this->form_validation->set_rules('npwp2', 'NPWP', 'trim|required|numeric');
		$this->form_validation->set_rules('npwp3', 'NPWP', 'trim|required|numeric');
		$this->form_validation->set_rules('npwp4', 'NPWP', 'trim|required|numeric');
		$this->form_validation->set_rules('npwp5', 'NPWP', 'trim|required|numeric');
		$this->form_validation->set_rules('nama_wp', 'Nama Wajib Pajak', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('telpon', 'Telpon', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|email');
		$this->form_validation->set_rules('jenis', 'Jenis Usaha', 'trim|required');
		$this->form_validation->set_rules('klu', 'KLU', 'trim|required|numeric');
		$this->form_validation->set_rules('nama_pemilik', 'Nama Pemilik', 'trim|required');
		$this->form_validation->set_rules('npwp_pemilik', 'NPWP Pemilik', 'trim|required|numeric');
		$this->form_validation->set_rules('npwp_pemilik1', 'NPWP Pemilik', 'trim|required|numeric');
		$this->form_validation->set_rules('npwp_pemilik2', 'NPWP Pemilik', 'trim|required|numeric');
		$this->form_validation->set_rules('npwp_pemilik3', 'NPWP Pemilik', 'trim|required|numeric');
		$this->form_validation->set_rules('npwp_pemilik4', 'NPWP Pemilik', 'trim|required|numeric');
		$this->form_validation->set_rules('npwp_pemilik5', 'NPWP Pemilik', 'trim|required|numeric');
	
		return $this->form_validation->run();
	}

}
/* End of file pajak.php */
/* Location: ./application/controllers/pajak.php */
