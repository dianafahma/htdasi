<div class="left"> 
<?php
	echo form_open('c_mahasiswa/search');
	echo form_input('keyword');
	echo form_submit('submit','Cari','id="submit"');
	form_close(); ?> </div>

<div class="left">
<?php
	echo anchor('c_mahasiswa/tambah', 'Insert');
?></div
<br><br>
<table border=1 align="center" width=1300px height=20px>
<tr bgcolor='ccffcc'>
 <td align="center" width=300px> NIM </td>
 <td align="center" width=700px> NAMA </td>
 <td align="center" width=700px> ALAMAT </td>
 <td align="center" width=300px> JURUSAN </td>
 <td align="center" width=300px> ANGKATAN </td>
 <td align="center" colspan="3" width=200px> AKSI </td>
 </tr>
 
 <?php
	foreach($list_mhsw->result()as $row)
	{
?>
<tr align="center">
	<td><?php echo $row->nim; ?></td>
	<td><?php echo $row->nama; ?></td>
	<td><?php echo $row->alamat; ?></td>
	<td><?php echo $row->jurusan; ?></td>
	<td><?php echo $row->angkatan; ?></td>
	<td width="650px">
	<?php echo anchor('C_mahasiswa/view_detail/'.$row->nim, '| view detail |'); ?>
	<?php echo anchor('C_mahasiswa/delete_data/'.$row->nim, '| delete |'); ?>
	<?php echo anchor('C_mahasiswa/display_form_update/'.$row->nim, '| Update |'); ?></td>
</tr>
<?php
	}
?>
</table>
<table border="1" width=1300px height=20px align="center">
 <tr>
	<td width="390px" align="center">
			<div class="paging">Halaman : <?php echo $this->pagination->create_links(); ?></div>
			
	</td>
 </tr>
</table>