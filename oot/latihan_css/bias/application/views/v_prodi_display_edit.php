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
	<h3>Edit Program Studi</h3>
	<?php 
	echo form_open('c_akademik/update_edit/'.$row_data->KODE_PRODI);
	?>
	<table>
		<tr>
			<td>Kode Prodi</td>
			<td>: </td>
			<td><?php echo form_input('kode_prodi',$row_data->KODE_PRODI);?></td>
			<td><?php //echo form_input('kode_prodi',$row_data->KODE_PRODI);?></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>: </td>
			<td><?php echo form_input('nama_prodi',$row_data->NAMA_PRODI);?></td>
		</tr>
	</table>
	<table>
		<tr>
		<td>
		<button class ="tambah" onclick="location.href='<?php echo base_url();?>index.php/c_akademik/insert'">Batal</button>
		<?php echo form_submit('submit','simpan','class="tambah"');?></td>
		</tr>
		<?php echo form_close();
		 ?>
	</table>

</div>
</body>
</html>