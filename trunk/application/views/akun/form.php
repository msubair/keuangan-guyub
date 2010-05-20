<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
	echo form_open('akun/'.$form_act, 'id="akun_form"');

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
	
	$data['class'] = 'input';
	if ($act == 'view') $data['disabled'] = TRUE;
?>
	
	<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">						  
		<tr>
			<th><?php echo form_label('Nama Akun *','nama'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'nama';
					// added by Adhe on 19.05.2010
					$data['maxlength'] = '30';
					// end
					$data['value'] = (set_value('nama')) ? set_value('nama') : $account_data['nama'];
					$data['title'] = "Nama Akun tidak boleh kosong dan harus diisi dengan maksimal 30 karakter";
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Kode Akun *','kode'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'kode';
					// added by Adhe on 19.05.2010
					$data['maxlength'] = '5';
					// end
					$data['value'] = (set_value('kode')) ? set_value('kode') : $account_data['kode'];
					$data['title'] = "Kode Akun tidak boleh kosong dan harus diisi dengan maksimal 5 angka";					
					echo form_input($data);
				?>													
			</td>
		</tr>				
		<tr>
			<th><?php echo form_label('Kelompok','kelompok'); ?></th>
			<td>
				<?php 
					$kelompok['id'] = 'kelompok';					
					$kelompok['class'] = 'input';
					$selected = (set_value('kelompok')) ? set_value('kelompok') : $account_data['kelompok_akun_id'];
					if ($act == 'view') $kelompok['disabled'] = TRUE;
					echo form_dropdown('kelompok', $account_groups, $selected ,$kelompok);
				?>					
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Kena Pajak','pajak'); ?></th>
			<td>
				<?php 
					$pajak['name'] = $pajak['id'] = 'pajak';
					$pajak['value'] = '1';					
					if ($account_data['pajak'] == 1 || set_value('pajak') == 1) $pajak['checked'] = TRUE;
					if ($act == 'view') $pajak['disabled'] = TRUE;
					echo form_checkbox($pajak);
				?>									
			</td>
		</tr>		
		<tr>
			<th><?php echo form_label('Keterangan','keterangan'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'keterangan';
					$data['value'] = (set_value('keterangan')) ? set_value('keterangan') : $account_data['keterangan'];
					unset($data['title']);
					unset($data['maxlength']);
					echo form_textarea($data);
				?>													
			</td>
		</tr>															
	</table>
	
	<div class="buttons">
		<?php 
			if($act!='view')
			{ 
				echo form_submit('simpan','Simpan', "id = 'button-save'" );
				echo form_reset('reset','Reset', "id = 'button-reset'" );
				echo form_button(array('id' => 'button-cancel', 'content' => 'Batal', 'onClick' => "location.href='".site_url()."akun'" ));
			}
			else
			{
				echo form_button(array('id' => 'button-cancel', 'content' => 'Kembali', 'onClick' => "location.href='".site_url()."akun'" ));
			}
		?>
	</div>

<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#akun_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules: 
			{
				nama: "required",
				kode: "required digits"
			}
		});
	});
</script>
