<title>Kelola Berita</title>
<table border="1" align="center" width="45%" class="table table-striped table-bordered table-hover table-condensed">
	<tr bgcolor='#cfe5c7'>
		<th style="width:200px">Judul</th>
		<th style="width:500px">Isi</th>
		<th>Tanggal Buat</th>
		<th>Aksi</th>
		<th>Status Berita</th>
	</tr>
	
<?php
	foreach($list_berita->result()as $row)
		{
?>
	<tr>
		<td><?php echo $row->judul; ?></td>
		<td><?php echo substr($row->isi,0,200); ?>...</td>
		<td><?php echo $row->tanggal; ?></td>
		<!-- edit -->
		<td>
		<?php 
		if ($row->publish==0) { ?>
        <?php echo anchor ('c_berita/display_update_reporter/'.$row->id, '<button style="width:80px" type="button" class="btn btn-sm btn-primary">UPDATE</button>'); ?>
        <?php } else if ($row->publish=1) { ?>
		<fieldset disabled>
		<button style="width:80px" type="button" class="btn btn-sm btn-default">NOT AKSI</button></fieldset>
		<?php } ?>
		</td>
		<!-- status -->
		<td>
		<?php
		if ($row->status==0) {
		?>
		<fieldset disabled>
		<button style="width:170px" type="button" class="btn btn-sm btn-primary">BELUM DIBACA</button>
		</fieldset>
		<?php
		} else if ($row->status==1) {
		?>
		<fieldset disabled>
		<button style="width:170px" class="btn btn-sm btn-warning">SUDAH DIBACA</button>
		</fieldset>
		<?php } ?>
		<p>
		<fieldset disabled>
		<?php
			if ($row->publish==0 and ($row->status==1 or $row->status_edit==1)) { echo '<button style="width:170px" type="button" class="btn btn-sm btn-warning">ARSIP</button>'; }
			else if ($row->publish==0 and $row->status==0 and $row->status_edit==0) { echo '<button style="width:170px" type="button" class="btn btn-sm btn-danger">MENUNGGU VERIFIKASI</button>'; }
			else if ($row->publish==1) { echo '<button style="width:170px" type="button" class="btn btn-sm btn-success">TERPUBLISH</button>'; }
		
		?>
		</fieldset>
		</td>
	</tr>
<?php
	}
?>
</table>