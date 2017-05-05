<?php  
echo form_open_multipart('test_c/do_upload');
?>
<h3>Input Data Mahasiswa</h3>
	<label for="nim">Nim  </label>:
	<input type="text" name="nim" placeholde="Masukkan Nim"/><br/>
	<label for="nama">Nama  </label>:
	<input type="text" name="nama" placeholde="Masukkan Nama"/><br/>
	<label for="umur">Umur  </label>:
	<input type="text" name="umur" placeholde="Masukkan Nim"/><br/>
	<label for="foto">Foto  </label>:
	<input type="file" name="userfile" size="20"/><br/>
	<!--<button type="submit">	Kirim</button> -->
	<?php 
	echo form_submit('submit','Kirim Data');
	echo form_close();?>