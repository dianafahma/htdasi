<center>
<?php
/*echo form_open ('c_mahasiswa/search','Insert');
echo form_input ('keyword');
echo form_submit ('submit', 'Cari', 'id="submit"');*/
echo anchor ('c_mahasiswa/tambah','		Insert');
form_close();
?>

</center>
<table border="1" align="center">
<tr bgcolor="#0033ff">
	<td>NIM</td>
	<td>NAMA</td>
	<td>UMUR</td>
	<td colspan="2">AKSI</td>
</tr>
<?php
	foreach($list_mhsw->result()as $row)
	{
?>
<tr>
	<td><?php echo $row->nim; ?></td>
	<td><?php echo $row->nama; ?></td>
	<td><?php echo $row->umur; ?></td>
	<td><?php echo anchor('C_mahasiswa/view_detail/'.$row->nim, 'View detail'); ?></td>
	<td><?php echo anchor('C_mahasiswa/delete_data/'.$row->nim, 'Delete'); ?></td>
</tr>
<?php
	}
?>
</table>

