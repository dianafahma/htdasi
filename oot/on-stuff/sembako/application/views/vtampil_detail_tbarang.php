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
	<tr  class="text-warning" >
		<td width="120px">Kode Barang </td>
		<td class="btn-warning" style="height:30px;padding-left:10px;" width="300px"><?php echo $row->kode_barang; ?></td>
	</tr>
	<tr class="text-warning" >
		<td >Nama Barang </td>
		<td class="btn-warning" style="height:30px;padding-left:10px;"><?php echo $row->nama_barang; ?></td>
	</tr>
	<tr  class="text-warning" >
		<td >Harga Barang</td>
		<td class="btn-warning" style="height:30px;padding-left:10px;"><?php echo $row->harga_barang; echo " / "; echo $row->satuan_barang; ?></td>
	</tr>
		<tr  class="text-warning" >
		<td >Stok Barang</td>
		<td class="btn-warning" style="height:30px;padding-left:10px;"><?php echo $row->stok_barang; echo " ".$row->satuan_barang; ?></td>
	</tr>
		<tr  class="text-warning" >
		<td >Kode Toko</td>
		<td class="btn-warning" style="height:30px;padding-left:10px;"><?php echo $row->id_toko; ?></td>
	</tr >
	<tr  class="text-warning" >
		<td >Keterangan</td>
		<td class="btn-warning" style="height:30px;padding-left:10px;"><?php echo $row->ket; ?></td>
		</tr>
	</table>
	<br/>
		<button class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/ct_sembako/display_tbarang'">Kembali	</button>
	<br/>
	</body >
</html>