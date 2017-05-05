<?php if($this->session->userdata('ses_login_status')==false  or $this->session->userdata('ses_login_type')!="reporter"){ 
		redirect('c_berita/login');
	
} else { ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="<?php echo base_url(); ?> generator" content="Bootply" />
		<meta name="<?php echo base_url(); ?>viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url(); ?>/cssadmin/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!-- textare -->
		<script src="<?php echo base_url();?>media/tinymce/js/tinymce/tinymce.dev.js"></script>
		<script src="<?php echo base_url();?>media/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
		<script src="<?php echo base_url();?>media/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
		<script src="<?php echo base_url();?>media/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<link href="<?php echo base_url(); ?>cssweb/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo base_url(); ?>/cssadmin/css/styles.css" rel="stylesheet">
	</head>
	<body>
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <?php echo anchor('c_home/display1','<b >HOME</b>')?> 
        </li>
        <li>
          <?php echo anchor('c_berita/kelolarep', '<b > KELOLAH DATA </b>');?>
        </li>
        <li>
          <?php echo anchor('c_berita/tambah', '<b > TAMBAH BERITA </b>');?>
        </li>
        <li>
          <?php echo anchor('c_berita/display1', '<b > BERITA SAYA </b>');?>
        </li>
        <li>
          <?php echo anchor('c_berita/k_hiburan', '<b > KATEGORI </b>');?>
        </li>
        <li>
          <?php echo anchor('c_reporter/display_reporter_profile', '<b > PROFIL </b>');?>
        </li>
      </ul>
      <ul class="nav navbar-right navbar-nav">
		<a class="out2" href="<?php echo base_url()?>index.php/c_berita/logout/">
		<img src="<?php echo base_url(); ?>cssweb/images/power-01-512.png" width="20px" alt=""></a>
		
      </ul>
    </nav>
  </div>
</header>

<div id="masthead">  
  <div class="container">
    <div class="row">
        

        <div class="well well-lg"> 
          <img src="<?php echo base_url(); ?>css/images/logo.png" alt="" width="300x" height=""></a></h1> 
          <p class="lead"></p>
        </h1>
        </div>
    </div> 
  </div><!-- /cont -->
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="top-spacer"> </div>
      </div>
    </div> 
  </div><!-- /cont -->
  
</div>


<div class="container">
  <div class="row">
    
    <div class="col-md-12"> 
      
      <div class="panel">
        <div class="panel-body">
          
          
          
          <!--/stories-->
           <section id="content">
			<div class="container_24">
			<?php $this->load->view($content_view) ?>
			<div class="clear"></div>
			</div>
			</section> 
          <!--/stories-->
          
          
          
        </div>
      </div>
                                                                                       
	                                                
                                                      
   	</div><!--/col-12-->
  </div>
</div>
                                                
                                                                                
<hr>

<div class="container" id="footer">
  <div class="row">
    <div class="col col-sm-12">
      
      <div class="btn-group">
      </div>
      
    </div>
  </div>
</div>


<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
          <p class="pull-right">Copyright © 2013 - 2015 Chaeril Erich - All Rights Reserved
      </div>
    </div>
  </div>
</footer>
</body>
</html>
<?php } ?>