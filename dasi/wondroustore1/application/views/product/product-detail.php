<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start content -->
			<div class="row single">
				<div class="col-md-9 det">
				  <div class="single_left">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							        <!-- FlexSlider -->
										<script src="<?php echo base_url().'media/frontend/js/imagezoom.js';?>"></script>
										  <script defer src="<?php echo base_url().'media/frontend/js/jquery.flexslider.js';?>"></script>
										<link rel="stylesheet" href="<?php echo base_url().'media/frontend/css/flexslider.css';?>" type="text/css" media="screen" />

										<script>
										// Can also be used with $(document).ready()
										$(window).load(function() {
										  $('.flexslider').flexslider({
											animation: "slide",
											controlNav: "thumbnails"
										  });
										});
										</script>
									<!-- //FlexSlider-->

							  <ul class="slides">
								<li data-thumb="<?php echo base_url().$p->gbr_kecil; ?>">
									<div class="thumb-image"> <img src="<?php echo base_url().$p->gbr_kecil; ?>" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="<?php echo base_url().$p->gbr_produk_ii; ?>">
									 <div class="thumb-image"> <img src="<?php echo base_url().$p->gbr_produk_ii; ?>" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="<?php echo base_url().$p->gbr_produk_iii; ?>">
								   <div class="thumb-image"> <img src="<?php echo base_url().$p->gbr_produk_iii; ?>" data-imagezoom="true" class="img-responsive"> </div>
								</li>
								<li data-thumb="<?php echo base_url().$p->gbr_produk_ii; ?>">
								   <div class="thumb-image"> <img src="<?php echo base_url().$p->gbr_produk_ii; ?>" data-imagezoom="true" class="img-responsive"> </div>
								</li>
							  </ul>
							<div class="clearfix"></div>
						</div>
					</div>
				  <div class="desc1 span_3_of_2">
					<h3><?php echo $p->nama_produk; ?></h3>
					<span class="brand">Brand: <a href="#">Sed do eiusmod </a></span>
					<br>
					<span class="code">Product Code: <?php echo $p->kode_produk; ?></span>
					<p>when an unknown printer took a galley of type and scrambled it to make</p>
						<div class="price">
							<span class="text">Price:</span>
							<span class="price-new">IDR <?php echo number_format($p->harga,0,',','.'); ?></span>
							<!-- <span class="price-old">$100.00</span>  -->
							<!-- <span class="price-tax">Ex Tax: $90.00</span><br> -->
							<span class="points"><small>Price in reward points: 400</small></span><br>
						</div>
					<div class="det_nav1">
						<h4>Select a size :</h4>
							<div class=" sky-form col col-4">
								<ul>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>M</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>XL</label></li>
								</ul>
							</div>
					</div>
					<div class="btn_form">
						<a href="checkout.html">buy</a>
					</div>
					<a href="#"><span>login to save in wishlist </span></a>
					
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Details</h6>
					<p class="prod-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option</p>
				</div>
				<div class="single-bottom2">
					<h6>Related Products</h6>
						<div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/w8.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
							   </div>
							  <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">$597.51</span>								
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
				     <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="images/w10.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="#">Excepteur sint</a></h5>
		                           <p class="product_descr"> Vivamus ante lorem, eleifend nec interdum non, ullamcorper et arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>									
							   </div>
							   <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">$597.51</span>								
								<button class="button1"><span>Add to cart</span></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
		   	  </div>
	       </div>	

	       <?php include("category.php"); ?>
		   <div class="clearfix"></div>		
	  </div>
	<!-- end content -->
</div>
</div>