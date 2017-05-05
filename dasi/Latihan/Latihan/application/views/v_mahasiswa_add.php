<div align="center">
<h3> Tambah Data </h3>
<?php echo form_open('c_mahasiswa/tambah');?>
<table>
<tr>
	<td> Nim </td>
	<td> : </td>
	<td> <?php echo form_input('nim'); ?> </td>
</tr>
<tr>
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input('nama'); ?> </td>
</tr>
<tr>
	<td> Alamat </td>
	<td> : </td>
	<td> <?php echo form_input('alamat'); ?> </td>
</tr>
<tr>
	<td> Jurusan </td>
	<td> : </td>
	<td> <?php echo form_input('jurusan'); ?> </td>
</tr>
<tr>
	<td> Angkatan</td>
	<td> : </td>
	<td> <?php echo form_input('angkatan'); ?> </td>
</tr>
</table>
<table>
<tr>
	<td></td>
	<td> <?php echo form_submit('submit','simpan', 'id="submit"'); ?> </td>
<?php echo form_close();?>
</tr>
</table>
</div>