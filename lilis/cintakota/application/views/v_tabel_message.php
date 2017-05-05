<title>Kritik dan Saran</title>
<h3>Kritik dan Saran</h3>
<table border="1" align="center" width="45%" class="table table-striped table-bordered table-hover table-condensed">
	<tr bgcolor='#cfe5c7'>
		<th style="width:150px">Nama</th>
		<th style="width:220px">Email</th>
		<th style="width:100px">Tanggal</th>
		<th>Kritik dan Saran</th>
		<th>Aksi</th>
	</tr>
	
<?php
	foreach($list_kontak->result()as $row)
		{
?>
	<tr>
		<td><?php echo $row->nama; ?></td>
		<td><?php echo $row->email; ?></td>
		<td><?php echo $row->tanggal; ?></td>
		<td><?php echo $row->kritis; ?></td>
		<td>
        <?php echo anchor ('c_kontak/delete_data/'.$row->id, '<button type="button" class="btn btn-sm btn-danger">Delete</button>'); ?>
		</td>
	</tr>
<?php
	}
?>
</table>