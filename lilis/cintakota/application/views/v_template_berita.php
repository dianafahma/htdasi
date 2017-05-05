<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/demo.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/grid_24.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/style.css">
	<!--<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/bootstrap.min.css">-->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="<?php echo base_url(); ?>js/jquery-1.7.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>js/uCarousel.js"></script>
	<script src="<?php echo base_url(); ?>js/tms-0.4.1.js"></script>
    <script>
		$(document).ready(function(){
		  $('.gallery')._TMS({
			  show:0,
			  pauseOnHover:true,
			  prevBu:false,
			  nextBu:false,
			  playBu:false,
			  duration:700,
			  preset:'fade',
			  pagination:$('.img-pags').uCarousel({show:3,shift:0, rows:1}),
			  pagNums:false,
			  slideshow:7000,
			  numStatus:true,
			  banners:false,
			  waitBannerAnimation:false,
			  progressBar:false
		   })		
		 })
	  </script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="sub-pages">
   <header><br>                   	
      <h1><a href="index.html"><img src="<?php echo base_url(); ?>css/images/logo.png" alt="" width="300x" height=""></a></h1> 
      <nav>  
        <ul class="menu">
              <li><?php echo anchor('c_home/display','<b class="menu"><i><b>HOME</i></b>')?></li>
              <li><?php echo anchor('c_berita/display','<b class="menu"><i>INFO BERITA</b>')?></li>
              <li><?php echo anchor('c_home/displayProfil', '<b class="menu"><i>PROFIL</b>');?></li>
              <li><?php echo anchor('c_home/displaykontak', '<b class="menu"><i>KONTAK</b>');?></li>
              </ul>
      </nav>
    </header>
</div>    
  <!--==============================content================================-->
  
    <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. July 30, 2012!</div>
    	<div class="container_24">
    <?php $this->load->view($content_view) ?>
        </div>
    </section>
<!--==============================footer=================================-->
  <footer>
      <p><strong>© 2015  BeritaKota.Net</strong><br> <a class="link" href="http://www.templatemonster.com/" target="_blank" rel="nofollow">
  </footer>	
</body>
</html>