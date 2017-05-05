 <html>
<head>
	<link href="<?php echo base_url();?>media/css/frontend/style.css" rel="stylesheet" type="text/css" />
</head>
	<div class="header" align="center">
		<h2>DATA MAHASISWA CCDP</h2>
		<h3>TELKOM PDC BANDUNG</h3>
		<h4>JL. Belitung No.7 Bandung</h4>
	</div>
	<div class="menu" colspan="2" align="center">
			<?php echo anchor('c_home/display','BERANDA')?> 
			<?php echo anchor('c_berita/display','INFORMASI')?>
			<?php echo anchor('c_mahasiswa/display','DATA MAHASISWA')?>
			<?php echo anchor('c_kontak/display','KONTAK')?>
			<?php echo anchor('c_about/display','ABOUT')?>
	</div>
	<div class="content" align="center">
		<?php $this->load->view($content_view) ?>
	</div>
	
	<div class="footer" colspan="2">
	</div>	
</html>