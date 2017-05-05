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
	echo $kode;
	echo $row_data->kode_barang;
	
	echo form_open('c_sembako/update_barang/'.$row_data->kode_barang);
	?>
	<table>
		<tr>
			<td>Kode Prodi</td>
			<td>: </td>
			<td><?php echo form_input('kode_barang',$row_data->kode_barang);?></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>: </td>
			<td><?php echo form_input('nama_barang',$row_data->nama_barang);?></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>: </td>
			<td><?php echo form_input('harga_barang',$row_data->harga_barang);?></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>: </td>
			<td><?php echo form_input('satuan_barang',$row_data->satuan_barang);?></td>
		</tr>
		<tr>
			<td>Stok Barang</td>
			<td>: </td>
			<td><?php echo form_input('stok_barang',$row_data->stok_barang);?></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>: </td>
			<td><?php echo form_input('id_toko',$row_data->id_toko);?></td>
		</tr>
		<tr>
			<td>Nama Prodi</td>
			<td>: </td>
			<td><?php echo form_input('ket',$row_data->ket);?></td>
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