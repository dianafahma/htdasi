<div align="center">
<h3> UPDATE DATA </h3>
</div>

<?php echo form_open('c_mahasiswa/update_data_db/'.$row_data->nim.''); ?>
<table align="center">
<tr>
	<td> Nim </td>
	<td> : </td>
	<td> <?php echo form_input('nim',$row_data->nim); ?></td>
</tr>

<tr>
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input('nama',$row_data->nama); ?></td>
</tr>

<tr>
	<td> Alamat </td>
	<td> : </td>
	<td> <?php echo form_input('alamat',$row_data->alamat); ?></td>
</tr>

<tr>
	<td> Jurusan </td>
	<td> : </td>
	<td> <?php echo form_input('jurusan',$row_data->jurusan); ?></td>
</tr>

<tr>
	<td> Angkatan </td>
	<td> : </td>
	<td> <?php echo form_input('angkatan',$row_data->angkatan); ?></td>
</tr>

<tr>
	<td><?php echo form_submit('submit','Update','id="submit"'); ?> </td>
</tr>

</table>