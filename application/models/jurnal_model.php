<?php

class Jurnal_model extends Model {

	var $data;
	var $details;

	function Jurnal_model()
	{
		parent::Model();
	}
	
	function set_id($id)
	{
		$this->db->where('jurnal.id', $id);
	}

	function set_month_year($month, $year, $sign = '=')
	{
		$unit = '';
		$val = '';
		if($year !== '0')
		{
			$unit = 'YEAR';
			$val = $year;
		} 
		if($month !== '0')
		{
			$unit = ($unit) ? $unit.'_MONTH' : 'MONTH';
			$val .= $month;
 		}
 		if($unit) $this->db->where("EXTRACT($unit FROM tgl) $sign", $val);
	}

	function set_account_id($akun_id)
	{
		$this->db->where('jurnal_detail.akun_id', $akun_id);
	}

	function set_account_group_id($id)
	{
		$this->db->where_in('akun.kelompok_akun_id', $id);
	}
	
/*	function set_f($f)
	{
		$this->db->where_in('jurnal.f_id', $f);
	}
*/

	function set_project($kelompok_akun_id = 0, $proyek_id = '')
	{
		if($kelompok_akun_id) $this->db->where('akun.kelompok_akun_id', $kelompok_akun_id);
		if($proyek_id)
		{
			$this->db->where('jurnal.proyek_id', $proyek_id);
		}
		else
		{
			$this->db->where('jurnal.proyek_id != ', 'NULL');
		}
	}

	function get_data()
	{
		$this->db->select('jurnal.id, jurnal.tgl, jurnal.no, jurnal.keterangan, jurnal.f_id AS f_id, f.nama AS f_name, jurnal.proyek_id, proyek.nama as project_name, jurnal_detail.item, jurnal_detail.akun_id, akun.nama as account_name, akun.kelompok_akun_id, jurnal_detail.debit_kredit, jurnal_detail.nilai');
		$this->db->from('jurnal');
		$this->db->join('f', 'jurnal.f_id=f.id', 'INNER');
		$this->db->join('jurnal_detail', 'jurnal_detail.jurnal_id=jurnal.id', 'INNER');
		$this->db->join('akun', 'jurnal_detail.akun_id=akun.id', 'INNER');
		$this->db->join('proyek', 'jurnal.proyek_id=proyek.id', 'LEFT');
		$this->db->order_by('jurnal.tgl', 'asc');
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

	function get_laba_rugi_data()
	{
		$this->db->select('MONTH(jurnal.tgl) AS month, YEAR(jurnal.tgl) AS year, kelompok_akun.id AS kelompok_akun, jurnal_detail.debit_kredit, SUM(jurnal_detail.nilai) AS nilai');
		$this->db->from('jurnal');
		$this->db->join('jurnal_detail', 'jurnal_detail.jurnal_id=jurnal.id AND jurnal.f_id != 3', 'INNER');
		$this->db->join('akun', 'jurnal_detail.akun_id=akun.id', 'INNER');
		$this->db->join('kelompok_akun', 'akun.kelompok_akun_id = kelompok_akun.id', 'INNER');
		$this->db->where_in('kelompok_akun.id', array( 4, 5 ) );
		$this->db->where('extract(year_month from jurnal.tgl) > extract(year_month from (date_sub(curdate(), interval 1 year)))');		
		$this->db->group_by(array('MONTH(jurnal.tgl)', 'YEAR(jurnal.tgl)', 'kelompok_akun.id', 'jurnal_detail.debit_kredit'));
		$query = $this->db->get();
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$result[$row->month][$row->year][$row->kelompok_akun][$row->debit_kredit] = $row->nilai;
			}
			return $result;
		}
		else
		{
			return FALSE;
		}
	}

	function fill_data()
	{
		$this->data = array(
			'no' => $this->input->post('nomor'),
			'tgl' => $this->input->post('tanggal'),
			'f_id' => $this->input->post('f_id'),
			'keterangan' => $this->input->post('deskripsi'),
			'login_id' => $this->session->userdata('SESS_USER_ID'),
			'waktu_post' => date("Y-m-d H:i:s")
		);
		if($this->input->post('proyekID')) $this->data['proyek_id'] = $this->input->post('proyekID');
		$akun = $this->input->post('akun');
		for ($i = 1; $i <= count($akun); $i++)
		{
			$debit = $this->input->post('debit'.$i);
			$kredit =$this->input->post('kredit'.$i);
			if(($debit != '') || ($kredit != ''))
			{
				if($debit != '')
				{
					$dk = 1;
					$value = $debit;
				}
				else
				{
					$dk = 0;
					$value = $kredit;
				}
				$this->details[$i] = array(
					'item' => $i,
					'akun_id' => $akun[$i-1],
					'debit_kredit' => $dk,
					'nilai' => $value
					);
			}
		}
	}
	
	//Check for duplicate no
	function check_no()
	{
		$this->db->where('no', $this->data['no']);
		$query = $this->db->get('jurnal');

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
		$this->db->trans_start();
		$this->db->insert('jurnal', $this->data);
		$jurnal_id = $this->db->insert_id();
		for ($i = 1; $i <= count($this->details); $i++)
		{
			$this->details[$i]['jurnal_id'] = $jurnal_id;
			$this->db->insert('jurnal_detail', $this->details[$i]);
			$op = ($this->details[$i]['debit_kredit']) ? '+' : '-';
			$this->db->query('UPDATE akun SET saldo = saldo'.$op.$this->details[$i]['nilai'].' WHERE id = '.$this->details[$i]['akun_id']);
		}
		$this->db->trans_complete();	
		return $this->db->trans_status();
	}

}
/* End of file jurnal_model.php */
/* Location: ./application/models/jurnal_model.php */
