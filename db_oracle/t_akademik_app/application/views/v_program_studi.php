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
<h1>Program Studi</h1>
<br/>
	<!--<?php 
		//echo anchor ('c_akademik/insert','<input type="button" value="Tambah-Data"/>'); ?>-->
		<button onclick="location.href='<?php echo base_url();?>index.php/c_akademik/insert'" >Tambah Data</button>
		<?php
		echo ('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
		echo form_open ('c_akademik/search');
		echo form_input ('keyword');
		//echo form_submit('submit','Cari','id="submit"');
		?>
		<!--<input type="text" name="keyword" id="keyword" value="<?php if(isset($_POST['keyword'])) echo $_POST['keyword'] ?>" height="50px"></td>
		<td><button><img src="<?php echo base_url().'assets/images/search.png'; ?>"><font face="monospace" color="black" size="4px">Search</font></button>
		</td> 
		<button onclick="" type="button" id="submit"><img src="<?php echo base_url().'assets/images/search.png';?>"/>search</button>-->
		
				<td>
		<button class ="tambah" onclick="location.href='<?php echo base_url();?>index.php/c_akademik/search'"><img src="<?php echo base_url().'assets/images/search.png';?>"/>Search</button></td>
		
		
		
	<?php	form_close();
	?>
	<br/>
	<br/>

	<table border="1"  align="center">
		<tr bgcolor="#0033ff"height="30px" align="center">
			<td width="20px" >Kode</td>
			<td>Nama Program Studi</td>
			<td>Aksi</td>
		</tr>
		<?php 
		foreach($list_prodi->result() as $rows ){
		?>
		<tr align="center">
		
			<td width="70px"><?php echo $rows->KODE_PRODI; ?></td>
			<td width= "350px"><?php echo $rows->NAMA_PRODI; ?></td>
			<td width="70px"> <a href="<?php echo base_url('index.php/C_akademik/view_edit/'.$rows->KODE_PRODI,''); ?>"> <img src="<?php echo base_url().'assets/images/edit.png';?>"/></a>
			&nbsp;&nbsp;
			<a href="<?php echo base_url('index.php/C_akademik/delete/'.$rows->KODE_PRODI,''); ?>"> <img src="<?php echo base_url().'assets/images/delete.png';?>"/></a></td>
		</tr>
		<?php } ?>
<table>
</center>
</div>

</div>
</body>
</html>