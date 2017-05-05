<?php
if (! $this->session->userdata('ses_login_status')){
	redirect ('c_login/login');
}
?>
<!doctype html>
<html>
<head>
<title>
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
					<?php echo anchor ('c_sembako/do_upload','Beranda','class="navbar-brand"'); ?>
					<?php echo anchor ('c_sembako/display_barang','Gudang Sembako','class="navbar-brand"'); ?>
					<?php echo anchor ('c_sembako/display_toko','Pemasok','class="navbar-brand"')?>
					<?php echo anchor ('c_sembako/display_tentang','Tentang Kita','class="navbar-brand"')?>
					<?php echo anchor ('c_sembako/display_kontak','Kontak','class="navbar-brand"')?>
					
					<div class="nav navbar-nav navbar-right">
						<form class="navbar-form navbar-right">
						<input type="text" class="form-control col-lg-8" placeholder="Search">
						</form>
					</div>

			  </div>
			</div>
			<div> 	
				<div style="float:right;">
				 <p>Halo,  <?php echo $this->session->userdata('ses_username'); ?> | 
				 <?php 	
				echo anchor('c_login/logout','Logout','class="label label-warning"')?></p></div >
			</div>
			<!--<div> 
				<div class="nav">
					<ul>
						<li ><?php echo anchor ('c_sembako/do_upload','Beranda'); ?></li>
						<li> <?php echo anchor ('c_sembako/display_barang','Gudang Sembako'); ?></li>
						<li><?php echo anchor ('c_sembako/display_toko','Pemasok')?></li>
						<li> <?php echo anchor ('c_sembako/display_tentang','Tentang Kita')?></li>
						<li> <?php echo anchor ('c_sembako/display_kontak','Kontak')?></li>
					</ul>
				</div>
			</div>-->
		<div class="" >
			<div> <?php $this->load->view($content_view)?>
			</div>
		</div>
		
		<div class="panel panel-default" align="center">
			<div>SembakoGampang | 2015 copyright
			</div>
		</div>
	</div>
</center>
</body>
</html>