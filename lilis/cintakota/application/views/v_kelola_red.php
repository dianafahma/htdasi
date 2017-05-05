<title>Validasi Berita</title>
<table border="1" align="center" width="45%" class="table table-striped table-bordered table-hover table-condensed">
	<tr bgcolor='#cfe5c7'>
		<th style="width:">Judul</th>
		<th style="width:">Isi</th>
		<th style="width:100px">Tanggal Buat</th>
		<th style="width:100px">Tanggal Publish</th>
		<th style="width:245px">Aksi</th>
		<th>Verifikasi</th>
	</tr>
	
<?php
	foreach($list_berita->result()as $row)
		{
?>
	<tr>
		<td style="width:"><?php echo $row->judul; ?></td>
		<td style="width:"><?php echo substr($row->isi,0,200); ?>...</td>
		<td style="width:100px"><?php echo $row->tanggal; ?></td>
		<td style="width:100px"><?php echo $row->tgl_publish; ?></td>
		<!-- baca -->
		<td style="width:245px">
		<?php 
			if ($row->publish==0) {
			echo anchor ('c_berita/view_detailreduktur/'.$row->id, '<button type="button" class="btn btn-sm btn-primary">View Detail</button>');?> 
		<?php	
			} else if ($row->publish==1) {
		?>
		<?php 
			echo anchor('c_berita/view_detailreduktur2/'.$row->id, '<button type="button" class="btn btn-sm btn-primary">View Detail</button>');?>
		<?php } ?>
		
		<!-- update -->
		<?php 
			if ($row->publish==0) {
			echo anchor ('c_berita/display_form_update/'.$row->id, '<button type="button" class="btn btn-sm btn-primary">UPDATE</button>');?>
		<?php	
			} else if ($row->publish==1) {
		?>
		<?php 
			echo anchor ('c_berita/display_form_update2/'.$row->id, '<button type="button" class="btn btn-sm btn-primary">UPDATE</button>');?>
		<?php } ?>

		<!-- delete -->
		<b onclick="return confirm('Data Akan Dihapus?');">
		<?php echo anchor ('c_berita/delete/'.$row->id, '<button type="button" class="btn btn-sm btn-primary">DELETE</button>'); ?></b><br>
		<br>
		</td>
		<!-- Verifikasi -->
		<td>
		<?php
			if ($row->publish==0) {
			echo anchor('c_berita/publish/'.$row->id, '<button type="button" class="btn btn-sm btn-danger">PUBLISH</button>');?>
		<?php	
			} else if ($row->publish==1) {
		?>
		<fieldset disabled>
		<?php echo anchor('c_berita/nonpublish/'.$row->id, '<button type="button" class="btn btn-sm btn-success">DIVERIFIKASI</button>');?>
		<?php } ?>
		</td>
	</tr>
<?php
	}
?>
</table>
