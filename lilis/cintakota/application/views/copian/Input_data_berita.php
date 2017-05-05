<html>
  <head>
  <title>Entry Mahasiswa</title>
  <meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1">
  </head>
  <body>
  <form action="simpan-data-berita.php"  method="post" enctype="multipart/form-data"  name="FMHS">
  <table  width="452" border="0" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#669900">
  <tr>
  <td  height="40" align="center"  bgcolor="#669900"><strong><font  color="#FFFFFF">ENTRY DATA</font></strong></td>
  </tr>
  <tr>
  <td  bgcolor="#FFFFFF"><table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
  <tr><td  width="113">ID</td><td width="11">:</td>
  <td  width="237"><input name="kategori" type="text"  id="kategori" size="12" maxlength="12"></td>
  </tr>
  <tr><td>Kategori</td><td>:</td>
  <td><input  name="kgr_judul" type="text" id="kgr_judul"  size="30" maxlength="30"></td>
  </tr>
  <tr><td>Judul</td><td>:</td>
  <td><input  name="judul" type="text" id="judul"  size="30" maxlength="30"></td>
  </tr>
  <tr>
  <td>Isi</td>
  <td>:</td>
  <td><textarea name="isi" cols="30"  rows="5" id="isi"></textarea></td>
  </tr>
  <tr><td>Photo</td><td>:</td>
  <td><input  type="file" name="gambar"  id="photo"></td>
  </tr>
  <tr><td  colspan="3" align="center"><input  name="fok" type="submit" id="fok"  value="OK">
  <input  name="fulang" type="reset" id="fulang"  value="Bersihkan">
  <input name="fulang2"  type="button" id="fulang2" value="Batal"  onClick="javascript:history.back()"></td>
  </tr>
  </table></td>
  </tr>
  </table>
  </form>
  <div  align="center"><a href="index.php">Menu  Utama</a></div>
  </body>
</html>