<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo form_open('c_nilai/display');
?>
<!--<p style="float:right;"> <?php// echo anchor ('c_negara/tambah','Input Data Baru','class="btn btn-info"');?>
</p>-->
<div style="max-width:250px; max-height:30px float:rig">
<Input style="float:clear;"class="form-control" id="inputWarning" type="text" name="keyword" placeholder="Pencarian"/><?php echo form_submit('c_negara/search','submit','class="btn btn-warning btn-sm"')?>
</div>
	<center>
	<h3>Tabel Nilai Mahasiswa</h3> 
	<table class="table table-striped table-hover" style="max-width:600px;">
		<tr  class="info">
			<td width="20px"><B>No</b></td>
			<td width="100px"><B>NIM</b></td>
			<td ><b>Kode Mata Kuliah</b></td>
			<td><b>Index Nilai</b></td>
			<td width="120px"><B>Pilihan</b></td>
		</tr>
			<?php
			echo form_open('c_nilai/display/');
			$i=0;
			foreach ($list_nilai as $row) {
				?>
		<tr class="">
		<td ><?php $i++;
				echo $i;?></td>
			<td ><?php echo $row['nim'];?></td>
			<td><?php echo $row['kdmk'];?></td>
			<td><?php echo $row['index'];?></td>	
			<td>mm
			</td>	
			<?php
			} 

			?>
		</tr>
	</table>
<center>
</body>
</html>