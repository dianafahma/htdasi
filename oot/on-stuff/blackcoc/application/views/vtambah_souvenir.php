<!doctype html>
<html lang="en">
	<head>
	<title></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
	</head>
<body>
<div class="content">
<?php echo form_open('c_souvenir/tambah'); ?>
<h2>
	Tambah Toko Pemasok
</h2>
<br/>
	<table>
		<tr height="60px">
			<td>
				<label for="inputEmail" class="form-group">
					Kode Souvenir
				</label>
			</td>
			<td>: </td>
			<td class="col-lg-10">
				<input type="text" class="form-control" id="kode_souvenir" name="kode_souvenir" placeholder="Kode Souvenir" required/>
			</td>
		</tr>
		<tr height="60px">
			<td>
				<label for="inputEmail" class="form-group">
					Nama Souvenir
				</label>
			</td>
			<td>: </td>
			<td class="col-lg-10"><input type="text" class="form-control" id="nama_souvenir" name="nama_souvenir" placeholder="Nama Souvenir" required/>
			<?php //echo form_input('id_toko');?></td>
		</tr>
		<tr height="60px">
			<td>
				<label for="inputEmail" class="form-group">
					Stok Souvenir
				</label>
			</td>
			<td>: </td>
			<td class="col-lg-10">
				<input type="text" class="form-control" id="stok_souvenir" name="stok_souvenir" placeholder="Stok Souvenir" required/>
			</td>
		</tr>
		<tr height="60px">
			<td><label for="inputEmail" class="form-group">Harga Souvenir</label></td>
			<td>: </td>
			<td class="col-lg-10"><input type="text" class="form-control" id="harga_souvenir" name="harga_souvenir" placeholder="Harga " required/>
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<td >
			<br/>
				<?php echo form_submit('submit','Simpan','class="btn btn-primary" style="text-decoration:none;"');?> &nbsp;&nbsp;
				<?php echo anchor ('/c_souvenir/display','Balik','class="btn btn-primary" style="text-decoration:none;"');?>
			</td>
		</tr>
		<?php echo form_close();?>
	</table>
	<br/>
	</div>
</body>
</html>