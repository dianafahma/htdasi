<html>
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
	</head>
<body>
		<?php
		echo ('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
		echo form_open ('ct_sembako/cari_barang');
		//echo form_input ('keyword');
		?>
		<td>
		<!--<button class ="tambah" onclick="location.href='<?php echo base_url();?>index.php/c_sembako/search_toko'"><img src="<?php echo base_url().'assets/images/search.png';?>"/>Search</button></td>-->
<h2>
	Daftar Barang Sembako
</h2>
<br/>
<table class="table table-striped table-hover " style="max-width:1100px;">
	<thead>
	 <tr class="warning">
		<th width="20px">No </th>
		<th width="130px">Kode Barang </th>
		<th width="200px">Nama Barang</th>
		<th width="100px">Harga(Rp.)</th>
		<th width="80px">Satuan</th>
		<th width="100px">Stok</th>
		<th width="120px">Kode Toko</th>
		<th width="300px">Keterangan</th>
		<th width="200px">Opsi <input type="text" style="max-width:120px;padding-left:5px;"name="keyword" placeholder="Search  Barang"/></th>
	</tr>
	</thead>
	<?php $i=1;
	foreach ($list_barang as $row)
	 { ?>
	<tr class="well">
		<td><?php echo $i++ ?></td>
		<td><?php echo $row['kode_barang']?></td>
		<td><?php echo $row['nama_barang']?></td>
		<td><?php echo $row['harga_barang']?></td>
		<td>  / <?php echo $row['satuan_barang']?></td>
		<td><?php echo $row['stok_barang']?></td>
		<td><?php echo $row['id_toko']?></td>
		<td><?php echo $row['ket']?></td>
		<td><?php echo anchor ('ct_sembako/tampil_detail_barang','Detail',' class="label label-info"'); ?> 
		</td>
	</tr>
<?php  
} ?>
	</table>
	<br/>
	<?php  
form_close();?>
	<br/>
	<?php echo $this->pagination->create_links();?>
<br/>
</body >
</html>