<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<link href="<?php echo base_url(); ?>cssweb/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>cssweb/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="<?php echo base_url(); ?>cssweb/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>cssweb/js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>cssweb/http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="The News Reporter Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->

</head>
<body>
	<!-- header-section-starts -->
	<div class="container">	
		<div class="news-paper">
			<div class="header">
				<div class="header-left">
					<div class="logo">
						<a href="<?php echo base_url(); ?>cssweb/index.html">
							<a href="index.html"><img src="<?php echo base_url(); ?>css/images/logo.png" alt="" width="300x" height=""></a>
						</a>
					</div>
				</div>
					<div class="social-icons">
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="rss"></i></a></li>
						<li><div class="facebook"><div id="fb-root"></div>
							
							<div id="fb-root"></div>
							</div></li>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
	   						
	   						<div class="fb-like" data-href="<?php echo base_url(); ?>cssweb/https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
							

					</div>
					<div class="clearfix"></div>
				<div class="header-right">
					<div class="top-menu">
						<ul> <li><?php echo anchor('c_home/display', '<b class="menu"><i>Beranda</b>');?></li> |   
							<li><?php echo anchor('c_home/displayProfil', '<b class="menu">Profile Perusahaan</b>');?></li> |   
							<li><?php echo anchor('c_kontak/tambah', '<b class="menu">Kontak Kami</b>');?></li> |
							<li><?php echo anchor('c_berita/login', '<b class="menu">Login</i></b>');?></li>
						</ul>
					</div>
					<!---pop-up-box---->  
					<link href="<?php echo base_url(); ?>cssweb/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="<?php echo base_url(); ?>cssweb/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					<div id="small-dialog1" class="mfp-hide">
						<div class="signup">
							<h3>Subscribe</h3>
							<h4>Enter Your Valid E-mail</h4>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
							<div class="clearfix"></div>
							<input type="submit"  value="Subscribe Now"/>
						</div>
					</div>	

                     <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>	
					<div class="search">
						<form>
							<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
							<input type="submit" value="">
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				</div>
			<span class="menu"></span>
			<div class="menu-strip">
				<ul>           
					<li><?php echo anchor('c_home/display','Berita')?></li>
					<li><?php echo anchor('c_berita/kategori1','Hiburan')?></li>
					<li><?php echo anchor('c_berita/kategori2','Politik')?></li>
					<li><?php echo anchor('c_berita/kategori3','Kriminal')?></li>
					<li><?php echo anchor('c_berita/kategori5','Bisnis')?></li>
					<li><?php echo anchor('c_berita/kategori6','Teknologi')?></li>
					<li><?php echo anchor('c_berita/kategori4','Internasional')?></li>
				</ul>
			</div>
			<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".menu-strip" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
			<div class="clearfix"></div>
			<div class="main-content">
			<section id="content">
					<div class="container_24">
					<?php $this->load->view($content_view) ?>
					<div class="clear"></div>
					</div>
					</section>
			</div>
			<div class="footer text-center">
				<div class="bottom-menu">
					<ul>                 
						<li><?php echo anchor('c_home/display','Berita')?></li> |
						<li><?php echo anchor('c_berita/kategori1','Hiburan')?></li> |
						<li><?php echo anchor('c_berita/kategori2','Politik')?></li> |
						<li><?php echo anchor('c_berita/kategori3','Kriminal')?></li> |
						<li><?php echo anchor('c_berita/kategori5','Bisnis')?></li> |
						<li><?php echo anchor('c_berita/kategori6','Teknologi')?></li> |
						<li><?php echo anchor('c_berita/kategori4','Internasional')?></li> |
						<li><?php echo anchor('c_berita/kategori6','Profil Perusahaan')?></li> |
						<li><?php echo anchor('c_berita/kategori4','Kontak Kami')?></li> 				
					</ul>
				</div>
				<div class="copyright text-center">
					<p>The News Reporter &copy; 2015 All rights reserved | Template by  <a href="<?php echo base_url(); ?>cssweb/http://w3layouts.com">Chaeril Erich</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>