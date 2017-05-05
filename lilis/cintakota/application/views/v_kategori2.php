<title>Kategori Berita</title>
<div align="">
<link href="<?php echo base_url(); ?>/css/frontend/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>/css/frontend/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>/css/frontend/bootstrap.min.js" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>/cssaddmin/css/styles.css" rel="stylesheet" type="text/css" media="all" />
</div>
<div class="btn-group">
		<?php echo anchor('c_berita/k_hiburan2','<b class="btn btn-twitter btn-lg"><i class="icon-twitter icon-large"></i>HIBURAN</b>')?> 
		<?php echo anchor('c_berita/k_politik2','<b class="btn btn-facebook btn-lg"><i class="icon-facebook icon-large"></i>POLITIK</b>')?> 
		<?php echo anchor('c_berita/k_kriminal2','<b class="btn btn-google-plus btn-lg"><i class="icon-google-plus icon-large"></i>KRIMINAL</b>')?> 
		<?php echo anchor('c_berita/k_teknologi2','<b class="btn btn-twitter btn-lg"><i class="icon-twitter icon-large"></i>TEKNOLOGI</b>')?> 
		<?php echo anchor('c_berita/k_bisnis2','<b class="btn btn-facebook btn-lg"><i class="icon-facebook icon-large"></i>BISNIS</b>')?> 
		<?php echo anchor('c_berita/k_inter2','<b class="btn btn-google-plus btn-lg"><i class="icon-google-plus icon-large"></i>INTERNASIONAL</b>')?> 
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
		<img src="<?php echo base_url().$foto[$i] ; ?>" width="200" height="200">
		<br><br>
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