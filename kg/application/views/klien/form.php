<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
	echo form_open('klien/'.$form_act, 'id="klien_form"');

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
			<th><?php echo form_label('Nama *','nama'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'nama';
					$data['value'] = (set_value('nama')) ? set_value('nama') : $client_data['nama'];
					$data['title'] = "Nama tidak boleh kosong";
					echo form_input($data);
				?>
			</td>
		</tr>	
		<tr>
			<th><?php echo form_label('NPWP','npwp'); ?></th>
			<td>
				<?php 
					$nomor['title'] = "NPWP harus diisi dengan angka";	
					if ($act == 'view') $nomor['disabled'] = TRUE;

					$nomor['name'] = $nomor['id'] = 'npwp';
					$nomor['maxlength']='2';
					$nomor['size']='4';
					$nomor['value'] = (set_value('npwp')) ? set_value('npwp') : substr($client_data['npwp'], 0, 2);
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp1';
					$nomor['maxlength']='3';
					$nomor['size']='5';
					$nomor['value'] = (set_value('npwp1')) ? set_value('npwp1') : substr($client_data['npwp'], 2, 3);
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp2';
					$nomor['maxlength']='3';
					$nomor['size']='5';
					$nomor['value'] = (set_value('npwp2')) ? set_value('npwp2') : substr($client_data['npwp'], 5, 3);
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp3';
					$nomor['maxlength']='1';
					$nomor['size']='2';
					$nomor['value'] = (set_value('npwp3')) ? set_value('npwp3') : substr($client_data['npwp'], 8, 1);
					echo form_input($nomor);

					echo "&nbsp;-";

					$nomor['name'] = $nomor['id'] = 'npwp4';
					$nomor['maxlength']='3';
					$nomor['size']='5';
					$nomor['value'] = (set_value('npwp4')) ? set_value('npwp4') : substr($client_data['npwp'], 9, 3);
					echo form_input($nomor);

					echo "&nbsp;.";

					$nomor['name'] = $nomor['id'] = 'npwp5';
					$nomor['maxlength']='3';
					$nomor['size']='5';
					$nomor['value'] = (set_value('npwp5')) ? set_value('npwp5') : substr($client_data['npwp'], 12, 3);
					echo form_input($nomor);
				?>							
			</td>
		</tr>						
		<tr>
			<th><?php echo form_label('Alamat *','alamat'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'alamat';
					$data['value'] = (set_value('alamat')) ? set_value('alamat') : $client_data['alamat'];
					$data['title'] = "Alamat tidak boleh kosong";						
					echo form_input($data);
				?>
			</td>
		</tr>									
		<tr>
			<th><?php echo form_label('Telpon *','telpon'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'telpon';
					$data['value'] = (set_value('telpon')) ? set_value('telpon') : $client_data['telpon_1'];
					$data['title'] = "Telpon tidak boleh kosong";
					echo form_input($data);
				?>
			</td>
		</tr>		
		</tr>
		<tr>
			<th><?php echo form_label('Handphone','handphone'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'handphone';
					$data['value'] = (set_value('handphone')) ? set_value('handphone') : $client_data['telpon_2'];
					unset($data['title']);
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Email','email'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'email';
					$data['value'] = (set_value('email')) ? set_value('email') : $client_data['email'];
					$data['title'] = "Email harus diisi dengan format email yang benar. Contoh : keuangan@guyub.co.id";			
					echo form_input($data);
				?>
			</td>
		</tr>		
		<tr>
			<th><?php echo form_label('Fax','fax'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'fax';
					$data['value'] = (set_value('fax')) ? set_value('fax') : $client_data['fax'];
					unset($data['title']);
					echo form_input($data);
				?>
			</td>
		</tr>	
		<tr>
			<th><?php echo form_label('Website','website'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'website';
					$data['value'] = (set_value('website')) ? set_value('website') : $client_data['website'];
					echo form_input($data);
				?>
			</td>
		</tr>	
		<tr>
			<th>
				<?php echo form_label('Keterangan','keterangan'); ?>
			</th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'keterangan';
					$data['value'] = (set_value('keterangan')) ? set_value('keterangan') : $client_data['keterangan'];
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
				echo form_button(array('id' => 'button-cancel', 'content' => 'Batal', 'onClick' => "location.href='".site_url()."klien'" ));
			}
			else
			{
				echo form_button(array('id' => 'button-cancel', 'content' => 'Kembali', 'onClick' => "location.href='".site_url()."klien'" ));
			}
		?>				
	</div>

<?php echo form_close(); ?>

</div>	

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#klien_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules: 
			{
				nama: "required",
				npwp: "digits",
				npwp1: "digits",
				npwp2: "digits",
				npwp3: "digits",
				npwp4: "digits",
				npwp5: "digits",
				alamat: "required",
				telpon: "required",
				email: "email"
			}
		});
	});
</script>
