<html>
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/css/style.css'?>"/>
	</head>

<body>

<h2>
	Daftar Barang Sembako
</h2>


<!--
<table><tr><td><?php echo form_open('c_tsembako/cari_barang/'); 
echo form_input ('keyword'); 
echo form_submit('submit','Cari', 'id="submit'); 
echo form_close(); ?>
</td></tr></table>
<br/>

	<table border="">
	<tr>
		<th width="120px">Kode Barang </th>
		<th width="240px">Nama Barang</th>
		<th width="100px">Harga(Rp.)</th>
		<th width="80px">Satuan</th>
		<th width="100px">Stok</th>
		<th width="100px">Kode Toko</th>
		<th width="300px">Keterangan</th>
		<th width="250px">Opsi</th>
	<tr><?php foreach ($list_barangx as $row)
	

	 { ?>


	<tr>
		<td><?php echo $row['kode_barang']?></td>
		<td><?php echo $row['nama_barang']?></td>
		<td><?php echo $row['harga_barang']?></td>
		<td>  / <?php echo $row['satuan_barang']?></td>
		<td><?php echo $row['stok_barang']?></td>
		<td><?php echo $row['id_toko']?></td>
		<td><?php echo $row['ket']?></td>
		
	<tr>
<?php  } ?>
	</table>
	<?php echo $this->pagination->create_links();?>
	<br/>
	<?php  echo anchor ('c_tsembako/tambah_barang','Tambah Data');
form_close();?>-->
<br/>
</body class="content">
</html>