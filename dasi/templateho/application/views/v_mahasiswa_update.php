<div align="center">
<h3>Update Data</h3>

<?php
echo form_open('c_mahasiswa_dis/update_data_db/'.$row_data->nim.'');
?>

<table >
<tr>
	<td>NIM</td>

	<td>:</td>
	<td><?php echo form_input('nim',$row_data->nim); ?></td>
</tr>
	<td>NAMA</td>
	<td>:</td>
	<td><?php echo form_input('nama',$row_data->nama); ?></td>
</tr>
	<td>UMUR</td>
	<td>:</td>
	<td><?php echo form_input('umur',$row_data->umur); ?></td>
</tr>
</table>
<table>
<tr>
	<td></td>
	<td><?php echo form_submit('submit','update','id="submit"'); ?> </td>
<?php
echo form_close();
?>
</tr>

</table>

</div>