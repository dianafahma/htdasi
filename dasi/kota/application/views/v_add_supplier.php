<div align="center">
<h3> Tambah Data Supplier</h3>
<?php echo form_open('c_supplier/tambah');?>
<table>
<tr>
	<td> ID Supplier</td>
	<td> : </td>
	<td> <?php echo form_input('id_supplier'); ?> </td>
</tr>
<tr>
	<td> Nama Supplier</td>
	<td> : </td>
	<td> <?php echo form_input('nama_supplier'); ?> </td>
</tr>
<tr>
	<td> Alamat Supplier</td>
	<td> : </td>
	<td> <?php echo form_input('alamat_supplier'); ?> </td>
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