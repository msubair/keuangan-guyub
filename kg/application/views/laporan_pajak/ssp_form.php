<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
	echo form_open('laporan_ssp/'.$form_act, 'id="ssp_form"');

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

	echo form_hidden('goto', current_url());

	$data['class'] = 'input';
	if ($act == 'view') $data['disabled'] = TRUE;
?>

	<table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
		<tr>
			<th><?php echo form_label('Bulan *','bulan'); ?></th>
			<td>
				<?php
					$data['id'] = 'bulan';
					$selected = (set_value('bulan')) ? set_value('bulan') : $laporan_data['bulan'];
					if(!$selected) $selected = date("m");
					echo form_dropdown('bulan', $months, $selected, $data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Tahun *','tahun'); ?></th>
			<td>
				<?php
					$data['id'] = 'tahun';
					$selected = (set_value('tahun')) ? set_value('tahun') : $laporan_data['tahun'];
					if(!$selected) $selected = date("Y");
					echo form_dropdown('tahun', $years, $selected, $data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('MAP/Kode Jenis Pajak *','map'); ?></th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'map';
					$data['maxlength']='6';
					$data['value'] = (set_value('map')) ? set_value('map') : $laporan_data['jenis_pajak'];
					$data['title'] = "MAP/Kode Jenis Pajak tidak boleh kosong dan harus diisi dengan angka yang panjang maksimalnya 6";
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('Kode Jenis Setoran *','kode'); ?></th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'kode';
					$data['maxlength']='3';
					$data['value'] = (set_value('kode')) ? set_value('kode') : $laporan_data['kode_setoran'];
					$data['title'] = "Kode Jenis Setoran tidak boleh kosong dan harus diisi dengan angka yang panjang maksimalnya 3";
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th>
				<?php echo form_label('Uraian Pembayaran *','uraian'); ?>
			</th>
			<td>
				<?php
					unset($data['maxlength']);
					$data['name'] = $data['id'] = 'uraian';
					$data['value'] = (set_value('uraian')) ? set_value('uraian') : $laporan_data['keterangan'];
					$data['title'] = "Uraian Pembayaran tidak boleh kosong";
					echo form_textarea($data);
				?>
			</td>
		</tr>
		<tr>
			<th>
				<?php echo form_label('Jumlah Pembayaran *','jumlah'); ?>
			</th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'jumlah';
					$data['value'] = (set_value('jumlah')) ? set_value('jumlah') : $laporan_data['jumlah'];
					$data['title'] = "Jumlah Pembayaran tidak boleh kosong dan harus diisi dengan angka";
					echo form_input($data);
				?>
			</td>
		</tr>
		<tr>
			<th>
				<?php echo form_label('Terbilang *','terbilang'); ?>
			</th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'terbilang';
					$data['value'] = (set_value('terbilang')) ? set_value('terbilang') : $laporan_data['terbilang'];
					$data['title'] = "Terbilang tidak boleh kosong";
					echo form_input($data);
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
			}
			if($act!='add')
			{
				echo form_button(array('id' => 'button-print', 'content' => 'Cetak', 'onClick' => "location.href='".site_url()."laporan_ssp/cetak/".$laporan_data['id']."'" ));
			}
			$cancel_text = ($act=='view') ? 'Kembali' : 'Batal';
			echo form_button(array('id' => 'button-cancel', 'content' => $cancel_text, 'onClick' => "location.href='".site_url()."laporan_ssp'" ));
		?>
	</div>

<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#ssp_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules:
			{
				map: "required digits",
				kode: "required digits",
				uraian: "required",
				jumlah: "required integer",
				terbilang: "required"
			}
		});
	});
</script>
