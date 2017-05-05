<html>
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
	</head>

<body>
<h2>
	Daftar Barang Sembako
</h2>
<table class="table table-striped table-hover ">
<tr><td>
<?php echo form_open('c_sembako/cari_barang/'); 
echo form_input ('keyword'); 
echo form_submit('submit','Cari', 'id="submit'); 
echo form_submit('submit','simpan', 'id="simpan'); 
echo form_close(); ?>

<br/>
	<table class="alert alert-dismissable alert-danger">
	 <tr class="danger" style="">
		<th width="20px">No</th>
		<th width="120px">Kode Barang </th>
		<th width="240px">Nama Barang</th>
		<th width="100px">Harga(Rp.)</th>
		<th width="80px">Satuan</th>
		<th width="100px">Stok</th>
		<th width="100px">Kode Toko</th>
		<th width="300px">Keterangan</th>
		<th width="250px">Opsi</th>
	<tr><?php $i=1;
	foreach ($list_barang as $row)
	 { ?>
	<tr>
	<td><?php echo $i++ ?></td>
		<td><?php echo $row['kode_barang']?></td>
		<td><?php echo $row['nama_barang']?></td>
		<td><?php echo $row['harga_barang']?></td>
		<td>  / <?php echo $row['satuan_barang']?></td>
		<td><?php echo $row['stok_barang']?></td>
		<td><?php echo $row['id_toko']?></td>
		<td><?php echo $row['ket']?></td>
			<td><?php echo anchor ('c_sembako/tampil_detail_barang','Detail',' class="label label-info"'); ?> | 
		<?php echo anchor ('c_sembako/view_edit_barang/'.$row['kode_barang'],'Ubah',' class="label label-info"')?> | 
		<?php echo anchor ('c_sembako/hapus_barang/'.$row['kode_barang'],'Hapus',' class="label label-info"')?>
		</td>
	<tr>
<?php  
} ?>

</td></tr></table>
	</table>
	<?php  echo anchor ('c_sembako/tambah_barang','Tambah Data','class="btn btn-primary"');
form_close();?>
	<br/>
	<?php echo $this->pagination->create_links();?>
<br/>
</body >
</html>