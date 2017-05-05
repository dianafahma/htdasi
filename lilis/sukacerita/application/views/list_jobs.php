
<center>
<h2 colspan="6">Available Intership</h2>
<?php
echo form_open ('home_admin/');

?>
</center>
<table border="1" align="center">

<tr align="center" bgcolor="#cc22ff">
	<td width="50">Kode Jobs</td>
	<td width="150">Jenis Magang</td>
	<td width="20">Nama Perusahaan</td>
	<td >Alamat</td>
	<td >Deskripsi</td>
	<td >Action</td>
</tr>
<?php
foreach ($list_job->result() as $row ) {
?>
<tr>
	<td><?php echo $row->id; ?></td>
	<td><?php echo $row->job; ?></td>
	<td><?php echo $row->company; ?></td>
	<td><?php echo $row->address; ?></td>
	<td><?php echo "fksdnfk"; ?></td>
	<td><?php echo anchor('home_admin/detail_job/'.$row->id,'View') ?></td>
</tr>
<?php
	}
	form_close();
?>
</table>
</br>
</br>
</br>
