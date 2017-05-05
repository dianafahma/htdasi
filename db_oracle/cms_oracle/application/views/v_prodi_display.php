<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'assets/css/style.css'?>"/>
</head>
<body>
<div>
	<div class="nav">
	<ul>
		<li ><?php echo anchor ('c_akademik/display','Home')?></li>
		<li> <?php echo anchor ('c_akademik/display_prodi','Program Studi')?></li>
		<li><?php echo anchor ('c_akademik/display_mahasiswa','Mahasiswa')?>
		</li>
	</ul>
	</div>
<center class="content">
	<h3>Tambah Program Studi</h3>
	<?php 
	echo form_open('c_akademik/insert');
	?>
	<table>
		<tr>
			<td>Kode Prodi</td>
			<td>: </td>
			<td><?php echo form_input('KODE_PRODI');?></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>: </td>
			<td><?php echo form_input('NAMA_PRODI');?></td>
		</tr>
	</table>
	<table>
		<tr>
		<td><?php echo form_submit('submit','simpan','id="submit"');?></td>
		</tr>
		<?php echo form_close();
		 ?>
	</table>
</center>
</body>
</html>