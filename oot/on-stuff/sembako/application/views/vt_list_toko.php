<html>
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
	</head
<body class="content">
		<?php
		echo ('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
		echo form_open ('ct_sembako/cari_toko');
		
		?>
		<td>
		<!--<button class ="tambah" onclick="location.href='<?php echo base_url();?>index.php/c_sembako/search_toko'"><img src="<?php echo base_url().'assets/images/search.png';?>"/>Search</button></td>-->
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
		<th width="200px">Aksi  <input type="text" style="max-width:150px;padding-left:5px;"name="keyword" placeholder="Search  Toko"/></th>
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
		<td><?php echo anchor ('ct_sembako/tampil_detail_toko/'.$rows['id_toko'] ,'Detail',' class="label label-info"'); ?>
		</td>
	</tr>
<?php } ?>
	</table>
	<br/>
	<?php
form_close();?>
<br/><p class="pagination">
<?php  echo $this->pagination->create_links();?> </p>
</br/>
</body >
</html>