<html>
<body>
<div align="center">
<?php
echo form_open_multipart('c_nilai/do_upload');
?>
<table>
Input Data Mahasiswa
<tr>
	<td>Nim Mahasiswa</td>
	<td>:</td>
	<td><input type="text" name="nim" /></td>
</tr>
<tr>
	<td>File foto</td>
	<td></td>
	<td><input type="file" name="filefoto" size="20" /></td>
</tr>

<tr>
	<td><input type="submit" value="upload" /></td>
</tr>
</table>
</form><!--
<h2>DAFTAR Mahasiswa</h2>
<table border="1">
	<tr bgcolor="#0033ff">
		<td> Nim</td>
		<td> Nama </td>
		<td> Nama File</td>
		<td> File Foto</td>
		<td> Umur</td>
	</tr>
	<?php 
	foreach($list_mhsw->result()as $row){
	?>
	<tr>
		<td><?php echo $row->judul;?> </td>
		<td><a href="<?php echo base_url();?>uploads/<?php echo $row->file;?>">
		<?php echo $row->file?></a></td>
		<td>
		<img src="<?php echo base_url(); echo $row->filegambar; ?>" height=150px; width=200px; >
		</td>
		<td><?php echo $row->tanggal;?> </td>
	</tr>
	<?php } ?>-->
</table>
</div>
</body>
</html>