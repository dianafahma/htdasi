<!DOCTYPE html>
<html>
<head>
	<title>Stationary Shopping Cart</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'aset/css/bootstrap.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'aset/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'aset/js/bootstrap.js'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'aset/js/bootstrap.min.js'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'aset/css/bootstrap.css'; ?>">
</head>
<body>
<div class="container">
	
</div>
<!-- 
<div class="container text-center">
  <h3>THE BAND</h3>
  <p><em>We love music!</em></p>
  <p>We have created a fictional band website. Lorem ipsum..</p>
<h2>List Buku</h2>


		 <?php
		foreach($list_brg->result() as $row)
		{
			#$gambar=$row->gambar_i;
		?>
		<div class="well col-md-3">
			<div class="">
			<center>
				<!-- <a href="<?php echo base_url().'aset'.$gambar; ?>"><img height="200px" width="220px" src="<?php echo base_url().'aset/'.$gambar; ?>"/></a> 
				<?php echo '<br/>' ; echo $row->id_buku; echo '<br/>'?>
				<?php echo $row->nama_buku; echo '<br/>'?> 
				<?php echo $row->harga; echo '<br/>'?>
	 			<button class="btn btn-sm btn-info"><?php echo anchor('belanja/frontend_pesan/'.$row->id_buku, 'Pesan','class=""'); ?></button>
				<button class="btn btn-sm btn-info"><?php echo anchor('belanja/view_detail/'.$row->id_buku, 'view detail'); ?></button>
			</center>
			</div>

		</div> 
		<?php
		}
	?>
	<div>&nbsp; &nbsp; &nbsp;</div>

</div>
-->

	 

	<!-- <header class="megamenu active-grid">
		<nav class="navbar navbar-header">
			<ul class="nav float-left">
				<li class="active"><?php echo anchor('belanja/cat_alat','Alat Tulis')?></li>
				<li><?php echo anchor('belanja/cat_buku','Buku')?>
				</li>
				<!-- <a href="<?php echo base_url().'belanja/cat_buku'; ?>">Buku</a> -->
			<!-- </ul>
		</nav>
	</header> --> 
</body>
</html>