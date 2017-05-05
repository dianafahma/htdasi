<div class="container">
<h2>Daftar Barang yang Dipesan</h2>
<table class="table-responsive table-bordered">
	<tr>
		<td>Kode Barang</td>
		<td>Nama Barang</td>
		<!-- <td>Gambar</td> -->
		<td>Harga</td>
		<td>Jumlah</td>
		<td>SubTotal</td>
		<td>Action </td>
	</tr>

	 <?php session_start();
	 #include('header.php');
	 echo form_open('belanja/transaksi');
	 if(!empty($pesanan))
	 	$i=1;
	 $total=0;

	foreach($pesanan as $index => $data)
	{

		$kode= $data[0];
		$nama= $data[1]; 
		$harga= $data[2]; 

		$stotal= $data[2]*1;
		$total=$total+$stotal;
		$_SESSION['vkode'][$i]=$data[0];
		$_SESSION['vname'][$i]=$data[1];
		$_SESSION['vharga'][$i]=$data[2];
		$i=$i+1;

?>
	<tr>
		<td><input type="text" name="kode" value="<?php echo $kode;?>" /></td>
		<td><?php echo $nama;?></td>
		<td><?php 
	$jum=1;
		echo $harga;?></td>
		<td><input type="text" name="jum" value="<?php echo $jum;?>"/><?php #cek di google cara input dan perhitungan session ?></td> 
		<td><?php $sub=$harga*$jum;
		echo $sub?></td>
		<td><?php echo anchor('belanja/destroy','Delete','class="btn btn-success"')?></td>
		<td><?php echo anchor('belanja/destroyall','Hapus Semua','class="btn btn-success"')?></td>
	</tr>
		<?php
		// $total=$sub;
		// $total=$total+$total;
		// $i=$i+1;
	}
	?>
	<tr>
		<td colspan="5" align="right"><?php echo $total; ?></td>
		</tr>
</table>

<input class="btn btn-warning" type="submit" value="Confirm">
<?php echo form_close();?>
<?php echo anchor('belanja/','Continue Shopping','class="btn btn-warning"')?>
</div>