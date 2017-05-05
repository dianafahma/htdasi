<?php
require_once("koneksi.php");
//echo keranjang();

function keranjang(){
	echo'<form>';
	$barangs = mysql_query("SELECT * FROM tw_produk ORDER BY produk_id DESC");
	if ($barangs === FALSE) {
		die(mysql_error());
	}
	echo '<table border="1"><tr><td>Nama Barang</td><td>Harga</td><td>Opsi</td></tr>';
	while($bar = mysql_fetch_array($barangs))
	{
	echo '<td>'.$bar['produk_nama'].'</td>
	<td>'.$bar['produk_harga'].'</td>
	<td>'.'<input type="text" name="produk_jumlah" />'.'</td>
	<td><input type="submit" value="Pesan"/></td></tr>';	
	$value=$bar['produk_id'];
	echo $value;
	}
	echo '</table>';
	echo '</form>';
}




?>