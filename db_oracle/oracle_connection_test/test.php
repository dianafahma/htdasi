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
echo 'gagal';

?>