<?php
session_start();

//received post from form action f_data_penjualan.php
$tglPenjualan = filter_input(INPUT_POST,'tglPenjualan',FILTER_SANITIZE_STRING);
$tglKirim = filter_input(INPUT_POST,'tglKirim',FILTER_SANITIZE_STRING);
$namaPembeli= filter_input(INPUT_POST,'namaPembeli',FILTER_SANITIZE_STRING);
$alamatPembeli = filter_input(INPUT_POST,'alamatPembeli',FILTER_SANITIZE_STRING);
$noJual = filter_input(INPUT_POST,'noJual',FILTER_SANITIZE_STRING);
$caraPiutang = filter_input(INPUT_POST,'caraPiutang',FILTER_SANITIZE_STRING);
$namaBarang = filter_input(INPUT_POST,'namaBarang',FILTER_SANITIZE_STRING);
$jumlahBarang= filter_input(INPUT_POST,'jumlahBarang',FILTER_SANITIZE_INT);
$satuanBarang= filter_input(INPUT_POST,'satuanBarang',FILTER_SANITIZE_STRING);
$hargaJual= filter_input(INPUT_POST,'hargaJual',FILTER_SANITIZE_DOUBLE);
$total= filter_input(INPUT_POST,'total',FILTER_SANITIZE_DOUBLE);

echo$tglPenjualan ;
echo$tglKirim;
echo $namaPembeli;
echo $alamatPembeli;
echo$noJual ;
echo $caraPiutang ;
echo$namaBarang ;
echo$jumlahBarang;
echo$satuanBarang;
echo$hargaJual;
echo $total;

//build message confirmation data
$message ='<br/>'.'Thank You Sales No'.'<br/>'.$noJual.' Succeeded Added';
//$_SESSION['message']=$message;

echo $message;


?>