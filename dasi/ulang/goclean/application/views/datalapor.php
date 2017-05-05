<div>
	
<h2>Tabel Laporan Sampah</h2>
<table>
	<tr>
		<td>No</td>
		<td>ID</td>
		<td>Nama</td>
		<td>Telp</td>
		<td>Laporan</td>
		<td>Gambar</td>
		<td>Jenis Laporan</td>
		<td>Lokasi</td>
		<td>Detail Lokasi</td>
		<td>Status</td>
	</tr>
	<?php 
			$i=0;
		 foreach($list_lapor as $row) 
		{
			$i=$i+1;
		?>
		<tr class="tbody" >
		  <td><?php  echo $i;?></td>
		    <td><?php  echo $row['id']?></td>
		  <td><?php  echo $row['nama']?>
		  </td>
		  <td><?php  echo $row['hp']?>
		  </td>
		  <td><?php  echo $row['ket']?></td>
		  <td><?php  echo $row['gambar']?></td>
		  <td><?php  echo $row['jenis_lapor']?></td>
		  <td><?php  echo $row['lokasi']?></td>
		  <td><?php  echo $row['lokasi_detail']?></td>
		  <td>stat</td>
		</tr>
		<?php  } ?>
	</table>
		<?php
		echo $this->pagination->create_links();
		?>
	</center>