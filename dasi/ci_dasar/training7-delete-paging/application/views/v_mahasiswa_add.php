<div align="center">
<h3>Tambah Data</h3>
<?php
echo form_open('c_mahasiswa/tambah');
?>

<table >
<tr>
	<td>NIM</td>
	<td>:</td>
	<td><?php echo form_input('nim'); ?></td>
</tr>
	<td>NAMA</td>
	<td>:</td>
	<td><?php echo form_input('nama'); ?></td>
</tr>
	<td>UMUR</td>
	<td>:</td>
	<td><?php echo form_input('umur'); ?></td>
</tr>
</table>
<table>
<tr>
	<td></td>
	<td><?php echo form_submit('submit','simpan','id="submit"'); ?> </td>
<?php
echo form_close();
?>
</tr>

</table>

</div>