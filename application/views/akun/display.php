<script type="text/javascript" src="<?php echo base_url();?>js/group_table.js"></script>
	
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
			echo form_button(array('id' => 'button-addnew', 'content' => 'Tambah Baru', 'onClick' => "location.href='".site_url()."akun/add'" ));
			echo form_button(array('id' => 'button-view', 'content' => 'Lihat', 'onClick' => "editAction('".site_url()."akun/view')" ));
			echo form_button(array('id' => 'button-edit', 'content' => 'Ubah', 'onClick' => "editAction('".site_url()."akun/edit')" ));
			echo form_button(array('id' => 'button-delete', 'content' => 'Hapus', 'onClick' => "deleteAction('".site_url()."akun/delete')" ));
		?>		
	</div>
	
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="group_table">
		<thead>
			<tr>
				<th>Grup</th>
				<th>Akun</th>
				<th>Kode</th>									
				<th>Cek</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if($account_data)
				{
					$i = 0;
					foreach ($account_data as $row)
					{
						echo '<tr>';
						echo '<td>'.$row->groups_name.'</td>';
						echo '<td>'.$row->nama.'</td>';
						echo '<td>'.$row->kode.'</td>';
						echo '<td>'.form_hidden($i, $row->id).form_radio('selected_data', $i).'</td>';
						echo '</tr>';
						$i++;
					}
				}
			?>
		</tbody>
		<tfoot>
			<tr>
				<th>Grup</th>
				<th>Akun</th>
				<th>Kode</th>									
				<th>Cek</th>
			</tr>
		</tfoot>
	</table>

</div>
