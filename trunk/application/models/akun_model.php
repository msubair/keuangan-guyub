<?php

class Akun_model extends Model {

	var $data;

	function Akun_model()
	{
		parent::Model();
	}
	
	function set_account_group_id($id)
	{
		$this->db->where_in('akun.kelompok_akun_id', $id);
	}

	function get_all_data()
	{
		$this->db->select('akun.id, akun.nama, akun.kode, akun.saldo, akun.kelompok_akun_id, kelompok_akun.nama AS groups_name');
		$this->db->from('akun');
		$this->db->join('kelompok_akun', 'akun.kelompok_akun_id=kelompok_akun.id', 'INNER');
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

	function get_data_by_id($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('akun');
		if ($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return FALSE;
		}
	}

	function get_data_for_dropdown()
	{
		$data = $this->get_all_data();
		if($data) {
			foreach ($data as $row) {
				$akun[$row->id] = $row->groups_name.' - '.$row->nama;
			}
			return $akun;
		}
		else
		{
			return FALSE;
		}
	}

	function get_id_by_name($name)
	{
		$this->db->where('nama', $name);
		$query = $this->db->get('akun');

		if ($query->num_rows() > 0)
		{
			$result = $query->row();
			return $result->id;
		}
		else
		{
			return FALSE;
		}
	}	

	function get_all_account_groups()
	{
		$query = $this->db->get('kelompok_akun');
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$kelompok_akun[$row->id] = $row->nama;
			}
			return $kelompok_akun;
		}
		else
		{
			return FALSE;
		}
	}

	function fill_data()
	{
		$this->data = array(
			'nama' => $this->input->post('nama'),
			'kode' => $this->input->post('kode'),
			'kelompok_akun_id' => $this->input->post('kelompok'),			
			'pajak' => $this->input->post('pajak'),
			'keterangan' => $this->input->post('keterangan')
		);
	}
	
	//Check for duplicate account name
	function check_name($id = '')
	{
		$this->db->where('nama', $this->data['nama']);
		if($id != '') $this->db->where('id !=', $id);
		$query = $this->db->get('akun');

		if ($query->num_rows() > 0)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}	

	//Check for duplicate account kode
	function check_code($id = '')
	{
		$this->db->where('kode', $this->data['kode']);
		if($id != '') $this->db->where('id !=', $id);
		$query = $this->db->get('akun');

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
		$insert = $this->db->insert('akun', $this->data);
		return $insert;
	}

	function update_data($id)
	{
		$this->db->where('id', $id);
		$update = $this->db->update('akun', $this->data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('id', $id);
		$delete = $this->db->delete('akun');
		return $delete;
	}

}
/* End of file akun_model.php */
/* Location: ./application/models/akun_model.php */
