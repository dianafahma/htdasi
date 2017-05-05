<html>
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
	</head
<body class="content">
<h2>
	Detail Stok Barang
</h2>
<br/>
	<table class="content">
	<tr>
		<td width="120px">Kode Barang </td>
		<td width="300px"><?php echo $row->kode_barang; ?></td>
	</tr>
	<tr>
		<td>Nama Barang </td>
		<td><?php echo $row->nama_barang; ?></td>
	</tr>
	<tr>
		<td >Harga Barang</td>
		<td><?php echo $row->harga_barang; echo " / "; echo $row->satuan_barang; ?></td>
	</tr>
		<tr>
		<td >Stok Barang</td>
		<td><?php echo $row->stok_barang; echo " ".$row->satuan_barang; ?></td>
	</tr>
		<tr>
		<td >Kode Toko</td>
		<td><?php echo $row->id_toko; ?></td>
	</tr>
		<td >Keterangan</td>
		<td><?php echo $row->ket; ?></td>
		</tr>
	</table>
	<br/>
	</body >
</html>