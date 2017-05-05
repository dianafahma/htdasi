<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php echo anchor ('akademik_c/index','Home'); 
	  echo '	|	';
	  echo anchor ('akademik_c/prodi','Program Studi');
	  echo '	|	';
	  echo anchor ('akademik_c/mahasiswa','Mahasiswa');
?>
	Program Studi,<br> 
	Ini adalah halaman Program Studi dari site ini
	<table border="1">
		<tr>
			<td>Kode Prodi</td>
			<td>Nama Program Studi</td>
			<td>Aksi</td>
		</tr>
		<?php
			foreach($list_prodi->result() as $row ){
		?>
		<tr>
			<td><?php echo $row->KODE_PRODI; ?></td>
			<td><?php echo $row->NAMA_PRODI; ?></td>
			<td>Aksi</td>
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>