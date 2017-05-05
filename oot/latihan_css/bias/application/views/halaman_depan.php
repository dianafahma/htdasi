<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Gallerised
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gallerised</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="<?php echo base_url().'layout/styles/layout.css'?>" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url().'layout/content.css'?>" type="text/css" />
<script type="text/javascript" src="<?php echo base_url().'layout/scripts/jquery.min.js'?>"></script>
<!-- s3slider -->
<script type="text/javascript" src="<?php echo base_url().'layout/scripts/jquery.s3slider.js'?>"></script>
<script type="text/javascript">


$(document).ready(function() {
	$('#featured_slide_').s3Slider({
		timeOut:6000 
	});
});
</script>
<!-- / s3slider -->
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="topnav">
      <ul>
        <li class="last"><?php echo anchor ('c_bias/foto','Gallery')?><span>Client Bias</span></li>
        <li><?php echo anchor ('c_bias/location','Look Us')?><span>Goes to Bias</span></li>
        <li><?php echo anchor ('c_bias/booking','Book chamber')?><span>Order Bias's Service</span></li>
        <li><?php echo anchor ('c_bias/rooms','chamber')?><span>Bias's Service</span></li>
        <li class="active"><?php echo anchor ('c_bias/profile','home')?><span>More Bias</span></li>
      </ul>
    </div>
    <div class="fl_left">
      <h1><a href="<?php echo base_url().''?>">LA_BIAS</a></h1>
      <p>Free Resort your Soul</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="featured_slide_">
    <ul id="featured_slide_Content">
      <li class="featured_slide_Image"><a href="pages/gallery.php"><img src="<?php echo base_url().'images/demo/homepage/promo.png'?>" alt="" /></a>
        <div class="introtext">
          <h2>Your Luck</h2>
          <p>The best choice for today is here some adventage and try that you get big luck to join</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="pages/gallery.php"><img src="<?php echo base_url().'images/demo/homepage/home.png'?>" alt="" /></a>
        <div class="introtext">
          <h2>House of BIAS</h2>
          <p>Welcome to free soul gather in our pleasure resort&hellip;. Enjoy valuable time with your precious and love using perfect service.</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="gallery.php"><img src="<?php echo base_url().'images/demo/homepage/images.jpg'?>" alt="" /></a>
        <div class="introtext">
          <h2>Ocean View Sun</h2>
          <p>Free from your occasion and enjoy the heat of sun and bring your deep soul to have more relaxation.</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="pages/gallery.php"><img src="<?php echo base_url().'images/demo/homepage/service.png'?>" alt="" /></a>
        <div class="introtext">
          <h2>Your Servant</h2>
          <p>Profesionalist is our priority, humble and let the you decide the relax</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="pages/gallery.php"><img src="<?php echo base_url().'images/demo/homepage/facility.png'?>" alt="" /></a>
        <div class="introtext">
          <h2>Get Benefit</h2>
          <p>Short things you would catch from here will never be forgoten</p>
        </div>
      </li>
      <li class="clear featured_slide_Image"> 
        <!-- Leave This Empty --> 
      </li>
    </ul>
  </div>
</div>
<div class="wrapper">
	<div id="footer">
		<p class="fl_left" style="font-size:15px; color:#cccc99;">ini per cobaan Short introduction text for category 5Short introduction text for category 5Short introduction text for category 5Short introduction text for category 5Short introduction text for category 5Short introduction text for category 5Short introduction text for category 5</p>
	</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>