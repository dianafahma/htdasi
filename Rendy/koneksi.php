<?php  
	//koneksi mysql
	$address = 'localhost';
	$username = 'root';
	$passwrd = '';
	$koneksi = @mysql_connect($address,$username,$passwrd);
	if (!$koneksi) {
		echo "koneksi gagal ";
		exit();
	}else{
		echo "koneksi sukses ";
		$conn_var = 'db_rendy';
		if (!@mysql_select_db($conn_var)) {
			echo "database tidak ditemukan ";
		} else {
			echo "database ditemukan ";
		}
		
	}
?>