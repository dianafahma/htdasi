<center><h3>Detail Mahasiswa</h3>
<table border="0" align="center">

<tr >
	<td>NIM	</td>
	<td> : <?php echo $row_data->nim; ?></td>
</tr>
<tr>
	<td>NAMA</td>
	<td> : <?php echo $row_data->nama; ?></td>
</tr>
<tr>
	<td>UMUR</td>
	<td> : <?php echo $row_data->umur; ?></td>
</tr>
<tr>
</tr>
</table>
Untuk Kembali, silahkan tekan
<?php echo anchor ('c_mahasiswa_dis/display','	Back');?>
</center>
