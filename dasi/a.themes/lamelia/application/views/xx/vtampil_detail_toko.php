<html>
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/css/style.css'?>"/>
	</head
<body>

<center>
<h2>
	Detail Toko Pemasok
</h2>
<br/>


	<table border="">
	<tr>
		<td width="100px">Kode Toko </td>
		<td><?php echo $vid;
		 $row->id_toko; ?></td>
	</tr>
	<tr>
		<td width="240px">Nama Toko </td>
		<td><?php echo $row->nama_toko; ?></td>
	</tr>
	<tr>
		<td width="500px">Alamat Toko</td>
		<td><?php echo $row->alamat; ?></td>
	</tr>
		<td width="100px">Aksi</td>
	<tr>
		<td>
		</td>
	<tr>
	</table>
	<br/>
	</body class="content">
</center>
</html>