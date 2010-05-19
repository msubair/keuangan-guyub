<?php

class Pajak_model extends Model {
	
	var $id;
	var $data;

	function Pajak_model()
	{
		parent::Model();
	}
	
	function get_data()
	{
		$query = $this->db->get('wp');
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
			'npwp' => $this->input->post('npwp').$this->input->post('npwp1').$this->input->post('npwp2').$this->input->post('npwp3').$this->input->post('npwp4').$this->input->post('npwp5'),
			'nama' => $this->input->post('nama_wp'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'telpon' => $this->input->post('telpon'),
			'fax' => $this->input->post('fax'),
			'email' => $this->input->post('email'),
			'jenis_usaha' => $this->input->post('jenis'),
			'klu' => $this->input->post('klu'),	
			'pemilik' => $this->input->post('nama_pemilik'),
			'npwp_pemilik' => $this->input->post('npwp_pemilik').$this->input->post('npwp_pemilik1').$this->input->post('npwp_pemilik2').$this->input->post('npwp_pemilik3').$this->input->post('npwp_pemilik4').$this->input->post('npwp_pemilik5'),
			'keterangan' => $this->input->post('keterangan')
		);
	}
		
	function check_data()
	{
		$query = $this->db->get('wp');
		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$this->id = $row->id;
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}	

	function insert_data()
	{
		$insert = $this->db->insert('wp', $this->data);
		return $insert;
	}
	
	function update_data()
	{
		$this->db->where('id', $this->id);
		$update = $this->db->update('wp', $this->data);
		return $update;
	}

}
/* End of file pajak_model.php */
/* Location: ./application/models/pajak_model.php */
