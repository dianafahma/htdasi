<?php
//kkode barang

$i=1;

$kode[1]="B01";
$kode[2]="B02";
$kode[3]="B03";
$kode[4]="B04";
//nama barang
$nama[1]="Pensil";
$nama[2]="Buku";
$nama[3]="Pena";
$nama[4]="Spidol";

//menampilkan ke database
$n=4;
$i=1;
while ($i<= 4) {
	echo $kode[$i].$nama[$i].'<br/>';
	$i=$i+1;
}
?>
