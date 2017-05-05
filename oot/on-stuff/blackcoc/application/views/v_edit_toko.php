<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
</head>
<body>
<div>
<div class="content">
	<h3>Edit Data Toko</h3>
	<?php 
	echo form_open('c_sembako/update_toko/'.$row_data->id_toko);
	?>
	<table>
		<tr height="50px">
			<td width="120px;"><label for="id_toko" class="text-warning" >Kode Toko </label></td>
			<td><?php echo form_input('id_toko',$row_data->id_toko,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
		<tr height="50px">
			<td><label for="nama_toko" class="text-warning" >Nama Toko </label></td>
			
			<td><?php echo form_input('nama_toko',$row_data->nama_toko,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
		<tr height="50px">
			<td><label for="alamat" class="text-warning" >Alamat Toko </label></td>
			<td><?php echo form_input('alamat',$row_data->alamat,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
	</table>
	<br/>
	<table>
		<tr>
		<td>
		<?php echo form_submit('submit','simpan','class="btn btn-primary"');?>
		<button class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/c_sembako/insert'">Batal</button></td>
		</tr>
		<?php echo form_close();
		 ?>
	</table>
	<br/>
	<br/>
</div>
</body>
</html>