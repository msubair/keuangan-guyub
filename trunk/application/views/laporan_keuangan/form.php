<script type="text/javascript" charset="utf-8">
	$(function() {
		$('#button-save').click(function() {
			var jenis_laporan = $('#jenis_laporan').val();
			var bulan = $('#bulan').val();
			var tahun = $('#tahun').val();
			location.href = '<?php echo site_url();?>laporan_keuangan/'+jenis_laporan+'/'+bulan+'/'+tahun;
		});
	});
</script>

<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
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
?>

	<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">						  		
		<tr>
			<th><?php echo form_label('Jenis Laporan','jenis_laporan'); ?></th>
			<td>
				<?php 
					$data['id'] = 'jenis_laporan';
					$selected = 'laporan_neraca_saldo_setelah_penutupan';
					$options = array( 'laporan_laba_rugi' => 'Laporan Laba Rugi',
//								  	  'laporan_perubahan_modal' => 'Laporan Perubahan Modal',
//								  	  'laporan_neraca' => 'Laporan Neraca',
								  	  'laporan_neraca_saldo_sebelum_penyesuaian' => 'Laporan Neraca Saldo Sebelum Penyesuaian',
								  	  'laporan_neraca_saldo_setelah_penyesuaian' => 'Laporan Neraca Saldo Setelah Penyesuaian',
								  	  'laporan_neraca_saldo_setelah_penutupan' => 'Laporan Neraca Saldo Setelah Penutupan');
					echo form_dropdown('jenis_laporan', $options, $selected, $data);
				?>					
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Bulan','bulan'); ?></th>
			<td>
				<?php 
					$data['id'] = 'bulan';
					$selected = date("m");
					echo form_dropdown('bulan', $months, $selected, $data);
				?>					
			</td>
		</tr>	
		<tr>
			<th><?php echo form_label('Tahun','tahun'); ?></th>
			<td>
				<?php 
					$data['id'] = 'tahun';
					$selected = date("Y");
					echo form_dropdown('tahun', $years, $selected, $data);
				?>					
			</td>
		</tr>							
	</table>
	
	<div class="buttons">
		<?php
			echo form_button(array('id' => 'button-save', 'content' => 'Buat Laporan'));
			echo form_reset('reset','Reset', "id = 'button-reset'" );
		?>
	</div>
	
</div>
