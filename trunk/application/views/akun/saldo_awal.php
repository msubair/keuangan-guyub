<script type="text/javascript" src="<?php echo base_url();?>js/jurnal.js"></script>

<script type="text/javascript" charset="utf-8">

	function cekAkun()
	{
		var tbl = $('#tblDetail');
		var lastRow = tbl.find("tr").length;
		var debitSum = 0;
		var kreditSum = 0;

		for (i=1; i<lastRow; i++) 
		{
			if (typeof($("#debit"+i).val()) != 'undefined') debitSum += parseInt($("#debit"+i).val());
			if (typeof($("#kredit"+i).val()) != 'undefined') kreditSum += parseInt($("#kredit"+i).val());
		}
		if(debitSum != kreditSum) {
			oDialog.html("Jumlah debit harus sama dengan jumlah kredit.");
			oDialog.dialog('open');
			return false;
		} else {
			return true;
		}
	}
	
</script>

<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">
<br/>

<?php
	echo form_open('akun/input_saldo_awal', array('id' => 'saldo_awal_form', 'onsubmit' => 'return cekAkun();'));

	if($this->session->userdata('SUCCESSMSG'))
	{
		echo "<div class='success'>".$this->session->userdata('SUCCESSMSG')."</div>";
		$this->session->unset_userdata('SUCCESSMSG');
	}

	echo "<div id='error' class='error-message' ";

	if($this->session->userdata('ERRMSG_ARR'))
	{
		echo ">";
		echo $this->session->userdata('ERRMSG_ARR');
		$this->session->unset_userdata('ERRMSG_ARR');
	}
	else
	{
		echo "style='display:none'>";
	}

	echo "</div>";

	if($account_data)
	{
		echo '<table id="tblDetail" name="tblDetail" class="data-table">';
		echo '<tr>';
		echo '<th>Akun</th>';
		echo '<th>Debit</th>';
		echo '<th>Kredit</th>';
		echo '</tr>';

		$i = 1;
		foreach ($account_data as $row)
		{			
			if($row->kelompok_akun_id != 4 && $row->kelompok_akun_id != 5)
			{
				$debit = 0;
				$kredit = 0;
				$debit_disable = FALSE;
				$kredit_disable = FALSE;
				
				echo '<tr>';
				echo '<td>';
				echo form_hidden('id[]', $row->id);
				echo $row->groups_name.' - '.$row->nama;
				echo '</td>';

				if ($row->saldo_awal < 0)
				{
					$kredit = -($row->saldo_awal);
					$debit_disable = TRUE;
				}
				elseif ($row->saldo_awal > 0)
				{
					$debit = $row->saldo_awal;
					$kredit_disable = TRUE;
				}
				echo '<td>';
				$data['id'] = 'debit'.$i;
				$data['name'] = 'debit'.$i;
				$data['class'] = 'field';
				$data['value'] = (set_value('debit'.$i)) ? set_value('debit'.$i) : $debit;
				if ($debit_disable) $data['disabled'] = TRUE;
				$data['onBlur'] = "cekDebit($i)";
				$data['title'] = "Debit harus diisi dengan angka";
				echo form_input($data);
				echo '</td>';
				unset($data['disabled']);

				echo '<td>';
				$data['id'] = 'kredit'.$i;
				$data['name'] = 'kredit'.$i;
				$data['value'] = (set_value('kredit'.$i)) ? set_value('kredit'.$i) : $kredit;
				if ($kredit_disable) $data['disabled'] = TRUE;
				$data['onBlur'] = "cekKredit($i)";
				$data['title'] = "Kredit harus diisi dengan angka";
				echo form_input($data);
				echo '</td>';
				unset($data['disabled']);

				echo '</tr>';
				$i++;
			}
			else
			{
				$dis_data['class'] = 'field';
				$dis_data['value'] = 0;
				$dis_data['disabled'] = TRUE;
				echo '<tr>';
				echo '<td>'.$row->groups_name.' - '.$row->nama.'</td>';
				echo '<td>'.form_input($dis_data).'</td>';
				echo '<td>'.form_input($dis_data).'</td>';
				echo '</tr>';
			}
		}
		echo '</table>';
		echo '** Saldo Awal yang diinput adalah saldo setelah penutupan. Maka akun pada kelompok Pendapatan dan Beban harus 0';
		echo '<br/>';
		
		echo '<div class="buttons">';
		echo form_submit('simpan', 'Simpan', "id = 'button-save'" );
		echo form_reset('reset','Reset', "id = 'button-reset'" );
		echo '</div>';
	}
	else
	{
		echo '<div class="notice">Anda belum membuat data pada akun</div>';
	}
?>

<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#saldo_awal_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules:
			{
				<?php 
					for ($j = 1; $j < $i; $j++) 
					{
						echo 'debit'.$j.': "integer",';
						echo 'kredit'.$j.': "integer",';
					}
				?>
			}
		});
	});
</script>
