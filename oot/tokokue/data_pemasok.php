<?php
session_start();

//received post from form action f_data_pemasok.php
$kodePemasok = filter_input(INPUT_POST,'kodePemasok',FILTER_SANITIZE_STRING);
$namaPemasok = filter_input(INPUT_POST,'namaPemasok',FILTER_SANITIZE_STRING);
$alamatPemasok = filter_input(INPUT_POST,'alamatPemasok',FILTER_SANITIZE_STRING);
$alamatGudang = filter_input(INPUT_POST,'alamatGudang',FILTER_SANITIZE_STRING);
$kontakPemasok = filter_input(INPUT_POST,'kontakPemasok',FILTER_SANITIZE_STRING);
$caraHutang = filter_input(INPUT_POST,'caraHutang',FILTER_SANITIZE_STRING);
/* please delete the comment once you want display the information instead the message

echo $kodePemasok;
echo $namaPemasok;
echo $alamatPemasok;
echo $alamatGudang;
echo $kontakPemasok;
echo $caraHutang;
*/
//build message confirmation data
$message ='<br/>'.'Thank You.'.'<br/>'.$namaPemasok.' Succeeded Added';
//$_SESSION['message']=$message;

echo $message;


?>