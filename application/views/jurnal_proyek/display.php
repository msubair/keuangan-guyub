<script type="text/javascript" src="<?php echo base_url();?>js/group_table.js"></script>

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

		$('#button-save').click(function() {
			var proyekID = $('#proyekID').val();
			var jenis = $('#jenis').val();
			oTable.fnClearTable();
			$.post('<?php echo site_url().'jurnal_proyek/search' ?>',
				  { id : proyekID, jenis : jenis},
				  function(msg){
					if(msg) {
						msg = eval(msg);
						oTable.fnAddData(msg);
					}
				  }
			  );
		});
	});
</script>

<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
	if($this->session->userdata('SUCCESSMSG'))
	{
		echo "<div class='success'>".$this->session->userdata('SUCCESSMSG')."</div>";
		$this->session->unset_userdata('SUCCESSMSG');
	}
?>

	<div class="buttons">
		<?php
			echo form_button(array('id' => 'button-addnew', 'content' => 'Tambah Baru', 'onClick' => "location.href='".site_url()."jurnal_proyek/add'" ));
		?>
	</div>

	<div id="dialog-form"></div>
	<div class="clearer"></div>

<?php
	$data['class'] = 'input';	

	echo form_open();

	$attributes = array('id' => 'fieldset', 'class' => 'fieldset');
	echo form_fieldset('Pencarian Jurnal', $attributes);	
?>

	<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">						  		
		<tr>
			<th><?php echo form_label('Nama Proyek','proyek'); ?></th>
			<td>
				<?php 
					echo form_hidden('proyekID');

					$data['name'] = $data['id'] = 'proyek';
					echo form_input($data);
				?>
			</td>					
		</tr>
		<tr>
			<th><?php echo form_label('Jenis','jenis'); ?></th>
			<td>
				<?php 
					unset($data['name']);
					$data['id'] = 'jenis';
					$selected = 0 ;
					$options = array( 0 => 'Semua',
									 4 => 'Pendapatan',
									 5 => 'Biaya' );
					echo form_dropdown('jenis', $options, $selected, $data);
				?>
			</td>
		</tr>
	</table>
	
	<div class="buttons">
		<?php
			echo form_button('cari', 'Cari', "id = 'button-save'" );
			echo form_reset('reset','Reset', "id = 'button-reset'" );
		?>
	</div>
	
<?php echo form_fieldset_close(); ?>
<?php echo form_close(); ?>

	<table cellpadding="0" cellspacing="0" border="0" class="display" id="group_table">
		<thead>
			<tr>
				<th>Proyek</th>
				<th>Tanggal</th>
				<th>No</th>
				<th>Item</th>
				<th>Akun</th>
				<th>Debit</th>
				<th>Kredit</th>
			</tr>
		</thead>
		<tbody>
			<?php			
				if($journal_data)
				{
					$i = 0;
					foreach ($journal_data as $row)
					{
						if($row->debit_kredit == 1)
						{
							$d = $row->nilai;
							$k = '';
						}
						else
						{
							$d = '';
							$k = $row->nilai; 
						}
						echo '<tr>';
						echo '<td>'.$row->project_name.'</td>';
						echo '<td>'.$row->tgl.'</td>';
						echo '<td>'.$row->no.'</td>';
						echo '<td>'.$row->item.'</td>';
						echo '<td>'.$row->account_name.'</td>';
						echo '<td>'.$d.'</td>';
						echo '<td>'.$k.'</td>';	
						echo '</tr>';
						$i++;
					}
				}
			?>		
		</tbody>	
		<tfoot>
			<tr>
				<th>Proyek</th>
				<th>Tanggal</th>
				<th>No</th>
				<th>Item</th>
				<th>Akun</th>
				<th>Debit</th>
				<th>Kredit</th>
			</tr>
		</tfoot>
	</table>

</div>
