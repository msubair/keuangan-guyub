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
			echo form_button(array('id' => 'button-addnew', 'content' => 'Tambah Baru', 'onClick' => "location.href='".site_url()."laporan_ssp/add'" ));
			echo form_button(array('id' => 'button-view', 'content' => 'Lihat', 'onClick' => "editAction('".site_url()."laporan_ssp/view')" ));
			echo form_button(array('id' => 'button-edit', 'content' => 'Ubah', 'onClick' => "editAction('".site_url()."laporan_ssp/edit')" ));
			echo form_button(array('id' => 'button-delete', 'content' => 'Hapus', 'onClick' => "deleteAction('".site_url()."laporan_ssp/delete')" ));
		?>
	</div>

	<table cellpadding="0" cellspacing="0" border="0" class="display" id="display_table">
	<thead>
		<tr>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Kode Jenis Pajak</th>
			<th>Kode Jenis Setoran</th>
			<th>Jumlah</th>
			<th>Cek</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if($laporan_data)
			{
				$i = 0;
				foreach ($laporan_data as $row)
				{
					echo '<tr>';
					echo '<td>'.nama_bulan($row->bulan).'</td>';
					echo '<td>'.$row->tahun.'</td>';
					echo '<td>'.$row->jenis_pajak.'</td>';
					echo '<td>'.$row->kode_setoran.'</td>';
					echo '<td>'.$row->jumlah.'</td>';
					echo '<td>'.form_hidden($i, $row->id).form_radio('selected_data', $i).'</td>';
					echo '</tr>';
					$i++;
				}
			}
		?>
	</tbody>
	<tfoot>
		<tr>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Kode Jenis Pajak</th>
			<th>Kode Jenis Setoran</th>
			<th>Jumlah</th>
			<th>Cek</th>
		</tr>
	</tfoot>
</table>

</div>
