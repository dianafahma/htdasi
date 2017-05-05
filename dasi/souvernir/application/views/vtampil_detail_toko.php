<html>
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
	</head
<body class="content">
<center>
<h2>
	Detail Toko 
</h2>
<br/>
	<table border="">
	<tr>
		<td width="120px;"><label for="id_toko" class="text-warning" >Kode Toko </label></td>
		<td class="breadcrumb active"><?php echo $row->id_toko; ?></td>
	</tr>
	<tr>
		<td width="120px;"><label for="id_toko" class="text-warning" >Nama Toko </label></td>
		<td class="breadcrumb active"><?php echo $row->nama_toko; ?></td>
	</tr>
	<tr>
		<td width="120px;"><label for="id_toko" class="text-warning" >AlamatToko </label></td>
		<td class="breadcrumb active"><?php echo $row->alamat; ?></td>
	</tr>
	</table>
	<br/>
	<button class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/c_sembako/display_toko'">Kembali	</button>
	<br/>
	</body>
</center>
<br/>
</html>