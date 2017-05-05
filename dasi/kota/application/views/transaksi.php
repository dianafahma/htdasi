<div>
	<?php echo form_open('belanja/proses_beli') ;

		$i=1;
		while ($i <= 100) {
			$no=1;
			$i++;
		}

	?>
	<label>Id Transaksi	</label>
	<input type="text" name="id_trx" value="<?php echo $no;?>" ><br/>
	<label>Nama Pemesan</label>
	<input type="text" name="nama_pemesan" required/><br/>
	<label>HP</label>
	<input type="text" name="hp" /><br/>
	<label>Email</label>
	<input type="text" name="email" /><br/>
	<label>Alamat</label>
	<input type="text" name="alamat" /><br/>
	<label>Total Bayar</label>
	<input type="text" name="total" value="<?php #echo $sub; ?>"><br/>
	<input type="submit" value="Kirim"/>
	</form>
</div>