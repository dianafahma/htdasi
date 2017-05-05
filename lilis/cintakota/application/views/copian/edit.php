 <?php
include ('koneksi.php');
$edit=mysql_query("select *from foto where id='$_GET[id]'");
$e=mysql_fetch_array($edit);
echo "<table border=1>
<form method=post action=update.php enctype=multipart/form-data>
<input type=hidden name=id value=$e[id]>
<tr><td>Nama Foto</td><td><input type=text name=nama value='$e[nama_foto]' </td></tr>
<tr><td>Keterangan </td><td><textarea name=keterangan>$e[keterangan] </textarea></tr></td>
<tr><td>Gambar </td><td><img src=’foto/$e[gambar]‘ width=50 height=50 > </td></tr>
<tr><td>Gambar </td><td><input type=file name=gambar>*kosongkan jika gambar tidak di ubah </td></tr>
</table>
<input type=submit value=update >
</form> ";
?>