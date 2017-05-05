<?php if($this->session->userdata('ses_login_status')==false  or $this->session->userdata('ses_login_type')!="redaksi"){ 
		redirect('c_berita/login');
	
} else { ?>

<html>
<body class="body2">
<head>
<script src="<?php echo base_url();?>media/tinymce/js/tinymce/tinymce.dev.js"></script>
<script src="<?php echo base_url();?>media/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
<script src="<?php echo base_url();?>media/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
<script src="<?php echo base_url();?>media/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>

<!----------------------------------------------->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="<?php echo base_url(); ?> generator" content="Bootply" />
		<meta name="<?php echo base_url(); ?>viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url(); ?>/cssadmin/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo base_url(); ?>/cssadmin/css/styles.css" rel="stylesheet">
	</head>
	<body>
<header class="navbar navbar-bright2 navbar-fixed-top" role="banner">
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
          <?php echo anchor('c_home/display2','<b >HOME</b>')?> 
        </li>
        <li>
          <?php echo anchor('c_berita/kelolared', '<b > VALIDASI DATA </b>');?>
        </li>
        <li>
          <?php echo anchor('c_berita/display2', '<b > BERITA KAMI </b>');?>
        </li>
        <li>
          <?php echo anchor('c_berita/kategorired', '<b > KATEGORI </b>');?>
        </li>
        <li>
          <?php echo anchor('c_kontak/display1', '<b > KRITIK DAN SARAN </b>');?>
        </li>
        <li>
          <?php echo anchor('c_reporter/index', '<b > REPORTER </b>');?>
        </li>
      </ul>
      <ul class="nav navbar-right navbar-nav">
		<a class="out2" href="<?php echo base_url()?>index.php/c_berita/logout/">
		<img src="<?php echo base_url(); ?>cssweb/images/power-01-512.png" width="20px" alt=""></a>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
          <ul class="dropdown-menu" style="padding:12px;">
            <form class="form-inline">
              <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
            </form>
          </ul>
        </li>-->
      </ul>
    </nav>
  </div>
</header>

<div id="masthead2">  
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
          
          
          <!--<a href="/" class="btn btn-primary pull-right btnNext">More <i class="glyphicon glyphicon-chevron-right"></i></a>
        -->
          
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

<hr>

<hr>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <ul class="list-inline">
          <li><i class="icon-facebook icon-2x"></i></li>
          <li><i class="icon-twitter icon-2x"></i></li>
          <li><i class="icon-google-plus icon-2x"></i></li>
          <li><i class="icon-pinterest icon-2x"></i></li>
        </ul>
        
      </div>
      <div class="col-sm-6">
          <p class="pull-right">Copyright © 2013 - 2015 Chaeril Erich - All Rights Reserved
      <!--<i class="icon-heart-empty"></i> at <a href="http://www.bootply.com">Bootply</a>--></p>      
      </div>
    </div>
  </div>
</footer>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
<?php } ?>