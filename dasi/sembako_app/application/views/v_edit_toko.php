<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
</head>
<body>
<div>
<div class="content">
	<h3>Edit Program Studi</h3>
	<?php 
	echo form_open('c_sembako/update_toko/'.$row_data->id_toko);
	?>
	<table>
		<tr>
			<td>Kode Toko</td>
			<td>: </td>
			<td><?php echo form_input('id_toko',$row_data->id_toko);?></td>
		</tr>
		<tr>
			<td>Nama Toko</td>
			<td>: </td>
			<td><?php echo form_input('nama_toko',$row_data->nama_toko);?></td>
		</tr>
		<tr>
			<td>Alamat Toko</td>
			<td>: </td>
			<td><?php echo form_input('alamat',$row_data->alamat);?></td>
		</tr>
	</table>
	<table>
		<tr>
		<td>
		<button class ="tambah" onclick="location.href='<?php echo base_url();?>index.php/c_sembako/insert'">Batal</button>
		<?php echo form_submit('submit','simpan','class="tambah"');?></td>
		</tr>
		<?php echo form_close();
		 ?>
	</table>
</div>
</body>
</html>