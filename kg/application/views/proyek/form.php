<script type="text/javascript" charset="utf-8">
	$(function() {
		$('#dialog-form').load('<?php echo site_url(); ?>klien/popup');
		$("#dialog-form").dialog({
			autoOpen: false,
			title: 'Klien',
			height: 400,
			width: 712,
			modal: true,
			buttons: {
				'OK': function() {
					var chkIdx = $('input:radio:checked').val();
					var aData = popup_table.fnGetData(chkIdx);
					$("#klienID").val($("#id"+chkIdx).val());
					$("#klien").val(aData[0]);
					$(this).dialog('close');
				},
				'Batal': function() {
					$(this).dialog('close');
				}
			},
		});

		$('#klien').focus(function() {
				$('#dialog-form').dialog('open');
			});

	});
</script>

<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<div id="dialog-form"></div>

<?php
	echo form_open('proyek/'.$form_act, 'id="proyek_form"');

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
			<th><?php echo form_label('Nama Proyek *','nama'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'nama';
					$data['value'] = (set_value('nama')) ? set_value('nama') : $project_data['nama_proyek'];
					$data['title'] = "Nama Proyek tidak boleh kosong";
					echo form_input($data);
				?>
			</td>			
		</tr>
		<tr>
			<th><?php echo form_label('Klien *','klien'); ?></th>
			<td>
				<?php 
					echo form_hidden('klienID',$project_data['klien_id']);

					$data['name'] = $data['id'] = 'klien';
					$data['value'] = (set_value('klien')) ? set_value('klien') : $project_data['nama_klien'];
					$data['title'] = "Klien tidak boleh kosong";
					echo form_input($data);
				?>
			</td>					
		</tr>
		<tr>
			<th><?php echo form_label('Nomor SPK','nomorspk'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'nomorspk';
					$data['value'] = (set_value('nomorspk')) ? set_value('nomorspk') : $project_data['spk_no'];
					unset($data['title']);	
					echo form_input($data);
				?>
			</td>	
		</tr>
		<tr>
			<th><?php echo form_label('Tanggal SPK','tanggal'); ?></th>
			<td>
				<?php 
					$data['name'] = 'tanggal';
					$data['id'] = 'datepicker';
					$data['value'] = (set_value('tanggal')) ? set_value('tanggal') : $project_data['spk_tgl'];
					$data['title'] = "Tanggal harus diisi dengan format dddd-mm-yy";				
					echo form_input($data);
				?>
			</td>				
		</tr>
		<tr>
			<th><?php echo form_label('Perkiraan Biaya','biaya'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'biaya';
					$data['value'] = (set_value('biaya')) ? set_value('biaya') : $project_data['biaya'];
					$data['title'] = "Perkiraan biaya harus diisi angka";
					echo form_input($data);
				?>
			</td>	
		</tr>	
		<tr>
			<th><?php echo form_label('Perkiraan Waktu','perkiraanwaktu'); ?></th>
			<td>
				<?php 
					$tanggal['class']='daterange';	
					if ($act == 'view') $tanggal['disabled'] = TRUE;

					$tanggal['name'] = 'from';
					$tanggal['id'] = 'datepicker-from';
					$tanggal['value'] = (set_value('from')) ? set_value('from') : $project_data['tgl_mulai'];
					$tanggal['title'] = "Perkiraan waktu mulai harus diisi dengan format dddd-mm-yy";	
					echo form_input($tanggal);

					echo ' s/d ';

					$tanggal['name'] = 'to';
					$tanggal['id'] = 'datepicker-to';										
					$tanggal['value'] = (set_value('to')) ? set_value('to') : $project_data['tgl_selesai'];
					$tanggal['title'] = "Perkiraan waktu selesai harus diisi dengan format dddd-mm-yy";	
					echo form_input($tanggal);
				?>					
			</td>	
		</tr>	
		<tr>
			<th>
				<?php echo form_label('Status','status'); ?>
			<td>
				<?php 
					$status['id'] = 'status';												
					$status['class'] = 'input';
					$selected = (set_value('status')) ? set_value('status') : $project_data['status'];
					$options = array('Start' => 'Start',
									 'Pending' => 'Pending',
									 'Cancel' => 'Cancel',
									 'Close' => 'Close');
					if ($act != 'edit') $status['disabled'] = TRUE;
					echo form_dropdown('status', $options, $selected ,$status);
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
					$data['value'] = (set_value('keterangan')) ? set_value('keterangan') : $project_data['keterangan'];
					unset($data['title']);
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
				echo form_button(array('id' => 'button-cancel', 'content' => 'Batal', 'onClick' => "location.href='".site_url()."proyek'" ));
			}
			else
			{
				echo form_button(array('id' => 'button-cancel', 'content' => 'Kembali', 'onClick' => "location.href='".site_url()."proyek'" ));
			}
		?>				
	</div>
	
<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#proyek_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules: 
			{
				nama: "required",
				klien: "required",
				tanggal: "dateISO",
				biaya: "integer",
				from: "dateISO",
				to: "dateISO"
			}
		});
	});
</script>
