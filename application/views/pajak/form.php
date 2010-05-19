<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
	echo form_open('pajak/action', 'id="pajak_form"');
	
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

	if($this->session->userdata('SUCCESSMSG'))
	{
		echo "<div class='success'>".$this->session->userdata('SUCCESSMSG')."</div>";
		$this->session->unset_userdata('SUCCESSMSG');
	}

	$data['class'] = 'input';
?>	
						
	<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">						  
		<tr>
			<th><?php echo form_label('NPWP *','npwp'); ?></th>
			<td>				
				<?php 
					$nomor['title'] = "NPWP tidak boleh kosong dan harus diisi dengan angka";						

					$nomor['name'] = $nomor['id'] = 'npwp';
					$nomor['maxlength']='2';
					$nomor['size']='4';			
					$nomor['value'] = (set_value('npwp')) ? set_value('npwp') : substr($pajak_data['npwp'], 0, 2);	
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp1';
					$nomor['maxlength']='3';
					$nomor['size']='5';		
					$nomor['value'] = (set_value('npwp1')) ? set_value('npwp1') : substr($pajak_data['npwp'], 2, 3);				
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp2';
					$nomor['maxlength']='3';
					$nomor['size']='5';	
					$nomor['value'] = (set_value('npwp2')) ? set_value('npwp2') : substr($pajak_data['npwp'], 5, 3);			
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp3';
					$nomor['maxlength']='1';
					$nomor['size']='2';
					$nomor['value'] = (set_value('npwp3')) ? set_value('npwp3') : substr($pajak_data['npwp'], 8, 1);			
					echo form_input($nomor);

					echo "&nbsp;-";

					$nomor['name'] = $nomor['id'] = 'npwp4';
					$nomor['maxlength']='3';
					$nomor['size']='5';
					$nomor['value'] = (set_value('npwp4')) ? set_value('npwp4') : substr($pajak_data['npwp'], 9, 3);	
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp5';
					$nomor['maxlength']='3';
					$nomor['size']='5';		
					$nomor['value'] = (set_value('npwp5')) ? set_value('npwp5') : substr($pajak_data['npwp'], 12, 3);			
					echo form_input($nomor);
				?>							
			</td>
		</tr>					
		<tr>
			<th><?php echo form_label('Nama Wajib Pajak *','nama_wp'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'nama_wp';
					$data['value'] = (set_value('nama_wp')) ? set_value('nama_wp') : $pajak_data['nama'];
					$data['title'] = "Nama Wajib Pajak tidak boleh kosong";	
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Alamat *','alamat'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'alamat';	
					$data['value'] = (set_value('alamat')) ? set_value('alamat') : $pajak_data['alamat'];
					$data['title'] = "Alamat tidak boleh kosong";					
					echo form_input($data);
				?>
			</td>
		</tr>	
		<tr>
			<th><?php echo form_label('Kota *','kota'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'kota';
					$data['value'] = (set_value('kota')) ? set_value('kota') : $pajak_data['kota'];
					$data['title'] = "Kota tidak boleh kosong";					
					echo form_input($data);
				?>
			</td>
		</tr>	
		<tr>
			<th><?php echo form_label('Telpon *','telpon'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'telpon';	
					$data['value'] = (set_value('telpon')) ? set_value('telpon') : $pajak_data['telpon'];
					$data['title'] = "Telpon tidak boleh kosong";			
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Fax','fax'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'fax';	
					$data['value'] = (set_value('fax')) ? set_value('fax') : $pajak_data['fax'];
					unset($data['title']);
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Email *','email'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'email';	
					$data['value'] = (set_value('email')) ? set_value('email') : $pajak_data['email'];
					$data['title'] = "Email tidak boleh kosong dan harus diisi dengan format email yang benar. Contoh : keuangan@guyub.co.id";			
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Jenis Usaha *','jenis'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'jenis';	
					$data['value'] = (set_value('jenis')) ? set_value('jenis') : $pajak_data['jenis_usaha'];	
					$data['title'] = "Jenis Usaha tidak boleh kosong";					
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('KLU *','klu'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'klu';	
					$data['maxlength']='6';	
					$data['value'] = (set_value('klu')) ? set_value('klu') : $pajak_data['klu'];								
					$data['title'] = "KLU tidak boleh kosong dan harus diisi dengan angka yang panjang maksimalnya 6";						
					echo form_input($data);
					unset($data['maxlength']);
				?>
			</td>
		</tr>
	</table>
			
	<?php
		$attributes = array('id' => 'fieldset', 'class' => 'fieldset');
		echo form_fieldset('Data Pemilik', $attributes);	
	?>	
	<table>	
		<tr>
			<th><?php echo form_label('Nama Pemilik *','nama_pemilik'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'nama_pemilik';
					$data['value'] = (set_value('nama_pemilik')) ? set_value('nama_pemilik') : $pajak_data['pemilik'];						
					$data['title'] = "Nama Pemilik tidak boleh kosong";	
					echo form_input($data);
				?>
			</td>
		</tr>	
		<tr>
			<th><?php echo form_label('NPWP *','npwp_pemilik'); ?></th>
			<td>
				<?php 
					$nomor['title'] = "NPWP Pemilik tidak boleh kosong dan harus diisi dengan angka";					

					$nomor['name'] = $nomor['id'] = 'npwp_pemilik';
					$nomor['maxlength']='2';
					$nomor['size']='4';			
					$nomor['value'] = (set_value('npwp_pemilik')) ? set_value('npwp_pemilik') : substr($pajak_data['npwp_pemilik'], 0, 2);
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp_pemilik1';
					$nomor['maxlength']='3';
					$nomor['size']='5';		
					$nomor['value'] = (set_value('npwp_pemilik1')) ? set_value('npwp_pemilik1') : substr($pajak_data['npwp_pemilik'], 2, 3);
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp_pemilik2';
					$nomor['maxlength']='3';
					$nomor['size']='5';	
					$nomor['value'] = (set_value('npwp_pemilik2')) ? set_value('npwp_pemilik2') : substr($pajak_data['npwp_pemilik'], 5, 3);				
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp_pemilik3';
					$nomor['maxlength']='1';
					$nomor['size']='2';
					$nomor['value'] = (set_value('npwp_pemilik3')) ? set_value('npwp_pemilik3') : substr($pajak_data['npwp_pemilik'], 8, 1);			
					echo form_input($nomor);

					echo "&nbsp;-";

					$nomor['name'] = $nomor['id'] = 'npwp_pemilik4';
					$nomor['maxlength']='3';
					$nomor['size']='5';
					$nomor['value'] = (set_value('npwp_pemilik4')) ? set_value('npwp_pemilik4') : substr($pajak_data['npwp_pemilik'], 9, 3);
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp_pemilik5';
					$nomor['maxlength']='3';
					$nomor['size']='5';
					$nomor['value'] = (set_value('npwp_pemilik5')) ? set_value('npwp_pemilik5') : substr($pajak_data['npwp_pemilik'], 12, 3);					
					echo form_input($nomor);
				?>
			</td>
		</tr>
	</table>
	<?php	echo form_fieldset_close(); ?>
	
	<table>
		<tr>
			<th><?php echo form_label('Keterangan','keterangan'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'keterangan';
					$data['value'] = (set_value('keterangan')) ? set_value('keterangan') : $pajak_data['keterangan'];	
					unset($data['title']);
					echo form_textarea($data);
				?>													
			</td>
		</tr>	
	</table>
	
	<div class="buttons">
		<?php 		
			echo form_submit('simpan','Simpan', "id = 'button-save'" );
			echo form_reset('reset','Reset', "id = 'button-reset'" );
		?>
	</div>

<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#pajak_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules: 
			{
				npwp: "required digits",
				npwp1: "required digits",
				npwp2: "required digits",
				npwp3: "required digits",
				npwp4: "required digits",
				npwp5: "required digits",
				nama_wp: "required",
				alamat: "required",						
				telpon: "required",						
				email: "required email",						
				jenis: "required",										
				klu: "required digits",										
				nama_pemilik: "required",
				npwp_pemilik: "required digits",
				npwp_pemilik1: "required digits",
				npwp_pemilik2: "required digits",
				npwp_pemilik3: "required digits",
				npwp_pemilik4: "required digits",
				npwp_pemilik5: "required digits"
			}
		});
	});
</script>
