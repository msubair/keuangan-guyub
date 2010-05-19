<script type="text/javascript" charset="utf-8">
	$(function() {
		$('#dialog-form').load('<?php echo site_url(); ?>proyek/popup');
		$("#dialog-form").dialog({
			autoOpen: false,
			title: 'Proyek',
			height: 400,
			width: 712,
			modal: true,
			buttons: {
				'OK': function() {
					var chkIdx = $('input:radio:checked').val();
					var aData = popup_table.fnGetData(chkIdx);
					$("#proyekID").val($("#id"+chkIdx).val());
					$("#proyek").val(aData[0]);
					$(this).dialog('close');
				},
				'Batal': function() {
					$(this).dialog('close');
				}
			},
		});

		$('#proyek').focus(function() {
				$('#dialog-form').dialog('open');
			});

	});
</script>

<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
	echo form_open('laporan_proyek/report', 'id="laporanproyek_form"');

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
?>

	<div id="dialog-form"></div>
	
	<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">						  		
		<tr>
			<th><?php echo form_label('Nama Proyek *','proyek'); ?></th>
			<td>
				<?php 
					echo form_hidden('proyekID');
					$data['name'] = $data['id'] = 'proyek';
					$data['class'] = 'input';	
					$data['title'] = "Nama Proyek tidak boleh kosong";
					echo form_input($data);
				?>
			</td>					
		</tr>
	</table>
	
	<div class="buttons">
		<?php
			echo form_submit('create','Buat Laporan', "id = 'button-save'" );
			echo form_reset('reset','Reset', "id = 'button-reset'" );
		?>
	</div>

<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#laporanproyek_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules: 
			{	
				proyek: "required"
			}
		});
	});
</script>
