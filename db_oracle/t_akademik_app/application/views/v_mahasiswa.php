<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'assets/css/style.css'?>"/>
</head>
<body>
<div>
	<div class="nav">
	<ul>
		<li ><?php echo anchor ('c_akademik/display','Home')?></li>
		<li> <?php echo anchor ('c_akademik/display_prodi','Program Studi')?></li>
		<li><?php echo anchor ('c_akademik/display_mahasiswa','Mahasiswa')?>
		</li>
	</ul>
	</div>

<div class="content">
<h1>Mahasiswa </h1>
	<!--<?php 
		//echo anchor ('c_akademik/insert','<input type="button" value="Tambah-Data"/>'); ?>
		<button onclick="location.href='<?php echo base_url();?>index.php/c_akademik/insert'" >Tambah Data</button>-->
		<?php
		echo ('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
		//echo form_input ('keyword');
		//echo form_submit ('submit','pencarian', 'id="submit"'); ?>
		<!--<button onclick=""><img src="<?php echo base_url().'assets/images/search.png';?>"/>search</button>-->
	<?php	form_close();
	?>
	<table border="1"  align="center">
		<tr bgcolor="#0033ff"height="30px" align="center">
			<td width="20px" >NIM</td>
			<td>Nama Mahasiswa</td>
			<td>Kode</td>
		</tr>
		<?php  
//foreach($list_prodi->result() as $rows ){
		foreach($query->result() as $row ){
		?>
		<tr align="center">
			<td width="70px"><?php echo $row->NIM; ?></td>
			<td width= "350px"><?php echo $row->NAMA; ?></td>
			<td width= "350px"><?php echo $row->KODE_PRODI; ?></td>
		<?php } ?>
<table>
</center>
</div>

</div>
</body>
</html>