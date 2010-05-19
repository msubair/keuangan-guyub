<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

<?php
	echo form_open('laporan_pph21/'.$form_act, 'id="pph21_form"');

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
	$pajak['class'] = 'report';
	if ($act == 'view') $data['disabled'] = TRUE;
	if ($act == 'view') $pajak['disabled'] = TRUE;
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
	</table>

	<table id="tblDetail" name="tblDetail" class="data-table">
		<tr>
			<th>No</th>
			<th>Golongan Penerima Penghasilan</th>
			<th>Jumlah Penerima Penghasilan</th>
			<th>Jumlah Penghasilan Bruto</th>
			<th>Jumlah Pajak Terutang</th>
		</tr>
		<tr>
			<td><?php echo form_label('1','nomor1'); ?></td>
			<td><?php echo form_label('Pegawai Tetap','pegawai'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_1';
					$pajak['value'] = (set_value('penerima_1')) ? set_value('penerima_1') : $laporan_data['penerima_1'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Pegawai Tetap harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_1';
					$pajak['value'] = (set_value('bruto_1')) ? set_value('bruto_1') : $laporan_data['bruto_1'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Pegawai Tetap harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_1';
					$pajak['value'] = (set_value('pajak_1')) ? set_value('pajak_1') : $laporan_data['pajak_1'];
					$pajak['title'] = "Jumlah Pajak Terutang Pegawai Tetap harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('2','nomor2'); ?></td>
			<td><?php echo form_label('Penerima Pensiun Berkala','pensiun'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_2';
					$pajak['value'] = (set_value('penerima_2')) ? set_value('penerima_2') : $laporan_data['penerima_2'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Penerima Pensiun Berkala harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_2';
					$pajak['value'] = (set_value('bruto_2')) ? set_value('bruto_2') : $laporan_data['bruto_2'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Penerima Pensiun Berkala harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_2';
					$pajak['value'] = (set_value('pajak_2')) ? set_value('pajak_2') : $laporan_data['pajak_2'];
					$pajak['title'] = "Jumlah Pajak Terutang Penerima Pensiun Berkala harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('3','nomor3'); ?></td>
			<td><?php echo form_label('Pegawai Tidak Tetap atau Tenaga Kerja Lepas ','pegawai_tidak_tetap'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_3';
					$pajak['value'] = (set_value('penerima_3')) ? set_value('penerima_3') : $laporan_data['penerima_3'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Pegawai Tidak Tetap harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_3';
					$pajak['value'] = (set_value('bruto_3')) ? set_value('bruto_3') : $laporan_data['bruto_3'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Pegawai Tidak Tetap harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_3';
					$pajak['value'] = (set_value('pajak_3')) ? set_value('pajak_3') : $laporan_data['pajak_3'];
					$pajak['title'] = "Jumlah Pajak Terutang Pegawai Tidak Tetap harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('4','nomor4'); ?></td>
			<td><?php echo form_label('Distributor MLM','distributor'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_4';
					$pajak['value'] = (set_value('penerima_4')) ? set_value('penerima_4') : $laporan_data['penerima_4'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Distributor MLM harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_4';
					$pajak['value'] = (set_value('bruto_4')) ? set_value('bruto_4') : $laporan_data['bruto_4'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Distributor MLM harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_4';
					$pajak['value'] = (set_value('pajak_4')) ? set_value('pajak_4') : $laporan_data['pajak_4'];
					$pajak['title'] = "Jumlah Pajak Terutang Distributor MLM harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('5','nomor5'); ?></td>
			<td><?php echo form_label('Petugas Dinas Luar Asuransi','petugas'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_5';
					$pajak['value'] = (set_value('penerima_5')) ? set_value('penerima_5') : $laporan_data['penerima_5'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Petugas Dinas Luar Asuransi harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_5';
					$pajak['value'] = (set_value('bruto_5')) ? set_value('bruto_5') : $laporan_data['bruto_5'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Petugas Dinas Luar Asuransi harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_5';
					$pajak['value'] = (set_value('pajak_5')) ? set_value('pajak_5') : $laporan_data['pajak_5'];
					$pajak['title'] = "Jumlah Pajak Terutang Petugas Dinas Luar Asuransi harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('6','nomor6'); ?></td>
			<td><?php echo form_label('Penjaja Barang Dagangan','penjaja'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_6';
					$pajak['value'] = (set_value('penerima_6')) ? set_value('penerima_6') : $laporan_data['penerima_6'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Penjaja Barang Dagangan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_6';
					$pajak['value'] = (set_value('bruto_6')) ? set_value('bruto_6') : $laporan_data['bruto_6'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Penjaja Barang Dagangan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_6';
					$pajak['value'] = (set_value('pajak_6')) ? set_value('pajak_6') : $laporan_data['pajak_6'];
					$pajak['title'] = "Jumlah Pajak Terutang Penjaja Barang Dagangan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('7','nomor7'); ?></td>
			<td><?php echo form_label('Tenaga Ahli','tenaga'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_7';
					$pajak['value'] = (set_value('penerima_7')) ? set_value('penerima_7') : $laporan_data['penerima_7'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Tenaga Ahli harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_7';
					$pajak['value'] = (set_value('bruto_7')) ? set_value('bruto_7') : $laporan_data['bruto_7'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Tenaga Ahli harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_7';
					$pajak['value'] = (set_value('pajak_7')) ? set_value('pajak_7') : $laporan_data['pajak_7'];
					$pajak['title'] = "Jumlah Pajak Terutang Tenaga Ahli harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('8','nomor8'); ?></td>
			<td><?php echo form_label('Anggota Dewan Komisaris atau Dewan Pengawas yang tidak Merangkap sebagai Pegawai Tetap','dewan_komisaris'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_8';
					$pajak['value'] = (set_value('penerima_8')) ? set_value('penerima_8') : $laporan_data['penerima_8'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Anggota Dewan Komisaris harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_8';
					$pajak['value'] = (set_value('bruto_8')) ? set_value('bruto_8') : $laporan_data['bruto_8'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Anggota Dewan Komisaris harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_8';
					$pajak['value'] = (set_value('pajak_8')) ? set_value('pajak_8') : $laporan_data['pajak_8'];
					$pajak['title'] = "Jumlah Pajak Terutang Anggota Dewan Komisaris harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('9','nomor9'); ?></td>
			<td><?php echo form_label('Mantan Pegawai yang Menerima Jasa Produksi, Tantiem, Bonus atau Imbalan Lain','mantan_pegawai'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_9';
					$pajak['value'] = (set_value('penerima_9')) ? set_value('penerima_9') : $laporan_data['penerima_9'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Mantan Pegawai yang Menerima Jasa Produksi harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_9';
					$pajak['value'] = (set_value('bruto_9')) ? set_value('bruto_9') : $laporan_data['bruto_9'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Mantan Pegawai yang Menerima Jasa Produksi harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_9';
					$pajak['value'] = (set_value('pajak_9')) ? set_value('pajak_9') : $laporan_data['pajak_9'];
					$pajak['title'] = "Jumlah Pajak Terutang Mantan Pegawai yang Menerima Jasa Produksi harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('10','nomor10'); ?></td>
			<td><?php echo form_label('Pegawai yang Melakukan Penarikan Dana Pensiun','pegawai'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_10';
					$pajak['value'] = (set_value('penerima_10')) ? set_value('penerima_10') : $laporan_data['penerima_10'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Pegawai yang Melakukan Penarikan Dana Pensiun harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_10';
					$pajak['value'] = (set_value('bruto_10')) ? set_value('bruto_10') : $laporan_data['bruto_10'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Pegawai yang Melakukan Penarikan Dana Pensiun harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_10';
					$pajak['value'] = (set_value('pajak_10')) ? set_value('pajak_10') : $laporan_data['pajak_10'];
					$pajak['title'] = "Jumlah Pajak Terutang Pegawai yang Melakukan Penarikan Dana Pensiun harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('11','nomor11'); ?></td>
			<td><?php echo form_label('Peserta Kegiatan','peserta'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_11';
					$pajak['value'] = (set_value('penerima_11')) ? set_value('penerima_11') : $laporan_data['penerima_11'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Peserta Kegiatan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_11';
					$pajak['value'] = (set_value('bruto_11')) ? set_value('bruto_11') : $laporan_data['bruto_11'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Peserta Kegiatan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_11';
					$pajak['value'] = (set_value('pajak_11')) ? set_value('pajak_11') : $laporan_data['pajak_11'];
					$pajak['title'] = "Jumlah Pajak Terutang harus Peserta Kegiatan diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('12','nomor12'); ?></td>
			<td><?php echo form_label('Bukan Pegawai yang Menerima Penghasilan yang Bersifat Berkesinambungan','bukan_pegawai'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_12';
					$pajak['value'] = (set_value('penerima_12')) ? set_value('penerima_12') : $laporan_data['penerima_12'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Bukan Pegawai yang Menerima Penghasilan yang Bersifat Berkesinambungan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_12';
					$pajak['value'] = (set_value('bruto_12')) ? set_value('bruto_12') : $laporan_data['bruto_12'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Bukan Pegawai yang Menerima Penghasilan yang Bersifat Berkesinambungan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_12';
					$pajak['value'] = (set_value('pajak_12')) ? set_value('pajak_12') : $laporan_data['pajak_12'];
					$pajak['title'] = "Jumlah Pajak Terutang Bukan Pegawai yang Menerima Penghasilan yang Bersifat Berkesinambungan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('13','nomor13'); ?></td>
			<td><?php echo form_label('Bukan Pegawai yang Menerima Penghasilan yang Tidak Bersifat Berkesinambungan','bukan_pegawai'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_13';
					$pajak['value'] = (set_value('penerima_13')) ? set_value('penerima_13') : $laporan_data['penerima_13'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Bukan Pegawai yang Menerima Penghasilan yang Tidak Bersifat Berkesinambungan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_13';
					$pajak['value'] = (set_value('bruto_13')) ? set_value('bruto_13') : $laporan_data['bruto_13'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Bukan Pegawai yang Menerima Penghasilan yang Tidak Bersifat Berkesinambungan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_13';
					$pajak['value'] = (set_value('pajak_13')) ? set_value('pajak_13') : $laporan_data['pajak_13'];
					$pajak['title'] = "Jumlah Pajak Terutang Bukan Pegawai yang Menerima Penghasilan yang Tidak Bersifat Berkesinambungan harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('14','nomor14'); ?></td>
			<td><?php echo form_label('Pegawai atau Pemberi Jasa sebagai Wajib Pajak Luar Negeri','pegawai'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_14';
					$pajak['value'] = (set_value('penerima_14')) ? set_value('penerima_14') : $laporan_data['penerima_14'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Pegawai atau Pemberi Jasa sebagai Wajib Pajak Luar Negeri harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_14';
					$pajak['value'] = (set_value('bruto_14')) ? set_value('bruto_14') : $laporan_data['bruto_14'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Pegawai atau Pemberi Jasa sebagai Wajib Pajak Luar Negeri harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_14';
					$pajak['value'] = (set_value('pajak_14')) ? set_value('pajak_14') : $laporan_data['pajak_14'];
					$pajak['title'] = "Jumlah Pajak Terutang Pegawai atau Pemberi Jasa sebagai Wajib Pajak Luar Negeri harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('15','nomor15'); ?></td>
			<td><?php echo form_label('PPh Pasal 21 dan/atau Pasal 26 yang telah Disetor pada Masa Pajak Januari s.d. November (Diisi hanya pada Masa Pajak Desember)','pph'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_15';
					$pajak['value'] = (set_value('penerima_15')) ? set_value('penerima_15') : $laporan_data['penerima_15'];
					$pajak['title'] = "Jumlah Penerima Penghasilan PPh Pasal 21 dan/atau Pasal 26 harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_15';
					$pajak['value'] = (set_value('bruto_15')) ? set_value('bruto_15') : $laporan_data['bruto_15'];
					$pajak['title'] = "Jumlah Penghasilan Bruto PPh Pasal 21 dan/atau Pasal 26 harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_15';
					$pajak['value'] = (set_value('pajak_15')) ? set_value('pajak_15') : $laporan_data['pajak_15'];
					$pajak['title'] = "Jumlah Pajak Terutang harus PPh Pasal 21 dan/atau Pasal 26 diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('16','nomor16'); ?></td>
			<td><?php echo form_label('STP PPh Pasal 21 dan/atau Pasal 26 (hanya Pokok Pajak)','stp'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_16';
					$pajak['value'] = (set_value('penerima_16')) ? set_value('penerima_16') : $laporan_data['penerima_16'];
					$pajak['title'] = "Jumlah Penerima Penghasilan STP PPh Pasal 21 dan/atau Pasal 26 harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_16';
					$pajak['value'] = (set_value('bruto_16')) ? set_value('bruto_16') : $laporan_data['bruto_16'];
					$pajak['title'] = "Jumlah Penghasilan Bruto STP PPh Pasal 21 dan/atau Pasal 26 harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_16';
					$pajak['value'] = (set_value('pajak_16')) ? set_value('pajak_16') : $laporan_data['pajak_16'];
					$pajak['title'] = "Jumlah Pajak Terutang STP PPh Pasal 21 dan/atau Pasal 26 harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('17','nomor17'); ?></td>
			<td><?php echo form_label('Penyetoran dengan SSP PPh Pasal 21 Ditanggung Pemerintah','penyetoran'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_17';
					$pajak['value'] = (set_value('penerima_17')) ? set_value('penerima_17') : $laporan_data['penerima_17'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Penyetoran dengan SSP PPh Pasal 21 harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_17';
					$pajak['value'] = (set_value('bruto_17')) ? set_value('bruto_17') : $laporan_data['bruto_17'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Penyetoran dengan SSP PPh Pasal 21 harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_17';
					$pajak['value'] = (set_value('pajak_17')) ? set_value('pajak_17') : $laporan_data['pajak_17'];
					$pajak['title'] = "Jumlah Pajak Terutang Penyetoran dengan SSP PPh Pasal 21 harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('18','nomor18'); ?></td>
			<td><?php echo form_label('Penyetoran dengan SSP','penyetoran'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_18';
					$pajak['value'] = (set_value('penerima_18')) ? set_value('penerima_18') : $laporan_data['penerima_18'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Penyetoran dengan SSP harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_18';
					$pajak['value'] = (set_value('bruto_18')) ? set_value('bruto_18') : $laporan_data['bruto_18'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Penyetoran dengan SSP harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_18';
					$pajak['value'] = (set_value('pajak_18')) ? set_value('pajak_18') : $laporan_data['pajak_18'];
					$pajak['title'] = "Jumlah Pajak Terutang Penyetoran dengan SSP harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('19','nomor19'); ?></td>
			<td><?php echo form_label('Penerima Uang Pesangon, Uang Manfaat Pensiun, Tunjangan Hari Tua atau Jaminan Hari Tua, dan Pembayaran Lain Sejenis yang Dibayarkan Sekaligus','penerima'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_19';
					$pajak['value'] = (set_value('penerima_19')) ? set_value('penerima_19') : $laporan_data['penerima_19'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Penerima Uang Pesangon harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_19';
					$pajak['value'] = (set_value('bruto_19')) ? set_value('bruto_19') : $laporan_data['bruto_19'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Penerima Uang Pesangon harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_19';
					$pajak['value'] = (set_value('pajak_19')) ? set_value('pajak_19') : $laporan_data['pajak_19'];
					$pajak['title'] = "Jumlah Pajak Terutang harus Penerima Uang Pesangon diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('20','nomor20'); ?></td>
			<td><?php echo form_label('Pejabat Negara, Pegawai Negeri Sipil, Anggota TNI/POLRI dan Pensiunan yang Menerima Honorarium dan Imbalan Lain yang Dibebankan Kepada Keuangan Negara/Daerah','pejabat'); ?></td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'penerima_20';
					$pajak['value'] = (set_value('penerima_20')) ? set_value('penerima_20') : $laporan_data['penerima_20'];
					$pajak['title'] = "Jumlah Penerima Penghasilan Pejabat Negara harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'bruto_20';
					$pajak['value'] = (set_value('bruto_20')) ? set_value('bruto_20') : $laporan_data['bruto_20'];
					$pajak['title'] = "Jumlah Penghasilan Bruto Pejabat Negara harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
			<td>
				<?php
					$pajak['name'] = $pajak['id'] = 'pajak_20';
					$pajak['value'] = (set_value('pajak_20')) ? set_value('pajak_20') : $laporan_data['pajak_20'];
					$pajak['title'] = "Jumlah Pajak Terutang Pejabat Negara harus diisi dengan angka";
					echo form_input($pajak);
				?>
			</td>
		</tr>
	</table>

	<?php
		$attributes = array('id' => 'fieldset', 'class' => 'fieldset');
		echo form_fieldset('Lampiran', $attributes);
	?>
	<table width="300px" border="0" align="center" cellpadding="2" cellspacing="0" >
		<tr>
			<th><?php echo form_label('a) Surat Setoran Pajak ____ lembar','pajak'); ?></th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'lampiran_a';
					$data['value'] = '1';
					if ($laporan_data['lampiran_a'] == 1 || set_value('lampiran_a') == 1) $data['checked'] = TRUE;
					else unset($data['checked']);
					echo form_checkbox($data);
				?>
			</td>
			<th><?php echo form_label('b) Surat Setoran Pajak PPh Pasal 21 DTP','pajak'); ?></th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'lampiran_b';
					$data['value'] = '1';
					if ($laporan_data['lampiran_b']==1 || set_value('lampiran_b') == 1) $data['checked'] = TRUE;
					else unset($data['checked']);
					echo form_checkbox($data);
				?>
			</td>
			<th><?php echo form_label('c) Surat Kuasa Khusus/Surat Keterangan Kematian','pajak'); ?></th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'lampiran_c';
					$data['value'] = '1';
					if ($laporan_data['lampiran_c']==1 || set_value('lampiran_c') == 1) $data['checked'] = TRUE;
					else unset($data['checked']);
					echo form_checkbox($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('d) Daftar Bukti Pemotongan Pajak Penghasilan Tidak Final','pajak'); ?></th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'lampiran_d';
					$data['value'] = '1';
					if ($laporan_data['lampiran_d']==1 || set_value('lampiran_d') == 1) $data['checked'] = TRUE;
					else unset($data['checked']);
					echo form_checkbox($data);
				?>
			</td>
			<th><?php echo form_label('e) Daftar Bukti Pemotongan Pajak Penghasilan Tidak Final','pajak'); ?></th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'lampiran_e';
					$data['value'] = '1';
					if ($laporan_data['lampiran_e']==1 || set_value('lampiran_e') == 1) $data['checked'] = TRUE;
					else unset($data['checked']);
					echo form_checkbox($data);
				?>
			</td>
			<th><?php echo form_label('f) Formulir 1721 – I (Disampaikan hanya pada Masa Pajak  Desember)','pajak'); ?></th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'lampiran_f';
					$data['value'] = '1';
					if ($laporan_data['lampiran_f']==1 || set_value('lampiran_f') == 1) $data['checked'] = TRUE;
					else unset($data['checked']);
					echo form_checkbox($data);
				?>
			</td>
		</tr>
		<tr>
			<th><?php echo form_label('g) Formulir 1721 – II (Disampaikan hanya pada Masa Pajak terjadi perubahan Pegawai Tetap)','pajak'); ?></th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'lampiran_g';
					$data['value'] = '1';
					if ($laporan_data['lampiran_g']==1 || set_value('lampiran_g') == 1) $data['checked'] = TRUE;
					else unset($data['checked']);
					echo form_checkbox($data);
				?>
			</td>
			<th><?php echo form_label('h) Daftar Biaya untuk Wajib Pajak yang Tidak Wajib Menyampaikan SPT Tahunan PPh Badan (Disampaikan hanya pada Masa Pajak Desember)','pajak'); ?></th>
			<td>
				<?php
					$data['name'] = $data['id'] = 'lampiran_h';
					$data['value'] = '1';
					if ($laporan_data['lampiran_h']==1 || set_value('lampiran_h') == 1) $data['checked'] = TRUE;
					else unset($data['checked']);
					echo form_checkbox($data);
				?>
			</td>
		</tr>
	</table>
	<?php echo form_fieldset_close(); ?>

	<div class="buttons">
		<?php
			if($act!='view')
			{
				echo form_submit('simpan','Simpan', "id = 'button-save'" );
				echo form_reset('reset','Reset', "id = 'button-reset'" );
			}
			if($act!='add')
			{
				echo form_button(array('id' => 'button-print', 'content' => 'Cetak', 'onClick' => "location.href='".site_url()."laporan_pph21/cetak/".$laporan_data['id']."'" ));
			}
			$cancel_text = ($act=='view') ? 'Kembali' : 'Batal';
			echo form_button(array('id' => 'button-cancel', 'content' => $cancel_text, 'onClick' => "location.href='".site_url()."laporan_pph21'" ));
		?>
	</div>

<?php echo form_close(); ?>

</div>

<script type='text/javascript'>
	//Validasi di client
	$(document).ready(function()
	{
		$('#pph21_form').validate({
			errorLabelContainer: "#error",
			wrapper: "li",
			rules:
			{
				penerima_1: "integer",
				penerima_2: "integer",
				penerima_3: "integer",
				penerima_4: "integer",
				penerima_5: "integer",
				penerima_6: "integer",
				penerima_7: "integer",
				penerima_8: "integer",
				penerima_9: "integer",
				penerima_10: "integer",
				penerima_11: "integer",
				penerima_12: "integer",
				penerima_13: "integer",
				penerima_14: "integer",
				penerima_15: "integer",
				penerima_16: "integer",
				penerima_17: "integer",
				penerima_18: "integer",
				penerima_19: "integer",
				penerima_20: "integer",
				bruto_1: "integer",
				bruto_2: "integer",
				bruto_3: "integer",
				bruto_4: "integer",
				bruto_5: "integer",
				bruto_6: "integer",
				bruto_7: "integer",
				bruto_8: "integer",
				bruto_9: "integer",
				bruto_10: "integer",
				bruto_11: "integer",
				bruto_12: "integer",
				bruto_13: "integer",
				bruto_14: "integer",
				bruto_15: "integer",
				bruto_16: "integer",
				bruto_17: "integer",
				bruto_18: "integer",
				bruto_19: "integer",
				bruto_20: "integer",
				pajak_1: "integer",
				pajak_2: "integer",
				pajak_3: "integer",
				pajak_4: "integer",
				pajak_5: "integer",
				pajak_6: "integer",
				pajak_7: "integer",
				pajak_8: "integer",
				pajak_9: "integer",
				pajak_10: "integer",
				pajak_11: "integer",
				pajak_12: "integer",
				pajak_13: "integer",
				pajak_14: "integer",
				pajak_15: "integer",
				pajak_16: "integer",
				pajak_17: "integer",
				pajak_18: "integer",
				pajak_19: "integer",
				pajak_20: "integer"
			}
		});
	});
</script>
