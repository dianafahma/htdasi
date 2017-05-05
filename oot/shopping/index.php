<?php require_once("keranjang.php");
require_once("koneksi.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="gaya.css"/>
</head>
<body>
	<div id="kontainer">
		<div id="kepala">
			
		</div>
		<div id="menu">
			
		</div>
		
		<div id="samping">
			<?php keranjang(); 

			?>

		</div>
		
		<div id="isi">
			<?php //produk(); ?>
		</div>
		
		<footer>
			Copyright &copy; 2015 LilisTrial
		</footer>
		
	</div><!--End div Kontainer-->
</body>
</html>
