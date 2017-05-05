<div class="container">
	<div class="check">	 
		<?php session_start();
			$i=1;
			$harga = 'data[3]';
			$jumlah = 1;
			$total = 0;
			if(!empty($pesanan))
				foreach($pesanan as $index => $data)
			{
				$_SESSION['vkode'][$i]=$data[0];
				$_SESSION['vnama'][$i]=$data[2];
				$_SESSION['vharga'][$i]=$data[3];
				$i=$i+1;

		?>

		<?php
		$subtotal = $data[3] * $jumlah;
			$total = $total + $subtotal;
			}
		?>
		
		<div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1"><?php echo $total; ?></span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">0.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span><?php echo $total; ?></span></li>
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

		<a href="<?php echo base_url().'product/empty_cart';?>">hapus session</a>
		 <div class="col-md-9 cart-items">
			 <h1>My Shopping Bag (2)</h1>
				<!--<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>-->


			<?php
			$harga = 'data[3]';
			$jumlah = 1;
			$total = 0;
				if(!empty($pesanan))
					foreach($pesanan as $index => $data)
				{
			?>
			 <div class="cart-header">
				 <div class="close1"></div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="<?php echo base_url();?><?php echo $data[1]; ?>" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"><?php echo $data[2]; ?></a><span><?php echo $data[0]; ?></span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li><p>Qty : 1</p></li>
							<li><p>Price IDR<?php echo $data[3]; ?></p></li>
							<li><p>Subtotal : <?php echo $subtotal = $data[3] * $jumlah; ?></p></li>
						</ul>
						
							 <div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>
				        <a></a>
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			<?php
				}
			?>

			<a href="<?php echo site_url().'orders/bayar';?>"><input class="btn btn-danger" type="submit" value="Next"></a>

			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>		
		 </div>
			<div class="clearfix"> </div>