<div align="center">
<h3> UPDATE DATA </h3>
</div>

<?php echo form_open('c_kota/update_data_db/'.$row_data->id_kota.''); ?>
<table align="center">
<tr>
	<td> ID Kota </td>
	<td> : </td>
	<td> <?php echo form_input('id_kota',$row_data->id_kota); ?></td>
</tr>

<tr>
	<td> Nama Kota</td>
	<td> : </td>
	<td> <?php echo form_input('nama_kota',$row_data->nama_kota); ?></td>
</tr>

<tr>
	<td> Jumlah Penduduk </td>
	<td> : </td>
	<td> <?php echo form_input('penduduk',$row_data->penduduk); ?></td>
</tr>

<tr>
	<td><?php echo form_submit('submit','Update','id="submit"'); ?> </td>
</tr>

</table>