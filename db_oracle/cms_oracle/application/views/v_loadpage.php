<!doctype html>
<html>
<head>
<title>Klaten Warta
</title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'assets/theme/bootstrap.css'?>"/>
</head
<body >
	<div class="panel panel-success">
		<div class="panel-heading">
	Header
			<div style="float:right;">
			<p>Halo,  <?php echo $this->session->userdata('ses_username'); ?> | 
			 <?php 
			echo anchor('c_login/logout','Logout')?></p>
			</div >		
		</div>
	</div>
	<!--<table class="jumbotron" align="center">
		<tr>
			<td> -->
				<div class="navbar navbar-default">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<!--<a class="navbar-brand" href="#">Beranda</a>-->
					<?php echo anchor ('c_cms/display','Beranda','class="navbar-brand"'); 
					 echo anchor ('c_cms/display_profil','Profil','class="navbar-brand"'); 
					 echo anchor ('c_cms/display_berita','Berita','class="navbar-brand"');
					 echo anchor ('c_cms/display_galeri','Galeri Foto','class="navbar-brand"');
					 echo anchor ('c_cms/visi_misi','Visi Misi','class="navbar-brand"');
					 echo anchor ('c_cms/display_kontak','Kontak','class="navbar-brand"')?>
				  </div>
				  <div class="navbar-collapse collapse navbar-responsive-collapse">
					<form class="navbar-form navbar-right">
					  <input type="text" class="form-control col-lg-8" placeholder="Search">
					</form>
				  </div>
				</div><!--
			</td>
		</tr>
		<tr  >-->
			<div class="paraf">
			<?php $this->load->view($content_view)?>
			</div>
<!--
			</td>
		</tr>
	</table>	-->
<div class="panel panel-success">
<div class="panel-heading">
					<a class="navbar-brand" href="#">SembakoGampang | 2015 copyright</a>
				</div>
			</div>
	
</body>
</html>