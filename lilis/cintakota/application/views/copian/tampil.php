 <?php
include('koneksi.php');
echo "<center><table border=1>
<tr><td>NAMA FOTO </td><td>KETERANGAN </td><td>GAMBAR </td><td>AKSI </td></tr> ";
$lihat=mysql_query("select *from foto ");
while($data=mysql_fetch_array($lihat))
{
echo "<tr><td>$data[nama_foto]</td>
          <td width=200>$data[keterangan] </td>
                                  <td><img src=’foto/$data[gambar]’ width=70 height=50 ></td>
                                  <td><a href='hapus.php?id=$data[id]'>hapus</a> | <a href='edit.php?id=$data[id]'>edit </a> </td></tr> ";
}
echo "</table>
<a href=upload_foto.php>Input Foto Lagi </a>
</center>";
?>