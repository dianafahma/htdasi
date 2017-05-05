<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'aset/theme/bootstrap.css'?>"/>
</head>
<body>
<?php
echo form_open('c_negara/search');
?>
<!--<p style="float:right;"> <?php// echo anchor ('c_negara/tambah','Input Data Baru','class="btn btn-info"');?>
</p>-->
<div style="max-width:250px; max-height:30px float:rig">
<Input style="float:clear;"class="form-control" id="inputWarning" type="text" name="keyword" placeholder="Pencarian"/><?php echo form_submit('c_negara/search','submit','class="btn btn-warning btn-sm"')?>
</div>
	<center>
	<h3>Tabel Negara Terdaftar Berkwalitas Baik</h3> 
	<table class="table table-striped table-hover" style="max-width:600px;">
		<tr  class="info">
			<td width="20px"><B>No</b></td>
			<td width="100px"><B>Id Negara</b></td>
			<td ><b>Nama Negara</b></td>
			<td><b>Jumlah Penduduk</b></td>
			<td width="120px"><B>Pilihan</b></td>
		</tr>
			<?php
			echo form_open('c_negara/view/');
			$i=0;
			foreach ($list_negara as $row) {
				?>
		<tr class="">
		<td ><?php $i++;
				echo $i;?></td>
			<td ><?php echo $row['id_negara'];?></td>
			<td><?php echo $row['nama_negara'];?></td>
			<td><?php echo $row['jml_penduduk'];?></td>	
			<td>
			<?php echo anchor ('c_negara/detail','Tampilkan Detail','class="btn btn-info btn-sm" style="text-decoration:none;"')?>
			</td>	
			<?php
			} 

			?>
		</tr>
	</table>
<center>
</body>
</html>