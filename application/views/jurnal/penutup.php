<script type="text/javascript" charset="utf-8">
	$(function() {
		$('#button-view').click(function() {
			var detail = $('#detail');
			var tbl = $('#tblDetail');
			$.post('<?php echo site_url().'jurnal/get_details' ?>',
				  function(msg){
					if(msg=='error_laba_rugi')
					{
						oDialog.html("Akun Ikhtisar Laba Rugi tidak ditemukan, mohon dibuat terlebih dahulu.");
						oDialog.dialog('open');
					}
					else if(msg=='error_modal')
					{
						oDialog.html("Akun Modal tidak ditemukan, mohon dibuat terlebih dahulu.");
						oDialog.dialog('open');
					}
					else if(msg!='')
					{
						detail.show();
						tbl.children().html('<tr><th>Akun</th><th>Debit</th><th>Kredit</th></tr>');
						tbl.children().append(msg);
					}
					else
					{
						oDialog.html("Tidak ada untuk dibuat jurnal penutup.");
						oDialog.dialog('open');
					}
				  }
			  );
		});
		$('#penutup_form').submit(function() {
			$("*").removeAttr("disabled");
			return true;
		});

	});

</script>

<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
	echo form_open('jurnal/insert', 'id="penutup_form"');

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

	echo form_hidden('f_id', 3);
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
			<th><?php echo form_label('Deskripsi *','deskripsi'); ?></th>
			<td>
				<?php 
					$data['name'] = $data['id'] = 'deskripsi';					
					$data['value'] = set_value('deskripsi');
					$data['title'] = "Deskripsi tidak boleh kosong";
					echo form_textarea($data);
				?>
			</td>
		</tr>
	</table>
	
	<div class="buttons">
		<?php
			echo form_button('view', 'Lihat Detail', "id = 'button-view'" );
			echo form_reset('reset','Reset', "id = 'button-reset'" );
		?>
	</div>

	<div class="clearer"></div>

	<div id="detail" style="display:none">
		<h5>Detail</h5>
		<table id="tblDetail" name="tblDetail" class="data-table">
			<tr>
				<th>Akun</th>
				<th>Debit</th>
				<th>Kredit</th>																	
			</tr>
		</table>
		<div class="buttons">
			<?php
				echo form_submit('post','Post', "id = 'button-save'" );
			?>
		</div>
	</div>


<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#penutup_form').validate({
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
