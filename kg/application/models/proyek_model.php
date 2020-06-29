<?php

class Proyek_model extends Model {

	var $data;
	
	function Proyek_model()
	{
		parent::Model();
	}
	
	function set_klien_id($klien_id)
	{
		$this->db->where('proyek.klien_id', $klien_id);
	}

	function get_all_data(){
		$this->db->select('proyek.id, proyek.nama AS nama_proyek, klien.nama as nama_klien, proyek.status');
		$this->db->from('proyek');
		$this->db->join('klien', 'proyek.klien_id=klien.id', 'INNER');
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

	function get_data_by_id($id){
		$this->db->select('proyek.id, proyek.nama AS nama_proyek, proyek.klien_id, klien.nama as nama_klien, proyek.spk_no, proyek.spk_tgl, proyek.biaya, proyek.tgl_mulai, proyek.tgl_selesai, proyek.status, proyek.keterangan');
		$this->db->from('proyek');
		$this->db->join('klien', 'proyek.klien_id=klien.id', 'INNER');
		$this->db->where('proyek.id', $id);
		$query = $this->db->get();
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
//		echo 'hoho';
//		echo $this->input->post('klienID');
		$status = ($this->input->post('status')) ? $this->input->post('status') : 'Start';
		$this->data = array(
			'nama' => $this->input->post('nama'),
			'klien_id' => $this->input->post('klienID'),
			'spk_no' => $this->input->post('nomorspk'),			
			'spk_tgl' => $this->input->post('tanggal'),
			'biaya' => $this->input->post('biaya'),
			'tgl_mulai' => $this->input->post('from'),
			'tgl_selesai' => $this->input->post('to'),
			'status' => $status,
			'keterangan' => $this->input->post('keterangan')
		);
	}
	
	//Check for duplicate login ID
	function check_name($id = '')
	{
		$this->db->where('nama', $this->data['nama']);
		if($id != '') $this->db->where('id !=', $id);
		$query = $this->db->get('proyek');

		if ($query->num_rows() > 0)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}	

	function insert_data()
	{
		$insert = $this->db->insert('proyek', $this->data);
		return $insert;
	}

	function update_data($id)
	{
		$this->db->where('id', $id);
		$update = $this->db->update('proyek', $this->data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('id', $id);
		$delete = $this->db->delete('proyek');
		return $delete;
	}

}

/* End of file proyek_model.php */
/* Location: ./application/models/proyek_model.php */
