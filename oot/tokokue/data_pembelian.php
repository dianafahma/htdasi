<?php
session_start();

//received post from form action f_data_pembelian.php
$tglPembelian = filter_input(INPUT_POST,'tglPembelian',FILTER_SANITIZE_STRING);
$tglPengiriman = filter_input(INPUT_POST,'tglPengiriman',FILTER_SANITIZE_STRING);
$noOrder = filter_input(INPUT_POST,'noOrder',FILTER_SANITIZE_STRING);
$namaPemasok = filter_input(INPUT_POST,'namaPemasok',FILTER_SANITIZE_STRING);
$caraHutang = filter_input(INPUT_POST,'caraHutang',FILTER_SANITIZE_STRING);
$namaBarang = filter_input(INPUT_POST,'namaBarang',FILTER_SANITIZE_STRING);
$jumlahBarang= filter_input(INPUT_POST,'jumlahBarang',FILTER_SANITIZE_INT);
$satuanBarang= filter_input(INPUT_POST,'satuanBarang',FILTER_SANITIZE_STRING);
$hargaBarang= filter_input(INPUT_POST,'hargaBarang',FILTER_SANITIZE_DOUBLE);
$total= filter_input(INPUT_POST,'total',FILTER_SANITIZE_DOUBLE);

echo$tglPembelian;
echo$tglPengiriman;
echo$noOrder ;
echo $caraHutang ;
echo$namaBarang ;
echo$jumlahBarang;
echo$satuanBarang;
echo$hargaBarang;
echo $total;

//build message confirmation data
$message ='<br/>'.'Thank You.'.'<br/>'.$namaPemasok.' Succeeded Added';
//$_SESSION['message']=$message;

echo $message;


?>