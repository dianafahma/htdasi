<title>Tambah Reporter</title>
<div align="center">
<h3> Tambah Data </h3>
<?php echo form_open_multipart('c_reporter/insert');?>
<table>
<tr>
	<td> Username </td>
	<td> : </td>
	<td><input type="text" class="form-control" name="username"></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Password </td>
	<td> : </td>
	<td><input class="form-control" name="password" type="password"></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Nama </td>
	<td> : </td>
	<td><input type="text" class="form-control" name="nama"></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Jenis Kelamin </td>
	<td> : </td>
	<td>
	<select type="text" class="form-control" name="jk">
		   <option value="">--- Pilih Jenis Kelamin ---</option>
		   <option value="L">Laki-Laki</option>
		   <option value="P">Perempaun</option>
		</select></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Alamat</td>
	<td> : </td>
	<td><input type="text" class="form-control" name="alamat"></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
		<td>Gambar</td>
		<td>:</td>
		<td><input type="file"  name="gambar"></td>
	</tr>
</table>
<tr>
	<td colspan="3">&nbsp;</td>
</tr> 
<table>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td><?php echo form_submit('submit','TAMBAH AKUN','class="btn btn-success"'); ?></td>
		
<?php echo form_close();?>
	</tr>
</table>
<table>

</table>
</div>