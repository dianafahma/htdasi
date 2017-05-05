<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php echo anchor ('akademik_c/index','Home'); 
	  echo '	|	';
	  echo anchor ('akademik_c/prodi','Program Studi');
	  echo '	|	';
	  echo anchor ('akademik_c/mahasiswa','Mahasiswa');
?>
	Mahasiswa
	Ini adalah halaman mahasiswa dari site ini
	
	<?php

$USERNAME = 'SYSTEM';
$PASSWORD = '123mati';
$HOST = 'localhost';
$PORT = '1521';
$SERVICE_NAME = 'XE';

$con = oci_connect('SYSTEM','123mati',"$HOST:$PORT/$SERVICE_NAME"); 

if($con){
	
	echo 'Koneski Oracle sukses';	
	
}

?>
</body>
</html>