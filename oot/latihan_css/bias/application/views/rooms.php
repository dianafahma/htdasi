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
<title>LA_Bias | Chamber</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="<?php echo base_url().'layout/styles/layout.css'?>" type="text/css" />
<script type="text/javascript" src="<?php echo base_url().'layout/scripts/jquery.min.js'?>"></script>
<!-- prettyPhoto -->
<link rel="stylesheet" href="<?php echo base_url().'layout/scripts/prettyphoto/prettyPhoto.css'?>" type="text/css" />
<script type="text/javascript" src="<?php echo base_url().'layout/scripts/prettyphoto/jquery.prettyPhoto.js'?>"></script>
<style>
.nav {
	line-hight:20px;
	background-color:#;
	height:300px;
	width:250px;
	float:left;
	margin-left:22px;
	margin-bottom: 20px;
	padding-top: 5px;
	text-align:center;
	padding-left: 10px;
	padding-right: 10px;
	border: 1px solid #a1a1a1;
	border-radius: 5px;
	
}</style>
<script type="text/javascript">
$(document).ready(function() {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded',
        overlay_gallery: false,
        social_tools: false
    });
});
</script>
<!-- / prettyPhoto -->
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
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Home</a></li>
      <li>&#187;</li>
      <li><a href="#">Grand Parent</a></li>
      <li>&#187;</li>
      <li><a href="#">Parent</a></li>
      <li>&#187;</li>
      <li class="current"><a href="#">Child</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->

<div class="wrapper col4">
  <div id="container">
    <div class="gallery">
      <h2>Chamber of BIAS</h2>

<?php 
echo form_open('c_bias/room');
	foreach ($list_rooms as $rows) {
		
?>

		<div class="nav">
			<?php echo $rows['tipe'];
			//$ima= "images/";
			//echo $ima;
			$foto=$rows['image']; 
			echo '<br/>'.$rows['image'];
			echo '<br/>'.$rows['rate'];?>
			<img width="200px" height="200px" src="<?php echo  base_url().'images/'.'$foto' ;?>" alt="princess"/>
		</div>



      <ul>
        <li><a rel="prettyPhoto[gallery1]" href="<?php echo base_url().'images/demo/gallery/500x500.gif'?>" title="Image 1"><img src="<?php echo base_url().'images/22.png'?>" alt="Title Text" /></a><br/><?php echo $rows['tipe']; echo $rows['rate'];?></li>	
         <!-- <li><a rel="prettyPhoto[gallery1]" href="<?php echo base_url().'images/demo/gallery/500x500.gif'?>" title="Image 2"><img src="<?php echo base_url().'images/demo/gallery/1.gif'?>" alt="Title Text" /></a></li>
        <li><a rel="prettyPhoto[gallery1]" href="<?php echo base_url().'images/demo/gallery/500x500.gif'?>" title="Image 3"><img src="<?php echo base_url().'images/demo/gallery/3.png'?>" alt="Title Text" /></a></li>
        <li><a rel="prettyPhoto[gallery1]" href="<?php echo base_url().'images/demo/gallery/500x500.gif'?>" title="Image 4"><img src="<?php echo base_url().'images/demo/gallery/174x174.gif'?>" alt="Title Text" /></a></li>
      <li class="last"><a rel="prettyPhoto[gallery1]" href="<?php echo base_url().'images/demo/gallery/500x500.gif'?>" title="Image 5"><img src="<?php echo base_url().'images/demo/gallery/174x174.gif'?>" alt="Title Text" /></a></li>
        <li><a rel="prettyPhoto[gallery1]" href="<?php echo base_url().'images/demo/gallery/500x500.gif'?>" title="Image 6"><img src="<?php echo base_url().'images/demo/gallery/174x174.gif'?>" alt="Title Text" /></a></li>
        <li><a rel="prettyPhoto[gallery1]" href="<?php echo base_url().'images/demo/gallery/500x500.gif'?>" title="Image 7"><img src="<?php echo base_url().'images/demo/gallery/174x174.gif'?>" alt="Title Text" /></a></li>
        <li><a rel="prettyPhoto[gallery1]" href="<?php echo base_url().'images/demo/gallery/500x500.gif'?>" title="Image 8"><img src="<?php echo base_url().'images/demo/gallery/174x174.gif'?>" alt="Title Text" /></a></li>
        <li><a rel="prettyPhoto[gallery1]" href="<?php echo base_url().'images/demo/gallery/500x500.gif'?>" title="Image 9"><img src="<?php echo base_url().'images/demo/gallery/174x174.gif'?>" alt="Title Text" /></a></li>
        <li class="last"><a rel="prettyPhoto[gallery1]" href="<?php echo base_url().'images/demo/gallery/500x500.gif'?>" title="Image 10"><img src="<?php echo base_url().'images/demo/gallery/174x174.gif'?>" alt="Title Text" /></a></li>-->
      </ul><?php } ?>
      <br class="clear" />
    </div>
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
