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
			echo form_button(array('id' => 'button-addnew', 'content' => 'Tambah Baru', 'onClick' => "location.href='".site_url()."proyek/add'" ));
			echo form_button(array('id' => 'button-view', 'content' => 'Lihat', 'onClick' => "editAction('".site_url()."proyek/view')" ));
			echo form_button(array('id' => 'button-edit', 'content' => 'Ubah', 'onClick' => "editAction('".site_url()."proyek/edit')" ));
			echo form_button(array('id' => 'button-delete', 'content' => 'Hapus', 'onClick' => "deleteAction('".site_url()."proyek/delete')" ));
		?>		
	</div>

	<table cellpadding="0" cellspacing="0" border="0" class="display" id="display_table">
		<thead>
			<tr>
				<th>Nama Proyek</th>
				<th>Klien</th>
				<th>Status</th>
				<th>Cek</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if($project_data)
				{
					$i = 0;
					foreach ($project_data as $row)
					{
						echo '<tr>';
						echo '<td>'.$row->nama_proyek.'</td>';
						echo '<td>'.$row->nama_klien.'</td>';
						echo '<td>'.$row->status.'</td>';
						echo '<td>'.form_hidden($i, $row->id).form_radio('selected_data', $i).'</td>';
						echo '</tr>';
						$i++;
					}
				}
			?>		
		</tbody>	
		<tfoot>
			<tr>
				<th>Nama Proyek</th>
				<th>Klien</th>
				<th>Status</th>
				<th>Cek</th>
			</tr>
		</tfoot>
	</table>

</div>
