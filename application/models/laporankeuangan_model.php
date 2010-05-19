<?php

class Laporankeuangan_model extends Model {

	var $data;

	function Laporankeuangan_model()
	{
		parent::Model();
	}
	
	function get_data()
	{		
		$query = $this->db->get('lap_pph21');
		if ($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return FALSE;
		}
	}

	function fill_data()
	{
		$this->data = array(
			'npwp' => $this->input->post('npwp'),
			'nama' => $this->input->post('nama_wp'),
			'alamat' => $this->input->post('alamat'),			
			'telpon' => $this->input->post('telpon'),			
			'fax' => $this->input->post('fax'),			
			'email' => $this->input->post('email'),			
			'jenis_usaha' => $this->input->post('jenis'),			
			'klu' => $this->input->post('klu'),			
			'pemilik' => $this->input->post('nama_pemilik'),			
			'npwp_pemilik' => $this->input->post('npwp_pemilik'),			
			'keterangan' => $this->input->post('keterangan')					
		);			

	}
		
	function insert_data()
	{
		$insert = $this->db->insert('lap_pph21', $this->data);
		return $insert;
	}

}
/* End of file pajak_model.php */
/* Location: ./application/models/pajak_model.php */
