	<table  style="padding-left:30px; align="center" ">
		 <?php
				foreach($list_item->result()as $row)
				{
			?>
		<table border="1">
			<tr>
				<td> ID kota </td>
				<td> Nama Kota </td>
				<td> Jumlah Penduduk </td>
				
			</tr>
			<tr align="center">
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->nama_pantai; ?></td>
			<td><?php echo $row->kota; ?></td>
			</tr>
		<?php  } ?>
	</table>