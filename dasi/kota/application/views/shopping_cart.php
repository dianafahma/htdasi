<table border="1">
	<tr>
		<td>Kode Barang</td>
		<td>Nama Barang</td>
		<!-- <td>Gambar</td> -->
		<td>Harga</td>
		<td>Jumlah</td>
		<td>SubTotal</td>
		<td>--</td>
	</tr>

	 <?php session_start();
	 echo form_open('belanja/transaksi');
	 if(!empty($pesanan))
	 	$i=1;
	foreach($pesanan as $index => $data)
	{

		$kode= $data[0];
		$nama= $data[1]; 
		#$gm= $data[2];
		$harga= $data[3]; 
		$jumlah=($data[3]);


		$_SESSION['vkode'][$i]=$data[0];
		$_SESSION['vname'][$i]=$data[1];
		// $_SESSION['vgm'][$i]=$data[2];
		$_SESSION['vharga'][$i]=$data[3];
		$i=$i+1;

?>
	<tr>
		<td><input type="text" name="kode" value="<?php echo $kode;?>" </td>
		<td><?php echo $nama;?></td>
		<!-- <td><?php echo $gm;?></td> -->
		<td><?php 
	$jum=1;
		echo $harga;?></td>
		<td><input type="text" name="jum" value="<?php echo $jum;?>"/><?php #cek di google cara input dan perhitungan session ?></td> 
		<td><?php $sub=$harga*$jum;
	
		echo $sub?></td>
		<td><?php echo anchor('belanja/destroy','Delete')?></td>
		<td><?php echo anchor('belanja/destroyall','Hapus Semua')?></td>
	</tr>
		<?php
	}

	// $sub=0;
	// $sub=$jumlah+$jumlah;
	?>
	<tr><!-- 
		<td colspan="5">&nbsp;</td>
		<td ><?php echo $sub;?></td> cek cara ngehitung jumlah di session
	</tr -->
</table>
<input type="submit" value="Confirm">
<?php echo form_close();?>
<?php echo anchor('belanja/','Continue Shopping')?>
