<?php
echo displayForm();

function displayForm(){
	$sale='';
	//built form data pembelian
	$sale .= '<form method="post" action="data_penjualan.php">';
	
	$sale .= '<table align="center" style="background-color:beige; width:320px; padding:10px; border:1px dashed #999">';
	$sale .= displayTitleForm();
	$sale .= displayRow('Tanggal ', '<input type="text" name="tglPenjualan"/>');
	$sale .= displayRow('Pengiriman ', '<input type="text" name="tglKirim"/>');
	$sale .= displayRow('Nama Pembeli', '<input type="text" name="namaPembeli"/>');
	$sale .= displayRow('Alamat Pembeli/Pengiriman', '<input type="text" name="alamatPembeli"/>');
	$sale .= displayRow('No Jual', '<input type="text" name="noJual"/>');
	//$sale .= displayRow('Ready','<input type="radio" value="ready"/>');
	$sale .= displayRow('Cara Pembayaran', '<input type="text" name="caraPiutang"/>');
	$sale .= displayRow('Nama Barang', '<input type="text" name="namaBarang"/>');
	
	$sale .= displayRow('Jumlah Barang', '<input type="text"	name="jumlahBarang"/>');
	$sale .= displayRow('Satuan Barang', '<input type="text"	name="satuanBarang"/>');
	$sale .= displayRow('Harga Jual', '<input type="text"	name="hargaJual"/>');
	$sale .= displayRow('Total Penjualan', '<input type="text"	name="total"/>');
	$sale .= displayRow('', '<input type="submit" value="Penjualan Baru"/>');
	
	$sale .= '</table>';
	$sale .= '</form>';
	
	return $sale;
	
}
function displayRow($left,$right){
	$sale='';
	$sale .='<tr>';
	$sale .='<td width="150px">'.$left.'</td>';
	$sale .='<td>'.$right.'</td>';
	$sale .='</tr>';
	return $sale;
}
/*
function displayType(){
	$sale='';
	//$ready='Ready Goods';
	//$semi='Semi Goods';
	$sale .='<tr>';
	$sale .=$ready.$semi;
	//$sale .='<td>'.$ready.$semi.'</td>';
	$sale .='</tr>';
	return $sale;
}*/

function displayTitleForm(){
	$sale='';
	$sale .='<tr>';
	$sale .='<td colspan="2">'.'<h2>Form Penjualan Persedian</h2>'.'</td>';
	$sale .='</tr>';
	return $sale;
}
?>