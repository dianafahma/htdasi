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
	Tambah Toko Pemasok
</h2>
<br/>
	<table>
		<tr>
			<td>Kode Barang</td>
			<td>: </td>
			<td><?php echo form_input('kode_barang');?></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>: </td>
			<td><?php echo form_input('nama_barang');?></td>
		</tr>
		<tr>
			<td>Harga Barang</td>
			<td>: </td>
			<td><?php echo form_input('harga_barang');?></td>
		</tr>
		<tr>
			<td>Satuan Barang</td>
			<td>: </td>
			<td><?php echo form_input('satuan_barang');?></td>
		</tr>
		<tr>
			<td>Stok Barang</td>
			<td>: </td>
			<td><?php echo form_input('stok_barang');?></td>
		</tr>
		<tr>
			<td>Kode Toko</td>
			<td>: </td>
			<td><?php echo form_input('id_toko');?></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td>: </td>
			<td><?php echo form_input('ket');?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td >
			<br/>
			<?php echo form_submit('submit','simpan','class="tambah"');?> &nbsp;&nbsp;
			<?php echo anchor ('/c_sembako/display_barang','Balik','class="tambah"');?>
			<!--<button class="tambah" onclick="location.href='<?php echo base_url();?>index.php/c_sembako/display_barang'">Batal</button>-->
			</td>
		</tr>
		<?php echo form_close();?>
	</table>
	<br/>
	</div>
</body>
</html>