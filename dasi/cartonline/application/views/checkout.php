<!DOCTYPE HTML>
<html>
<head>
<title>BeliSaja| Checkout </title>
<link href="<?php echo base_url('asset/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="<?php echo base_url('asset/js/jquery-1.11.1.min.js')?>"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url('asset/css/style.css')?>" rel='stylesheet' type='text/css' />
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
<link href="<?php echo base_url('asset/css/megamenu.css')?>" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url('asset/js/megamenu.js')?>"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="<?php echo base_url('asset/js/menu_jquery.js')?>"></script>
<script src="<?php echo base_url('asset/js/simpleCart.min.js')?>"> </script>
</head>
<body>
<!-- header_top -->
<?php include('header.php') ?>
<!-- header -->

<div class="container">
	<div class="check">	 
			 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">6200.00</span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span>6350.00</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
		 <div class="col-md-9 cart-items">
			 <h1>My Shopping Bag (2)</h1>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			 <div class="cart-header">


<!-- 				 <div class="close1"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="<?php echo base_url('asset/images/8.jpg')?>" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
						<ul class="qty">p
						
							 <div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div> -->

				 <!--  <? echo form_open('shop_control/send_db')?> -->
				 <?php echo form_open('shop_control/send_db');?>
 <div class="body"></div>
		<div class="grad"></div>
		
		<br>
		<div class="login">
				<input type="text" placeholder="nama" name="nama_pemesan"><br>
				<input type="text" placeholder="hp" name="hp"><br>
				<input type="submit" value="Send">
				<br><br>
		</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<?php echo form_close();?>

				 <!-- <form>
				  <label>Nama </label>
				  <input type="text" name="nama_pemesan"><br/>
				  <label>Handphone</label>
				  <input type="text" name="hp"><br/>
				  <label>Email</label>
				  <input type="text" name="email"><br/>
				  <label>Alamat</label>
				  <input type="text" name="alamat"><br/>

				  <input type="submit" value="Send">
				  <?php #echo base_url().'shop_control/send_db/';?> -->
			 </div>		
		 </div>
			<div class="clearfix"> </div>
	 </div>
	 </div>
<?php include('footer.php') ?>
</body>
</html>