<?php

class User_model extends Model {

	var $data;

	function validate_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$this->db->where('aktif', 1);
		$query = $this->db->get('login');
		
		return $query;
	}
	
	function get_all_data()
	{
		$this->db->where('aktif', 1);
		$query = $this->db->get('login');
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
		$query = $this->db->get('login');
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
			'nama_depan' => $this->input->post('fname'),
			'nama_belakang' => $this->input->post('lname'),
			'username' => $this->input->post('username'),
			'administrator' => $this->input->post('administrator'),
			'aktif' => 1
		);
		if($this->input->post('password')) $this->data['password'] = md5($this->input->post('password'));
	}
	
	//Check for duplicate login ID
	function check_username($id = '')
	{
		$this->db->where('username', $this->data['username']);
		$this->db->where('aktif', 1);
		if($id != '') $this->db->where('id !=', $id);
		$query = $this->db->get('login');

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
		$insert = $this->db->insert('login', $this->data);
		return $insert;
	}

	function update_data($id)
	{
		$this->db->where('id', $id);
		$update = $this->db->update('login', $this->data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('id', $id);
		$delete = $this->db->update('login', array('aktif' => 0));
		return $delete;
	}

}
/* End of file user_model.php */
/* Location: ./application/models/user_model.php */
