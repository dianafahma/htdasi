<html>
    <head>
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url() ?>asset/theme/bootstrap.css"/>
    </head>
<body class="container">
<div align="center">
<h3>Tambah Data</h3>
<?php
echo form_open('c_mahasiswa/tambah');
?>
<div class="alert alert-dismissable alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
</div>
<table class="form-horizontal">
<tr>
	<td>NIM</td>
	<td>:</td>
	
	<td>
	 <input type="text" class="form-control" id="inputEmail" name="nim" placeholder="Masukkan Nim Mahasiswa ">
	<?php //echo form_input('nim'); ?></td>
</tr>
	<td>NAMA</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="inputEmail" name="nama" placeholder="Masukkan Nama ">
	<?php //echo form_input('nama'); ?></td>
</tr>
	<td>UMUR</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="inputEmail" name="umur" placeholder="Masukkan Umur Anda ">
	<?php //echo form_input('umur'); ?></td>
</tr>
</table>
<br/>

<table>
<tr>
	<td height="20px"></td>
	<?php echo form_submit('submit','simpan','class="btn btn-success"'); ?></td>
<?php
echo form_close();
?>
</tr>

</table>

</div>
</body>
</html>