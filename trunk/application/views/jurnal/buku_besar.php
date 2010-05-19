<div class="post-title"><h2><a href="#"><?php echo $title; ?></a></h2></div>

<div class="post-body">

	<div class="buttons">
		<h4>Akun : <?php echo $account_data['nama']?></h4>
	</div>
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="display_table">
		<thead>
			<tr>
				<th>Tanggal</th>
				<th>Keterangan</th>
				<th>F</th>									
				<th>Debit</th>
				<th>Kredit</th>
				<th>D/K</th>
				<th>Saldo</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$sum = 0;
				if($journal_data)
				{
					foreach ($journal_data as $row) 
					{ 
						if($row->debit_kredit == 1)
						{
							$sum += $row->nilai;
							$d = number_format($row->nilai, 0, '', '.');
							$k = '';
						}
						else
						{
							$sum -= $row->nilai;
							$d = '';
							$k = number_format($row->nilai, 0, '', '.');
						}
						$dk = ($sum>=0) ? 'D' : 'K';
						echo '<tr>';
						echo '<td>'.$row->tgl.'</td>';
						echo '<td>'.$row->keterangan.'</td>';
						echo '<td>'.$row->f_name.'</td>';
						echo '<td>'.$d.'</td>';
						echo '<td>'.$k.'</td>';	
						echo '<td>'.$dk.'</td>';
						echo '<td>'.number_format(abs($sum), 0, '', '.').'</td>';				
						echo '</tr>';
					}
				}
			?>
		</tbody>
		<tfoot>
			<tr>
				<th>Tanggal</th>
				<th>Keterangan</th>
				<th>F</th>									
				<th>Debit</th>
				<th>Kredit</th>
				<th>D/K</th>
				<th>Saldo</th>
			</tr>
		</tfoot>
	</table>										

	<div class="buttons">
		<?php
			echo form_button(array('id' => 'button-cancel', 'content' => 'Kembali', 'onClick' => "location.href='".site_url()."akun/detail_akun'" ));
		?>
	</div>
						
</div>		
