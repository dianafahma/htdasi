<div align="center">
<h3> Tambah Data </h3>
<?php echo form_open('c_kota/tambah');?>
<table>
<tr>
	<td> ID Kota </td>
	<td> : </td>
	<td> <?php echo form_input('kode_barang'); ?> </td>
</tr>
<tr>
	<td> Nama Kota </td>
	<td> : </td>
	<td> <?php echo form_input('nama_barang'); ?> </td>
</tr>
<tr>
	<td> Jumlah Penduduk </td>
	<td> : </td>
	<td> <?php echo form_input('harga_barang'); ?> </td>
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