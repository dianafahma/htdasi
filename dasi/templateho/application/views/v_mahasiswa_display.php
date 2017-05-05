<center>
<h2 colspan="6">Aplikasi Pengolahan Data Mahasiswa</h2>
<?php
echo form_open ('c_mahasiswa_dis/search','Inhhhhsert');
echo ('Pencarian Nama  ');
echo form_input ('keyword');
echo form_submit ('submit', '**Cari**', 'id="submit"');
echo ('&nbsp;'.'<br/><br/>'.'Tambah Data? Klik		');
echo anchor ('c_mahasiswa_dis/tambah','	Insert');
form_close();
?>
</center>
<table border="1" align="center">

<tr align="center" bgcolor="#cc22ff">
	<td width="50">NIM</td>
	<td width="150">NAMA</td>
	<td width="20">UMUR</td>
	<td colspan="3" align="center">AKSI</td>
</tr>
<?php
	foreach($list_mhsw->result()as $row)
	{
?>
<tr>
	<td><?php echo $row->nim; ?></td>
	<td><?php echo $row->nama; ?></td>
	<td><?php echo $row->umur; ?></td>
	<td><?php echo anchor('C_mahasiswa_dis/view_detail/'.$row->nim, 'Detail'); ?></td>
	<td><?php echo anchor('C_mahasiswa_dis/delete_data/'.$row->nim, 'Delete'); ?></td>
	<td><?php echo anchor('C_mahasiswa_dis/display_form_update/'.$row->nim, 'Update'); ?></td>
</tr>
<?php
	}
?>
</table>
</br>
</br>
</br>

