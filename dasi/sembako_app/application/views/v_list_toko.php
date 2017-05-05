<html>
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
	</head
<body class="content">
<h2>
	Daftar Toko Pemasok
</h2>
<br/>
<table class="table table-striped table-hover " style="max-width:950px;">
<thead>
	<tr class="warning">
	<th width="20px">No</th>
		<th width="100px">Kode Toko </th>
		<th width="200px">Nama Toko </th>
		<th width="400px">Alamat Toko</th>
		<th width="200px">Aksi</th>
	</tr>
</thead>
	<?php 
	$i=1;
	foreach ($list_toko as $rows) { ?>
	<tr class="active">
		<td><?php echo $i++ ?></td>
		<td><?php echo $rows['id_toko'] ?></td>
		<td><?php echo $rows['nama_toko'] ?></td>
		<td><?php echo $rows['alamat'] ?></td>
		<td><?php echo anchor ('c_sembako/tampil_detail_toko/'.$rows['id_toko'] ,'Detail',' class="label label-info"'); ?> | 
		<?php echo anchor ('c_sembako/view_edit_toko/'.$rows['id_toko'],'Ganti',' class="label label-info"')?> | 
		<?php echo anchor ('c_sembako/hapus_toko/'.$rows['id_toko'] ,'Hapus',' class="label label-info"')?>
		</td>
	</tr>
<?php } ?>
	</table>
	<br/>
	<?php  echo anchor ('c_sembako/tambah_toko','Tambah Data');
form_close();?>
<br/>
<?php echo $this->pagination->create_links();?>
</body >
</html>