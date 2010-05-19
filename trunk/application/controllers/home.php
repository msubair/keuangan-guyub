<?php

class Home extends Controller {

	function Home()
	{
		parent::Controller();
		$this->load->library('auth');
		$this->auth->check_user_authentification();
	}
	
	function index()
	{
		$data['title'] = "Selamat Datang";
		$data['main_content'] = 'home';
		$this->load->view('layout/template', $data);		
	}

}
/* End of file home.php */
/* Location: ./application/controllers/home.php */
