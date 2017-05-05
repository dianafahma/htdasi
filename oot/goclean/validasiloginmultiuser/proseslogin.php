<?php 
if (isset ($_POST['username'])&& isset ($_POST['password'])&&isset ($_POST['level']))
$username="admin";
$password="1234";
$level=2;
header ('location:admin/index.php');

if (isset ($_POST['username'])&& isset ($_POST['password'])&&isset ($_POST['level']))
$username="anggota01";
$password="a1234";
$level=2;
header ('location:anggota/index.php');

if (isset ($_POST['username'])&& isset ($_POST['password'])&&isset ($_POST['level']))
$username="";
$password="";
$level="";
 header ('location:umum/index.php');
?>