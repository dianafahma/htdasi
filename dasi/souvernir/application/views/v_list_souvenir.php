<html>
	<head>
	<title>
	</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
	</head>
<body class="content">

<?php echo anchor('c_souvenir/display_admin','Admin')?>

<table class="table table-striped table-hover " style="max-width:950px;">
<?php echo form_open('c_souvenir/cari_souvenir/'); 
echo form_open('c_souvenir/display_souvenir/'); 
echo form_input ('keyword'); 
echo form_submit('submit','Cari', 'id="submit'); 
echo form_close(); ?>

<h2>
	Daftar Souvenir
</h2>
<br/>
<table class="table table-striped table-hover " style="max-width:950px;">
<thead>
	<tr class="warning">
	<th width="20px">No</th>
		<th width="100px">Kode Souvenir </th>
		<th width="200px">Nama Souvenir</th>
		<th width="200px">Stok</th>
		<th width="200px">Harga (Rp. )</th>
		<th width="200px">Opsi</th>
		<th width="200px">Status</th>
		<th width="200px">Validasi</th>
	</tr>
</thead>
	<?php 
	$i=1;
	foreach ($list_souvenir as $rows) { ?>
	<tr class="active">
		<td><?php echo $i++ ?></td>
		<td><?php echo $rows['kode_souvenir'] ?></td>
		<td><?php echo $rows['nama_souvenir'] ?></td>
		<td><?php echo $rows['stok_souvenir'] ?></td>
		<td>Rp. <?php echo $rows['harga_souvenir'] ?></td>
		<td><?php echo anchor ('c_souvenir/view_edit_souvenir/'.$rows['kode_souvenir'],'Update',' class="label label-info"')?> 
		</td>
		<td><?php echo $rows['valid'] ?></td>
		<td><?php  echo anchor ('c_souvenir/valid_souvenir/'.$rows['kode_souvenir'],'Validasi','class="label label-info"');?></td>
	</tr>
<?php } ?>
	</table>
	<br/>
	<?php  echo anchor ('c_souvenir/tambah','Tambah Data','class="btn btn-primary"');
form_close();?>
<br/>
<?php echo $this->pagination->create_links();?>

</body >
</html>