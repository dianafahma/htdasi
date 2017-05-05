<center><h3>Detail Intership</h3>
<table border="0" align="center">
<tr >
	<td>Kode Magang	</td>
	<td> : <?php echo $row_data->id; ?></td>
</tr>
<tr>
	<td>Jenis Magang</td>
	<td> : <?php echo $row_data->job; ?></td>
</tr>
<tr>
	<td>Nama Perusahaan</td>
	<td> : <?php echo $row_data->company; ?></td>
</tr>
<tr>
	<td>Kontak </td>
	<td> : <?php echo $row_data->contact; ?></td>
</tr>
<tr>
	<td>Alamat</td>
	<td> : <?php echo $row_data->address; ?></td>
</tr>
<tr>
	<td>Alamat</td>
	<td> : <?php echo $row_data->description; ?></td>
</tr>
</table>
Untuk Kembali, silahkan tekan
<?php echo anchor ('home_admin/','	Back');?>
</center>
