<?php
  include "database.php";
  $kategori=$_POST['kategori'];
  $kgr_judul=$_POST['kgr_judul'];
  $judul=$_POST['judul'];
  $isi=$_POST['isi'];
  $gambar=$_POST['gambar'];
  //masing-masing variabel yang diawali dengan $_POST harus sesuai dengan  nama yang dibuat dalam form
  if (empty($kategori))
  {             
     <span class="nk7j21l8kur" id="nk7j21l8kur_4" style="height: 12px;">die</span>("Isikan  Kategori!"); //Berhenti dan munculkan pesan jika nim tidak diisi
  }
  elseif(empty($judul))
  {
     die("Isikan  Judul!"); //Berhenti dan munculkan pesan jika nama tidak diisi
     //anda bisa  tambahkan struktur if yang lain jika ada data yang perlu dicek
  }
  elseif(empty($isi))
  {
     die("Isikan  Berita!"); //Berhenti dan munculkan pesan jika nama tidak diisi
     //anda bisa  tambahkan struktur if yang lain jika ada data yang perlu dicek
  }
  else
  {
     $cekdata="select judul from tb_mahasiswa where judul='$judul'";
     $ada=mysql_query($cekdata)  or die(mysql_<span class="nk7j21l8kur" id="nk7j21l8kur_3" style="height: 12px;">error</span>());
     if(mysql_num_rows($ada)>0)
     { die("Judul  telah Terdaftar!"); }
     else  {
  if (!empty($_FILES["photo"]["tmp_name"]))
  {
    $namafolder="img/";  //tempat menyimpan file
    $jenis_gambar=$_FILES['photo']['type'];
    if($jenis_gambar=="image/jpeg"  || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif"  || $jenis_gambar=="image/png")
    {          
  $gambar  = $namafolder . basename($_FILES['photo']['name']);      
  if  (!move_uploaded_file($_FILES['photo']['tmp_name'], $gambar))
  { die("Gambar gagal dikirim"); }
    } else  { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
  }  //end if cek file upload
  mysql_query("insert  into berita(kgr_judul,judul,isi,gambar)  " .
  "values('$kgr_judul','$judul','$isi','$gambar')")  or die(mysql_error());
  echo  "Berhasil";
  header("location:laporan-data-beritra.php");
     } //end if  terdaftar
}    
?>
- See more at: http://www.zainalhakim.web.id/posting/membuat-aplikasi-data-mahasiswa-2.html#sthash.3lQvm3aq.dpuf