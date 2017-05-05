 <?php
include ('koneksi.php');
$filename=$_FILES['gambar']['name'];
$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'foto/'.$filename);
$simpan=mysql_query("insert into foto(nama_foto,keterangan,gambar) values('$_POST[nama]','$_POST[keterangan]','$filename')") or die ("gagal simpan");
echo "<script>alert ('data telah di simpan '); document.location='tampil_foto.php' </script> ";
?>