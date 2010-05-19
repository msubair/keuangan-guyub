<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
	echo form_open('user/'.$form_act, 'id="user_form"');

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
	if ($act == 'view') $data['disabled'] = TRUE;
?>

	<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
		<tr>
			<th><?php echo form_label('Nama Depan *','fname'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'fname';
					$data['value'] = (set_value('fname')) ? set_value('fname') : $user_data['nama_depan'];
					$data['title'] = "Nama Depan tidak boleh kosong dan harus diisi dengan huruf";
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Nama Belakang *','lname'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'lname';
					$data['value'] = (set_value('lname')) ? set_value('lname') : $user_data['nama_belakang'];
					$data['title'] = "Nama Belakang tidak boleh kosong dan harus diisi dengan huruf";
					echo form_input($data);
				?>
			</td>			
		</tr>
		<tr>
			<th><?php echo form_label('Username *','username'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'username';
					$data['value'] = (set_value('username')) ? set_value('username') : $user_data['username'];
					$data['title'] = "Username tidak boleh kosong dan harus diisi dengan huruf, angka, spasi, atau garis bawah";
					echo form_input($data);
				?>
			</td>
		</tr>
		<?php if($this->session->userdata('ADMIN')) { ?>
		<tr>
			<th><?php echo form_label('Administrator','administrator'); ?></th>
			<td>
				<?php 
					$administrator['name'] = $administrator['id'] = 'administrator';
					$administrator['value'] = '1';
					if ($user_data['administrator'] == 1 || set_value('administrator') == 1) $administrator['checked'] = TRUE;
					if ($act == 'view') $administrator['disabled'] = TRUE;
					echo form_checkbox($administrator);
				?>									
			</td>
		</tr>
		<?php } ?>
		<?php if($act!='view') { ?>
		<tr>
			<th>
				<?php
					$password_label = ($act=='add') ? 'Password *' : 'Password';  
					echo form_label($password_label,'password');
				?>
			</th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'password';
					$data['value'] = '';
					if($act=='add') $data['title'] = "Password tidak boleh kosong"; else unset($data['title']);
					echo form_password($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Ulangi '.$password_label,'cpassword'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'cpassword';
					$data['value'] = '';
					$data['title'] = "Ulangi Password isinya harus sama dengan Password";
					echo form_password($data);
				?>	
			</td>
		</tr>
		<?php } ?>
	</table>
  
	<div class="buttons">
		<?php 
			if($act!='view')
			{ 
				echo form_submit('simpan', 'Simpan', "id = 'button-save'" );
				echo form_reset('reset','Reset', "id = 'button-reset'" );
				if($this->session->userdata('ADMIN'))
					echo form_button(array('id' => 'button-cancel', 'content' => 'Batal', 'onClick' => "location.href='".site_url()."user'" ));
			}
			else
			{
				echo form_button(array('id' => 'button-cancel', 'content' => 'Kembali', 'onClick' => "location.href='".site_url()."user'" ));
			}
		?>
	</div>

<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#user_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules: 
			{
				fname: "required lettersonly",
				lname: "required lettersonly",
				username: "required alphanumeric",
				<?php if($act=='add') echo 'password: "required",'; ?>
				cpassword: {
					equalTo: "#password"
				}
			}
		});
	});
</script>
