<script type="text/javascript" charset="utf-8">
	$(function() {
		popup_table = $('#popup').dataTable({
			"bJQueryUI": true,
			"sPaginationType": "full_numbers"
		});
	});
</script>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="popup">
	<thead>
		<tr>
			<th>Nama Proyek</th>									
			<th>Klien</th>
			<th>Status</th>
			<th></th>									
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
					echo '<td>'.form_hidden('id'.$i, $row->id).form_radio('chkID', $i).'</td>';
					echo '</tr>';
					$i++;
				}
			}
		?>
	</tbody>									
</table>
