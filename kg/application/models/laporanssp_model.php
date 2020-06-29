<?php

class Laporanssp_model extends Model {

	var $data;

	function Laporanssp_model()
	{
		parent::Model();
	}
	
	function get_all_data()
	{		
		$query = $this->db->get('lap_ssp');
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

	function get_data_by_id($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('lap_ssp');
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
			'bulan' => $this->input->post('bulan'),
			'tahun' => $this->input->post('tahun'),
			'jenis_pajak' => $this->input->post('map'),			
			'kode_setoran' => $this->input->post('kode'),
			'keterangan' => $this->input->post('uraian'),
			'jumlah' => $this->input->post('jumlah'),
			'terbilang' => $this->input->post('terbilang')
		);
	}
	
	function insert_data()
	{
		$insert = $this->db->insert('lap_ssp', $this->data);
		return $insert;
	}

	function update_data($id)
	{
		$this->db->where('id', $id);
		$update = $this->db->update('lap_ssp', $this->data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('id', $id);
		$delete = $this->db->delete('lap_ssp');
		return $delete;
	}

}
/* End of file laporanssp_model.php */
/* Location: ./application/models/laporanssp_model.php */
