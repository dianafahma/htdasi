<?php #include('header.php'); ?>
<br/>
	<div class="container panel panel-info">
		<label class="info"> <?php echo $row_data->id_buku; ?> </label><br/>
		<label><?php echo $row_data->nama_buku; ?> </label><br/>
		<label class="info"><?php echo $row_data->harga; ?></label>
				  <div>
			<?php echo anchor('belanja/frontend_pesan/'.$row_data->id_buku, 'Pesan','class="btn btn-warning"'); ?>
				  <?php echo anchor('belanja/','Back','class="btn btn-warning"')?>
		</div>
	</div>
