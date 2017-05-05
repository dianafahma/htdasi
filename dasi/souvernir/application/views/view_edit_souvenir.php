<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
</head>
<body>
<div>
<div class="content">
	<h3>Edit Data Souvenir</h3>
	<?php 	
	echo form_open('c_souvenir/update_souvenir/'.$row_data->kode_souvenir);
	?>
	<table>
		<tr height="50px">
			<td width="120px;"><label for="id_toko" class="text-warning" >Kode Souvenir</label></td>
			<td><?php echo form_input('kode_souvenir',$row_data->kode_souvenir,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
				<tr height="50px">
			<td width="120px;"><label for="nama_souvenir" class="text-warning" >Nama Souvenir</label></td>
			<td><?php echo form_input('nama_souvenir',$row_data->nama_souvenir,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
		<tr height="50px">
			<td width="120px;"><label for="stok_souvenir" class="text-warning" >Stok Souvenir</label></td>
			<td><?php echo form_input('stok_souvenir',$row_data->stok_souvenir,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
		<tr height="50px">
			<td width="120px;">
			<label for="harga_toko" class="text-warning" >Harga Souvenir</label></td>
			<td><?php echo form_input('harga_souvenir',$row_data->harga_souvenir,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
	</table>
	<table>
		<tr>
		<td>
		<?php  echo anchor ('c_souvenir/display_souvenir','Batal','class="btn btn-primary"style="text-decoration:none;"');
		 echo "	&nbsp;";?>
		<?php echo form_submit('submit','Simpan','class="btn btn-primary"');?></td>
		</tr>
		<?php echo form_close();
		 ?>
	</table>
<br/>
</div>
</body>
</html>