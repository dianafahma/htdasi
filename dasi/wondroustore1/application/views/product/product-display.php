<style type="text/css">
	.content_box{
		border-radius: 10px;
		background-color:transparent;
		color: #000;
	}
	hr{
		color: #000;
		background-color: #000;
		background: #000;
	}
	.product-one{
		text-align: center;
	}
	a:hover{
		text-decoration:none;
	}
	.nama-produk{
		border-bottom: groove;
		border-radius: 1px;
		border-bottom-color: #333;
		border-bottom-width: 1px;
	}
</style>

<!-- content -->
<div class="container">
<div class="women_main">
		<!--<?php //include("category.php") ;?>-->

	<!-- start content -->
	<div class="col-md-9 w_content">
		<div class="women">
			<a href="#"><h4>Ethnicwear - <span><?php echo $total_rows; ?> Items</span> </h4></a>
			<ul class="w_nav">
						<li>Sort : </li>
		     			<li><a class="active" href="#">popular</a></li> |
		     			<li><a href="#">new </a></li> |
		     			<li><a href="#">discount</a></li> |
		     			<li><a href="#">price: Low High </a></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>

		<!-- grids_of_4 -->
		<!-- <div class="grids_of_4">
		<?php
		     foreach($produk as $p)
		     {
		        $i=100000;
		        $i++;  
	    ?>
		  <div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	   	 <img src="<?php echo base_url(); echo $p['gbr_kecil']; ?>" class="img-responsive" alt=""/>
				   	  </a>
				    <h4><a href="details.html"><?php echo anchor('c_product/product_detail/'.$p['kode_produk'], $p['nama_produk']);?></a></h4>
				     <p>It is a long established fact that</p>
					 <div class="grid_1 simpleCart_shelfItem">
				    
					 <div class="item_add"><span class="item_price"><h6>IDR <?php echo number_format($p['harga'],0,',','.'); ?></h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					 </div>
			   	</div>
			</div>
		<?php
        	echo form_close();
     	 	}
    	?>
			<div class="clearfix"></div>
		</div> -->
		<!-- end grids_of_4 -->



		<div class="grids_of_4">
				<div class="product-one">

					<?php
				      foreach($produk as $p)
				      {
				        $i=100000;
				        $i++;
				        
				    ?>
					<div class="col-md-4 product-left p-left">
						<div class="content_box">
						<a href="<?php echo base_url().'product/product_detail/'.$p['kode_produk'];?>">
			   	   	 		<img src="<?php echo base_url(); echo $p['gbr_kecil']; ?>" class="img-responsive" alt=""/>
				   	  	</a>
				   	  	
				    	<h4 class="table nama-produk"><a href="<?php echo base_url().'product/product_detail/'.$p['kode_produk'];?>"><?php echo $p['nama_produk'];?></a></h4>

				     	<p>It is a long established fact that</p>
							<div class="grid_1 simpleCart_shelfItem">
						    
								<span class="item_price"><h4>IDR <?php echo number_format($p['harga'],0,',','.'); ?></h4></span>
								<div class="item_add"><span class="item_price"><a href="<?php echo base_url().'product/add_to_cart/'.$p['kode_produk']; ?>">Add to Cart</a></span></div>
							</div>
							<BR>
			   			</div>
			   			
					</div>
					<?php
					echo form_close();
			     	 	}
			    	?>
			   		<div class="clearfix"></div>
				</div>
				<hr color="#0000FF" size="5" width="100%">
				<nav style="padding-left:15px; align:center;">
					 <ul class="pagination pagination-sm">
						<li><?php echo $this->pagination->create_links(); ?></li>
						
					</ul>
				</nav>
				<!-- <div class="pagingination"><?php echo $this->pagination->create_links(); ?> </div> -->
			</div>

	</div>
	<?php include("category.php") ;?>
	<div class="clearfix"></div>
	
	<!-- end content -->
</div>
</div>