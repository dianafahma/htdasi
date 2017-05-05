<?php
if (! $this->session->userdata('ses_login_status')){
	redirect ('c_login/login');
}
?>
<!doctype html>
<html>
<head>
<title> Go Sembako
</title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
</head
<body>
<center>
	<div border="1" width="1100px">
		<div height="80px"class="header">
		</div>
			<div class="navbar navbar-inverse">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
				</button>
					<?php echo anchor ('ct_sembako/beranda','Beranda','class="navbar-brand"'); ?>
					<?php echo anchor ('ct_sembako/display_tbarang','Gudang Sembako','class="navbar-brand"'); ?>
					<?php echo anchor ('ct_sembako/display_ttoko','Pemasok','class="navbar-brand"')?>
					<?php echo anchor ('ct_sembako/display_ttentang','Tentang Kita','class="navbar-brand"')?>
					<?php echo anchor ('ct_sembako/display_tkontak','Kontak','class="navbar-brand"')?>
			  </div>
			</div>
			<div> 	
				<div style="float:right;">
				 <p>Halo,  <?php echo $this->session->userdata('ses_username'); ?> | 
				 <?php 	
				echo anchor('c_login/logout','Logout','class="label label-warning"')?></p></div >
			</div>
		<div class="" >
			<div> <?php $this->load->view($content_view)?>
			</div>
		</div>
		
		<div class="panel panel-default" align="center">
			<div>SembakoGampang &copy;| 2015 copyright
			</div>
		</div>
	</div>
</center>
</body>
</html>