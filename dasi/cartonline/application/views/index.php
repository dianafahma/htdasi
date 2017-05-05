<!DOCTYPE HTML>
<html>
<head>
<title>BeliSaja | Home                                                          </title>
<link href="<?php echo ('asset/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="<?php echo ('asset/js/jquery-1.11.1.min.js')?>"></script>
<!-- Custom Theme files -->
<link href="<?php echo ('asset/css/style.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="<?php echo ('asset/css/megamenu.css')?>" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo ('asset/js/megamenu.js')?>"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="<?php echo ('asset/js/menu_jquery.js')?>"></script>
<script src="<?php echo ('asset/js/simpleCart.min.js')?>"> </script>

<style>
.item {
	
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
	
}
.contain{
	width:1100px;
	height:auto;
	margin:auto;
}
</style>
</head>
<body>
<!-- header_top -->
<!-- header -->
<?php include('header.php') ?>
<div class="arriv">
	<div class="container">
		<div class="arriv-top">
			<div class="col-md-6 arriv-left">
				<img src="<?php echo base_url('asset/images/1.jpg')?>" class="img-responsive" alt="">
				<div class="arriv-info">
					<h3>NEW ARRIVALS</h3>
					<p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
					<div class="crt-btn">
						<a href="<?php echo base_url('index.php/shop_control/details')?>">TAKE A LOOK</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 arriv-right">
				<img src="<?php echo base_url('asset/images/2.jpg')?>" class="img-responsive" alt="">
				<div class="arriv-info">
					<h3>TUXEDO</h3>
					<p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
					<div class="crt-btn">
						<a href="<?php echo base_url('index.php/shop_control/details')?>">SHOP NOW</a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-bottm">
			<div class="col-md-8 arriv-left1">
				<img src="<?php echo base_url('asset/images/3.jpg')?>" class="img-responsive" alt="">
				<div class="arriv-info1">
					<h3>SWEATER</h3>
					<p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
					<div class="crt-btn">
						<a href="<?php echo base_url('index.php/shop_control/details')?>">SHOP NOW</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 arriv-right1">
				<img src="<?php echo base_url('asset/images/4.jpg')?>" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="<?php echo base_url('index.php/shop_control/details')?>"><h3>Trekking Shoes<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-las">
			<div class="col-md-4 arriv-left2">
				<img src="<?php echo base_url('asset/images/5.jpg')?>" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="<?php echo base_url('index.php/shop_control/details')?>"><h3>Casual Glasses<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="col-md-4 arriv-middle">
				<img src="<?php echo base_url('asset/images/6.jpg')?>" class="img-responsive" alt="">
				<div class="arriv-info3">
					<h3>FRESH LOOK T-SHIRT</h3>
					<div class="crt-btn">
						<a href="<?php echo base_url('index.php/shop_control/details')?>">SHOP NOW</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 arriv-right2">
				<img src="<?php echo base_url('asset/images/7.jpg')?>" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="<?php echo base_url('index.php/shop_control/details')?>"><h3>Elegant Watches<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- this is content for all grid item-->
	<div class="container">
		<h3 class="special">Special Offers</h3>
		
			<?php
			 foreach ($list_item->result() as $pp)
			 	{
			?>
			<div class="arriv-las" >
				<div class="col-md-4 arriv-middle" >
					<img src="<?php echo base_url(); echo $pp->gambar_i; ?>" class="img-responsive" alt="">
					<div class="arriv-info2">
						<h3><?php echo $pp->nama_barang; ?></h3>
						<p><?php echo $pp->kode_barang; ?></p>
						<div class="crt-btn">
							<a href="<?php echo base_url('index.php/shop_control/details/');  echo "/";echo $pp->kode_barang;?>">SHOP NOW</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>		
			<?php
			}?>
	</div>
<?php include('footer.php') ?>
</body>
</html>