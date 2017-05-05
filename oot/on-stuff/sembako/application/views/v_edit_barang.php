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
	echo form_open('c_sembako/update_barang/'.$row_data->kode_barang);
	?>
	<table>
		<tr height="50px">
			<td width="120px;"><label for="id_toko" class="text-warning" >Kode Barang</label></td>
			<td><?php echo form_input('kode_barang',$row_data->kode_barang,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
				<tr height="50px">
			<td width="120px;"><label for="id_toko" class="text-warning" >Nama Barang</label></td>
			<td><?php echo form_input('nama_barang',$row_data->nama_barang,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
				<tr height="50px">
			<td width="120px;"><label for="id_toko" class="text-warning" >Harga Barang</label></td>
			<td><?php echo form_input('harga_barang',$row_data->harga_barang,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
				<tr height="50px">
			<td width="120px;"><label for="id_toko" class="text-warning" >Satuan Barang</label></td>
			<td><?php echo form_input('satuan_barang',$row_data->satuan_barang,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
				<tr height="50px">
			<td width="120px;"><label for="id_toko" class="text-warning" >StokBarang</label></td>
			<td><?php echo form_input('stok_barang',$row_data->stok_barang,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>

		<tr height="50px">
			<td width="120px;"><label for="id_toko" class="text-warning" >Kode Toko </label></td>
			<td><?php echo form_input('id_toko',$row_data->id_toko,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
		<tr height="50px">
			<td width="120px;"><label for="id_toko" class="text-warning" >Keterangan </label></td>
			<td><?php echo form_input('ket',$row_data->ket,'class="btn-warning" style="height:30px;padding-left:10px;"');?></td>
		</tr>
	</table>
	<table>
		<tr>
		<td>
		<button class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/c_akademik/insert'">Batal</button>
		<?php echo form_submit('submit','Simpan','class="btn btn-primary"');?></td>
		</tr>
		<?php echo form_close();
		 ?>
	</table>
<br/>
</div>
</body>
</html>