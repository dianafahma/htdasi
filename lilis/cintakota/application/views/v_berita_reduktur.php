<title>Berita</title>
<div align="">
<link href="<?php echo base_url(); ?>/css/frontend/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>/css/frontend/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>/css/frontend/bootstrap.min.js" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>/cssaddmin/css/styles.css" rel="stylesheet" type="text/css" media="all" />
</div>
<div class="btn-group">
		<?php echo anchor('c_berita/display2','<b class="btn btn-twitter btn-lg"><i class="icon-twitter icon-large"></i>Berita Reporter</b>')?> 
		<?php echo anchor('c_berita/terpublis2','<b class="btn btn-facebook btn-lg"><i class="icon-facebook icon-large"></i>Telah Dipublis</b>')?> 
		<?php echo anchor('c_berita/arsip2','<b class="btn btn-google-plus btn-lg"><i class="icon-google-plus icon-large"></i> Arsip Perusahaan</b>')?> 
		</div>
	  <p><p><p><p>
<?php
$i=1;
foreach ($list_berita->result() as $row)
{ 
$foto[$i] = $list_gambar[$i]->path_folder;
?>	
	<div class="reporter">
		<i><?php $date=$row->tanggal; echo $tanggal_berita=date('d M Y | H:i:s ', strtotime($date)); ?></i><br>
		<b><i>#<?php echo $row->penulis; ?></i></b><br>
		<img src="<?php echo base_url().$foto[$i] ; ?>" width="200" height="200">
		<br>
		<b><?php echo $row->judul; ?></b><br>
		
		
<!--	<?php 
		if ($row->publish==0) {
		?>
		<?php echo anchor('c_berita/display_update_reporter/'.$row->id, '<button ">EDIT</button>');?>
		<?php } else if ($row->publish=1) {
		?>
		<fieldset disabled><?php echo anchor('c_berita/display_update_reporter/'.$row->id, '<button ">EDIT</button>');?></fieldset>
		<?php } ?>
			
		<?php
		if ($row->status==0) {
		?>
		
		<fieldset disabled>
		<?php echo anchor('c_berita/aktif/'.$row->id, '<button ">Belum Dibaca</button>');?>
		</fieldset>
		<?php
		} else if ($row->status==1) {
		?>
		<fieldset disabled>
		<?php echo anchor('c_berita/nonaktif/'.$row->id,'<button ">Sudah Dibaca</button>');?>
		</fieldset>
		<?php } ?>
		
		<?php
			if ($row->publish==0) {
		?>
		<fieldset disabled>
		<?php echo anchor('c_berita/publish/'.$row->id, '<button ">Menunggu Verifikasi</button>');?>
		</fieldset>
		<?php
			} else if ($row->publish==1) {
		?>
		<fieldset disabled>
		<?php echo anchor('c_berita/nonpublish/'.$row->id, '<button ">Terpublish</button ">');?>
		</fieldset>
		<?php } ?>-->
	</div>
	<?php
	$i++;
} ?>