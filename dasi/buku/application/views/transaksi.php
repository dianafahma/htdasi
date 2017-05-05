<div class="container well well-sm">
	<?php #include('header.php');
	echo form_open('belanja/proses_beli') ;

		$i=1;
		while ($i <= 100) {
			$no=1;
			$i++;
		}

	?>
	<div  class="form-group">
		<label>Id Transaksi	</label>
		<input type="text" class="form-control" name="id_trx" value="<?php echo $no;?>" ><br/>
	</div>
	<div  class="form-group">
		
	<label>Nama Pemesan</label>
	<input type="text"  class="form-control"  name="nama_pemesan" required/><br/>
	</div>
	<div  class="form-group">
		
	<label>HP</label>
	<input type="text" class="form-control"  name="hp" /><br/>
	</div>
	<div  class="form-group">
		
	<label>Email</label>
	<input type="text" class="form-control"  name="email" /><br/>
	</div>
	<div  class="form-group">
		
	<label>Alamat</label>
	<input type="text"  class="form-control" name="alamat" /><br/>
	</div>
	<div  class="form-group">
		
	<!-- <label>Total Bayar</label>
	
	<input type="text" name="total" class="form-control"  value="<?php echo $vjml; ?>"><br/>
	</div> -->
	<input type="submit" value="Kirim"/>
	</form>
</div>