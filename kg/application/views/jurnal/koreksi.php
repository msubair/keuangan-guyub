<script type="text/javascript" charset="utf-8">
	$(function() {
		$('#koreksi_form').submit(function() {
			$("*").removeAttr("disabled");
			return true;
		});
	});
</script>

<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
	echo form_open('jurnal/insert', 'id="koreksi_form"');

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

	echo form_hidden('goto', current_url());

	$data['class'] = 'input';
?>	

	<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">							  
		<tr>
			<th><?php echo form_label('Nomor *','nomor'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'nomor';
					$data['value'] = set_value('nomor');
					$data['title'] = "Nomor tidak boleh kosong";	
					echo form_input($data);
				?>
			</td>				
		</tr>		
		<tr>
			<th><?php echo form_label('Tanggal *','tanggal'); ?></th>
			<td>
				<?php 
					$data['name'] = 'tanggal';
					$data['id'] = 'datepicker';
					$data['value'] = set_value('tanggal');
					$data['title'] = "Tanggal tidak boleh kosong dan harus diisi dengan format dddd-mm-yy";	
					echo form_input($data);
				?>
			</td>				
		</tr>
		<tr>
			<th><?php echo form_label('Alasan Koreksi *','deskripsi'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'deskripsi';					
					$data['value'] = set_value('deskripsi');
					$data['title'] = "Alasan Koreksi tidak boleh kosong";
					echo form_textarea($data);
				?>
			</td>
		</tr>		
	</table>
	
	<h5>Detail</h5>
	<table id="tblDetail" name="tblDetail" class="data-table">
		<tr>
			<th>Akun</th>
			<th>Debit</th>
			<th>Kredit</th>																	
		</tr>
		<?php
			$data['disabled'] = TRUE;
			$data['class'] = 'field';
			$i = 1;
			foreach ($journal_data as $row)
			{
				echo '<tr>';
				echo '<td>';
				$akun['id'] = 'akun'.$i;
				$akun['class'] = 'combo';
				$akun['disabled'] = TRUE;
				$selected = $row->akun_id;
				echo form_dropdown('akun[]', $accounts, $selected ,$akun);
				echo '</td>';
				echo '<td>';
				$data['id'] = $data['name'] = 'debit'.$i;
				$data['value'] = (!$row->debit_kredit) ? $row->nilai : '' ;
				echo form_input($data);
				echo '</td>';
				echo '<td>';
				$data['id'] = $data['name'] = 'kredit'.$i;
				$data['value'] = ($row->debit_kredit) ? $row->nilai : '' ;
				echo form_input($data);
				echo '</td>';
				echo '</tr>';
				$i++;
				$f = $row->f_id;
			}
		?>
	</table>

	<div class="buttons">
		<?php 			
			echo form_hidden('f_id', $f);
			echo form_submit('post','Post', "id = 'button-save'" );
			echo form_reset('reset','Reset', "id = 'button-reset'" );
			echo form_button(array('id' => 'button-cancel', 'content' => 'Batal', 'onClick' => "location.href='".site_url()."jurnal'" ));
		?>
	</div>

	<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#koreksi_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules: 
			{
				nomor: "required",
				tanggal: "required dateISO",
				deskripsi: "required"				
			}
		});
	});
</script>
