<div class="nav" style="margin-left:30px;">
	
<?php include ('header.php') ; 
	echo form_open('belanja/search','class=""');
	echo form_open('belanja/cat_buku');
	echo form_input('keyword');
	echo form_submit('submit','Cari','id="submit"');
	form_close();
?>
</div>
<div class="container">
		 <?php
		foreach($list_brg->result()as $row)
		{
			$gambar=$row->gambar_i;
		?>
		<div class="well col-md-3">
			<div class="">
			<center>
				<a href="<?php echo base_url().'aset'.$gambar; ?>"><img height="200px" width="220px" src="<?php echo base_url().'aset/'.$gambar; ?>"/></a>
				<?php echo '<br/>' ; echo $row->kode_barang; echo '<br/>'?>
				<?php echo $row->nama_barang; echo '<br/>'?>
				<?php echo $row->harga_barang; echo '<br/>'?>
				<button class="btn btn-sm btn-info"><?php echo anchor('belanja/frontend_pesan/'.$row->kode_barang, 'Pesan','class=""'); ?></button>
				<button class="btn btn-sm btn-info"><?php echo anchor('belanja/view_detail/'.$row->kode_barang, 'view detail'); ?></button>
			</center>
			</div>
		</div> 
		<?php
		}
	?>
	<div>&nbsp; &nbsp; &nbsp;</div>
</div>