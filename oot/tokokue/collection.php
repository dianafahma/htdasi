<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
</head>
<body >
	<div class="headBan">
		<img id="logo" src="tktools/img/logo.png" alt="jangan asal internetan" height="130px" width="145px">
		<div id="nama">
			Cake Boy <br/>Collection's
		</div>
	</div>
	<div class="atas">Atas</div>
	<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="collection.php">Collections</a></li>
			<li><a href="#">Special Order</a></li>
			<li><a href="#">Find US</a></li>
			<!--<li><a href="">Home</a></li>
			<li><a href="">Home</a></li>-->

			<input id="search" type="text" name="ds" value="ds"/>
		</ul>
	</nav>
	<div class="content">
	<div class="galeri">
		<h6 >
			Collections >> List>>
		</h6>
		<br/>
		<h5>
			Collection Cake Boy
		</h5>
		<p style="font-size:12px;">
		Get your favorite collection for boys with high quality in below:
		</p>
	</div>

	<?php $i=0;
	for ($i=0;$i<100;$i++){
	?>
		<div class="koleksi">
			<center>
			<img src="" width="200px" height="200px" />
			<br/>
			mdmdm
			</center>
		</div>
	<?php		
	}
	?>
	</div>
	<footer class="atas">  &copy;Copyright 2015 | KUE BAHAGIA </footer>
</body>
</html>