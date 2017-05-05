<html>
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/css/style.css'?>"/>
	</head
<body class="content">


<h2>
	Daftar Toko Pemasok
</h2>
<br/>
	<table border="">
	<tr>
		<th width="100px">Kode Toko </th>
		<th width="240px">Nama Toko </th>
		<th width="500px">Alamat Toko</th>
		<th width="100px">Aksi</th>
	<tr><?php foreach ($list_toko as $rows) { ?>
	<tr>
		<td><?php 		echo $rows['id_toko'] ?></td>
		<td><?php echo $rows['nama_toko'] ?></td>
		<td><?php echo $rows['alamat'] ?></td>
		<td><?php echo anchor ('c_sembako/tampil_detail_toko/'.$rows['id_toko'] ,'Detail'); ?> | 
		<?php echo anchor ('c_sembako/hapus_toko/'.$rows['id_toko'] ,'Hapus')?>
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