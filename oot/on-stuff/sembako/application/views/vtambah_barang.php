<!doctype html>
<html lang="en">
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
	</head
<body>
<div class="content">
<?php echo form_open('c_sembako/tambah_barang'); ?>
<h2>
	Tambah Data Barang
</h2>
<br/>
	<table>
		<tr height="60px">
			<td><label for="inputEmail" class="form-group">Kode Barang </label></td>
			<td>: </td>
			<td class="col-lg-10"> <input type="text" class="form-control" id="inputEmail" name="kode_barang" placeholder="Kode Barang" required/>
			<?php //echo form_input('kode_barang');?></td>
		</tr>
		<tr height="60px">
			<td><label for="inputEmail" class="form-group">Nama Barang</label></td>
			<td>: </td>
			<td class="col-lg-10"><input type="text" class="form-control" id="inputEmail" name="nama_barang" placeholder="Nama Barang" required/>
			<?php //echo form_input('nama_barang');?></td>
		</tr>
		<tr height="60px">
			<td><label for="inputEmail" class="form-group">Harga Barang</label></td>
			<td>: </td>
			<td class="col-lg-10"><input type="text" class="form-control" id="inputEmail" name="harga_barang" placeholder="Harga Barang" required/>
			<?php // echo form_input('harga_barang');?></td>
		</tr>
		<tr height="60px">
			<td><label for="inputEmail" class="form-group">Satuan Barang </label></td>
			<td>: </td>
			<td class="col-lg-10"> <input type="text" class="form-control" id="inputEmail" name="satuan_barang" placeholder="Satuan Barang" required/>
			<?php //echo form_input('satuan_barang');?></td>
		</tr>
		<tr height="60px">
			<td><label for="inputEmail" class="form-group">Stok Barang</label></td>
			<td>: </td>
			<td class="col-lg-10"><input type="text" class="form-control" id="inputEmail" name="stok_barang" placeholder="Stok Barang" required/>
			<?php //echo form_input('stok_barang');?></td>
		</tr>
		<tr height="60px">
			<td><label for="inputEmail" class="form-group">Kode Toko </label></td>
			<td>: </td>
			<td class="col-lg-10"><input type="text" class="form-control" id="inputEmail" name="id_toko" placeholder="Kode Toko" required/>
			<?php //echo form_input('id_toko');?></td>
		</tr>
		<tr height="60px">
			<td><label for="inputEmail" class="form-group">Keterangan </label></td>
			<td>: </td>
			<td class="col-lg-10"><input type="text" class="form-control" id="inputEmail" name="ket" placeholder="Keterangan" >
			<?php //echo form_input('ket');?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td >
			<br/>
			<?php echo form_submit('submit','Simpan','class="btn btn-primary"');?> &nbsp;&nbsp;
			<?php echo anchor ('/c_sembako/display_barang','Balik','class="btn btn-primary" style="text-decoration:none;"');?>
			<!--<button class="tambah" onclick="location.href='<?php echo base_url();?>index.php/c_sembako/display_barang'">Batal</button>-->
			</td>
		</tr>
		<?php echo form_close();?>
	</table>
	<br/>
	</div>
</body>
</html>