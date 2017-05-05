 <table border="2" bordercolorlight="#33FF66">
<form method="post" action="simpan_foto.php" enctype="multipart/form-data">
<tr><td>nama foto </td><td> <input type="text" name="nama" /></td></tr>
<tr><td valign="top">keterangan </td><td><textarea name="keterangan"> </textarea></td></tr>
<tr><td>masukan gambar </td><td><input type="file" name="gambar" /> </td></tr>
<tr><td colspan="2"><input type="submit" value="simpan gambar " /></td></tr>
</form>
</table>
Langkah 3
Hapus.php //berfungsi untuk menghapus foto
<?php
include ('koneksi.php');
$hapus=mysql_query("delete from foto where id='$_GET[id]' ") or die ("gagal hapus");
echo "<script>alert('data telah di hapus');document.location='tampil_foto.php' </script> ";
?>
