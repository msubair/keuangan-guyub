<?php

class Laporanpph21_model extends Model {

	var $data;

	function Laporanpph21_model()
	{
		parent::Model();
	}
	
	function get_all_data()
	{		
		$query = $this->db->get('lap_pph21');
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
			'bulan' => $this->input->post('bulan'),
			'tahun' => $this->input->post('tahun'),
			'penerima_1' => $this->input->post('penerima_1'),			
			'penerima_2' => $this->input->post('penerima_2'),			
			'penerima_3' => $this->input->post('penerima_3'),			
			'penerima_4' => $this->input->post('penerima_4'),			
			'penerima_5' => $this->input->post('penerima_5'),			
			'penerima_6' => $this->input->post('penerima_6'),			
			'penerima_7' => $this->input->post('penerima_7'),			
			'penerima_8' => $this->input->post('penerima_8'),			
			'penerima_9' => $this->input->post('penerima_9'),			
			'penerima_10' => $this->input->post('penerima_10'),			
			'penerima_11' => $this->input->post('penerima_11'),			
			'penerima_12' => $this->input->post('penerima_12'),			
			'penerima_13' => $this->input->post('penerima_13'),			
			'penerima_14' => $this->input->post('penerima_14'),			
			'penerima_15' => $this->input->post('penerima_15'),			
			'penerima_16' => $this->input->post('penerima_16'),			
			'penerima_17' => $this->input->post('penerima_17'),			
			'penerima_18' => $this->input->post('penerima_18'),			
			'penerima_19' => $this->input->post('penerima_19'),			
			'penerima_20' => $this->input->post('penerima_20'),	
			'bruto_1' => $this->input->post('bruto_1'),			
			'bruto_2' => $this->input->post('bruto_2'),			
			'bruto_3' => $this->input->post('bruto_3'),			
			'bruto_4' => $this->input->post('bruto_4'),			
			'bruto_5' => $this->input->post('bruto_5'),			
			'bruto_6' => $this->input->post('bruto_6'),			
			'bruto_7' => $this->input->post('bruto_7'),			
			'bruto_8' => $this->input->post('bruto_8'),			
			'bruto_9' => $this->input->post('bruto_9'),			
			'bruto_10' => $this->input->post('bruto_10'),			
			'bruto_11' => $this->input->post('bruto_11'),			
			'bruto_12' => $this->input->post('bruto_12'),			
			'bruto_13' => $this->input->post('bruto_13'),			
			'bruto_14' => $this->input->post('bruto_14'),			
			'bruto_15' => $this->input->post('bruto_15'),			
			'bruto_16' => $this->input->post('bruto_16'),			
			'bruto_17' => $this->input->post('bruto_17'),			
			'bruto_18' => $this->input->post('bruto_18'),			
			'bruto_19' => $this->input->post('bruto_19'),			
			'bruto_20' => $this->input->post('bruto_20'),	
			'pajak_1' => $this->input->post('pajak_1'),			
			'pajak_2' => $this->input->post('pajak_2'),			
			'pajak_3' => $this->input->post('pajak_3'),			
			'pajak_4' => $this->input->post('pajak_4'),			
			'pajak_5' => $this->input->post('pajak_5'),			
			'pajak_6' => $this->input->post('pajak_6'),			
			'pajak_7' => $this->input->post('pajak_7'),			
			'pajak_8' => $this->input->post('pajak_8'),			
			'pajak_9' => $this->input->post('pajak_9'),			
			'pajak_10' => $this->input->post('pajak_10'),			
			'pajak_11' => $this->input->post('pajak_11'),			
			'pajak_12' => $this->input->post('pajak_12'),			
			'pajak_13' => $this->input->post('pajak_13'),			
			'pajak_14' => $this->input->post('pajak_14'),			
			'pajak_15' => $this->input->post('pajak_15'),			
			'pajak_16' => $this->input->post('pajak_16'),			
			'pajak_17' => $this->input->post('pajak_17'),			
			'pajak_18' => $this->input->post('pajak_18'),			
			'pajak_19' => $this->input->post('pajak_19'),			
			'pajak_20' => $this->input->post('pajak_20'),			
			'lampiran_a' => $this->input->post('lampiran_a'),			
			'lampiran_b' => $this->input->post('lampiran_b'),			
			'lampiran_c' => $this->input->post('lampiran_c'),			
			'lampiran_d' => $this->input->post('lampiran_d'),			
			'lampiran_e' => $this->input->post('lampiran_e'),			
			'lampiran_f' => $this->input->post('lampiran_f'),			
			'lampiran_g' => $this->input->post('lampiran_g'),			
			'lampiran_h' => $this->input->post('lampiran_h')
		);
	}
	
	function insert_data()
	{
		$insert = $this->db->insert('lap_pph21', $this->data);
		return $insert;
	}

	function update_data($id)
	{
		$this->db->where('id', $id);
		$update = $this->db->update('lap_pph21', $this->data);
		return $update;
	}

	function delete_data($id){
		$this->db->where('id', $id);
		$delete = $this->db->delete('lap_pph21');
		return $delete;
	}

}
/* End of file laporanpph21_model.php */
/* Location: ./application/models/laporanpph21_model.php */
