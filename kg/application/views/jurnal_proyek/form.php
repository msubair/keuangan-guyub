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

		$('#jurnalproyek_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules: 
			{
				nomor: "required",
				proyek: "required",
				tanggal: "required dateISO",
				deskripsi: "required",
				debit1: "integer",
				kredit1: "integer",
				debit2: "integer",
				kredit2: "integer"
			}
		});

	});
</script>

<script type="text/javascript" src="<?php echo base_url();?>js/jurnal.js"></script>

<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<div id="dialog-form"></div>

<?php
	echo form_open('jurnal/insert', array('id' => 'jurnalproyek_form', 'onsubmit' => 'return cekData();'));

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

	echo form_hidden('f_id', 1);
	echo form_hidden('goto', current_url());

	$data['class'] = 'input';
?>
	
	<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">						  
		<tr>
			<th><?php echo form_label('Nomor *','nomor'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'nomor';
					$data['title'] = "Nomor tidak boleh kosong";	
					echo form_input($data);
				?>
			</td>				
		</tr>		
		<tr>
			<th><?php echo form_label('Nama Proyek *','proyek'); ?></th>
			<td>
				<?php 
					echo form_hidden('proyekID');
				?>				
				<?php 
					$data['name'] = $data['id'] = 'proyek';
					$data['title'] = "Nama Proyek tidak boleh kosong";
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
					$data['title'] = "Tanggal tidak boleh kosong dan harus diisi dengan format dddd-mm-yy";	
					echo form_input($data);
				?>				
			</td>	
		</tr>
		<tr>
			<th><?php echo form_label('Deskripsi *','deskripsi'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'deskripsi';
					$data['title'] = "Deskripsi tidak boleh kosong";
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
		<?php for ($i = 1; $i <= 2; $i++) { ?>
			<tr>
				<td>
					<?php 
						$akun['id'] = 'akun'.$i;
						$akun['class'] = 'combo';
						echo form_dropdown('akun[]', $accounts, '',$akun);
					?>
				</td>
				<td>
					<?php 
						$data['id'] = 'debit'.$i;
						$data['name'] = 'debit'.$i;
						$data['class'] = 'field';
						$data['onBlur'] = "cekDebit($i)";
						$data['title'] = "Debit harus diisi dengan angka";
						echo form_input($data);
					?>
				</td>
				<td>
					<?php 
						$data['id'] = 'kredit'.$i;
						$data['name'] = 'kredit'.$i;
						$data['onBlur'] = "cekKredit($i)";
						$data['title'] = "Kredit harus diisi dengan angka";
						echo form_input($data);
					?>
				</td>
			</tr>
		<?php } ?>
	</table>
	
	<div class="addRow"><a href="javascript:addRow();">tambah baris</a></div>

	<div class="buttons">
		<?php 
			echo form_submit('post','Post', "id = 'button-save'" );
			echo form_reset('reset','Reset', "id = 'button-reset'" );
			echo form_button(array('id' => 'button-cancel', 'content' => 'Batal', 'onClick' => "location.href='".site_url()."jurnal_proyek'" ));
		?>
	</div>

<?php echo form_close(); ?>

</div>
