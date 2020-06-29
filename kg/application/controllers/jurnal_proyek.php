<?php

class Jurnal_proyek extends Controller {

	function Jurnal_proyek()
	{
		parent::Controller();	
		$this->load->library('auth');
		$this->auth->check_user_authentification();
		$this->load->model('jurnal_model');
		$this->load->model('akun_model');
	}
	
	function index()
	{
		$data['title'] = "Jurnal Proyek";
		$data['main_content'] = 'jurnal_proyek/display';
		$this->jurnal_model->set_project();
		$data['journal_data'] = $this->jurnal_model->get_data();
		$this->load->view('layout/template', $data);
	}

	function search()
	{
		$this->jurnal_model->set_project($this->input->post('jenis'),$this->input->post('id'));
		$result = $this->jurnal_model->get_data();
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
				$data .= "'".$row->project_name."',";
				$data .= "'".$row->tgl."',";
				$data .= "'".$row->no."',";
				$data .= "'".$row->item."',";
				$data .= "'".$row->account_name."',";
				$data .= "'".$d."',";
				$data .= "'".$k."',";
				$data .= ']';
				$journal_data[] = $data;
			}
		}
		echo '['.implode(',',$journal_data).']';
	}

	function add()
	{
		$data['title'] = "Tambah Jurnal Proyek";
		$data['main_content'] = 'jurnal_proyek/form';
		// edited by Adhe on 19.05.2010
		$accounts = $this->akun_model->get_data_for_dropdown();
		$data['accounts'] = ($accounts) ? $accounts : array('-- Belum ada Akun --');
		// end
		$this->load->view('layout/template', $data);
	}

}
/* End of file jurnal_proyek.php */
/* Location: ./application/controllers/jurnal_proyek.php */
