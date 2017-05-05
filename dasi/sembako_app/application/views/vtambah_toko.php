<!doctype html>
<html lang="en">
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
	</head
<body>
<div class="content">
<?php echo form_open('c_sembako/tambah_toko'); ?>
<h2>
	Tambah Toko Pemasok
</h2>
<br/>
	<table>
		<tr>
			<td>Kode Toko</td>
			<td>: </td>
			<td><?php echo form_input('id_toko');?></td>
		</tr>
		<tr>
			<td>Nama Toko</td>
			<td>: </td>
			<td><?php echo form_input('nama_toko');?></td>
		</tr>
		<tr>
			<td>Alamat Toko</td>
			<td>: </td>
			<td><?php echo form_input('alamat');?></td>
		</tr>
	</table>
	<table>
		<tr>
		
		<td >
		<br/>
		<?php echo form_submit('submit','simpan','class="tambah"');?> &nbsp;&nbsp;
		<button class="tambah"><?php echo anchor ('/c_sembako/display_toko','Balik');?></button>
		<!--<button class="tambah" onclick="location.href='<?php echo base_url();?>index.php/c_sembako/display_barang'">Batal</button>-->
		</td>
		</tr>
		<?php echo form_close();?>
	</table>
	<br/>
	</div>
</body>
</html>