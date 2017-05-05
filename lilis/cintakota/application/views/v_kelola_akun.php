<title>Kelola Reporter</title>
<table border="1" align="center" width="45%" class="table table-striped table-bordered table-hover table-condensed">
	<tr bgcolor='#cfe5c7'>
		<th style="width:0px">username</th>
		<th style="width:0px">password</th>
		<th>Nama Lengkap</th>
		<th>Jenik Kelamin</th>
		<th>Alamat</th>
		<th>Aksi</th>
	</tr>
	
<?php
	foreach ($list_reporter->result() as $row)
		{
?>
	<tr>
		<td><?php echo $row->username; ?></td>
		<td><?php echo $row->password; ?></td>
		<td><?php echo $row->nama; ?></td>
		<td><?php echo $row->jk; ?></td>
		<td><?php echo $row->alamat; ?></td>
		<!-- edit -->
		<td>
        <?php echo anchor ('c_berita/display_update_reporter/'.$row->username, '<button type="button" class="btn btn-sm btn-primary">UPDATE</button>'); ?>
        <?php echo anchor ('c_berita/display_update_reporter/'.$row->username, '<button type="button" class="btn btn-sm btn-primary">DELETE</button>'); ?>
    	</td>
	</tr>
<?php
	}
?>
</table>