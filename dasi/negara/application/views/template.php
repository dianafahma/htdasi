<!DOCTYPE html>
<html>
<head>
	<title>Negara</title>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'aset/theme/bootstrap.css'?>"/>
</head>
<body style="background-color:; color:black;">
<div class="page-header" id="banner">
		<div class="row">
          <div class="col-lg-6">
            <h1 class="info">Data Negara dengan Penduduk Berkwalitas</h1>
            
          </div>
        </div>
	</div ><font size="4px" >
		<nav class="navbar-collapse collapse" id="navbar-main">
			<ul class="nav nav-tabs" style="margin-bottom: 15px; background-color:#cc4499;">
				<li><?php echo anchor ('c_negara/home','Beranda','class=""');?>
				</li>
				<li><?php echo anchor ('c_negara/view','Negara');?>
				</li>
				
				<li><?php echo anchor ('c_negara/tambah','Input Data Baru','class="btn-info"');?>
						
				</li>
				<li><?php echo anchor ('c_negara/home','Go Home');?>
				</li>
			</ul>
		</nav></font>
<div style="margin-left:200px; margin-right:200px;">
	
	<div class="jumbotron">
		<?php $this->load->view($content)?>		
	</div>

</div>
<footer style="float:left; width:1200px;">
	<blockquote>Footer ya kali yes</blockquote>
</footer>
</body>
</html>