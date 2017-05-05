<!DOCTPE html>
<html>
<head>
	<title>Input Mahasiswa</title>
</head>
<body>
<?php  //echo form_open('test_c/input_mahasiswa');
echo form_open('test_c/edit_mahasiswa/'.$gnim);
echo form_open_multipart('test_c/edit_upload');
?>
<h3>Edit GAmbar</h3>
	<label for="foto">Foto : </label>
	<input type="file" name="userfile" size="20"/><br/>
	<!--<button type="submit">	Kirim</button> -->
	<?php 
	echo form_submit('submit','upload');
	echo form_close();?>
</body>
</html>