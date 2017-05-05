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
<div class="content">
	<h2>Tambah Program Studi</h2>
	<br/>
	<?php 
	echo form_open('c_akademik/insert');
	?>
	<table>
		<tr>
			<td>Kode Prodi</td>
			<td>: </td>
			<td><?php echo form_input('kode_prodi');?></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>: </td>
			<td><?php echo form_input('nama_prodi');?></td>
		</tr>
	</table>
	<table>
		<tr>
		
		<td >
		<br/>
		<?php echo form_submit('submit','simpan','class="tambah"');?> &nbsp;&nbsp;
		<!--<button class="tambah" onclick="javascript:location='<?php echo base_url();?>index.php/c_akademik/display'">Batal</button>-->
		<button type="button" class ="tambah" onclick="location.href='<?php echo base_url();?>index.php/c_akademik/display_prodi'">Batal</button>
		</td>
		</tr>
		<?php echo form_close();?>
	</table>
</div>
</body>
</html>