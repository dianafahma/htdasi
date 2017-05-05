<?php include('header.php'); ?>
<br/>
<div class="container panel panel-info">
	<label class="info"> <?php echo $row_data->kode_barang; ?> </label><br/>
	<label><?php echo $row_data->nama_barang; ?> </label><br/>
	<p ><img height="300px" width="300px" src="<?php echo base_url().'aset/'.$row_data->gambar_i; ?> "></p><br/>
	<label class="info"><?php echo $row_data->harga_barang; ?></label>

	<button class="btn btn-warning">	
	  <?php echo anchor('belanja/frontend_pesan/'.$row_data->kode_barang, 'Pesan','class="a"'); ?>
	</button>
	<button class="btn btn-warning">
	  <?php echo anchor('belanja/','Back')?>
	</button>
</div>
<div>
	
</div>