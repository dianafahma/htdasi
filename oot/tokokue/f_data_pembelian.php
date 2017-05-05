<DOCTYPE! html>
<html>
<head> 
<title>Pembelian</title>
<link rel="stylesheet" media="all" href="gaya.css" type="css/text"/>
</head>

<body>
<div class="atas"> this is example</div>
<?php


echo displayForm();



function displayForm(){
	$purchase='';
	//built form data pembelian
	$purchase .= '<form method="post" action="data_pembelian.php">';
	
	$purchase .= '<table align="center" style="background-color:beige; width:320px; padding:10px; border:1px dashed #999">';
	$purchase .= displayTitleForm();
	$purchase .= displayRow('Tanggal ', '<input type="text" name="tglPembelian"/>');
	$purchase .= displayRow('Pengiriman ', '<input type="text" name="tglKirim"/>');
	$purchase .= displayRow('No Order', '<input type="text" name="noOrder"/>');
	$purchase .= displayRow('Nama Pemasok', '<input type="text" name="namaPemasok"/>');
	$purchase .= displayRow('','<input type="radio" value="ready" name="jenisPasokan" checked="checked"/>Ready'.'<br/>'.'<input type="radio" value="semi" name="jenisPasokan" checked="checked"/>Semi');
	$purchase .= displayRow('Cara Pembayaran', '<input type="text" name="caraHutang"/>');
	
	$purchase .= displayRow('Nama Barang', '<input type="text" name="namaBarang"/>');
	$purchase .= displayRow('Jenis Pasokan', '<input type="text" name="alamatGudang"/>');//NEED TO EDIT
	$purchase .= displayRow('Jumlah Barang', '<input type="text"	name="jumlahBarang"/>');
	$purchase .= displayRow('Satuan Barang', '<input type="text"	name="satuanBarang"/>');
	$purchase .= displayRow('Harga Barang', '<input type="text"	name="hargaBarang"/>');
	$purchase .= displayRow('Total Pembelian', '<input type="text"	name="total"/>');
	$purchase .= displayRow('', '<input type="submit" value="Pembelian Baru"/>');
	
	$purchase .= '</table>';
	$purchase .= '</form>';
	
	return $purchase;
	
}
function displayRow($left,$right){
	$purchase='';
	$purchase .='<tr>';
	$purchase .='<td width="150px">'.$left.'</td>';
	$purchase .='<td>'.$right.'</td>';
	$purchase .='</tr>';
	return $purchase;
}
/*
function displayType(){
	$purchase='';
	//$ready='Ready Goods';
	//$semi='Semi Goods';
	$purchase .='<tr>';
	$purchase .=$ready.$semi;
	//$purchase .='<td>'.$ready.$semi.'</td>';
	$purchase .='</tr>';
	return $purchase;
}*/

function displayTitleForm(){
	$purchase='';
	$purchase .='<tr>';
	$purchase .='<td colspan="2">'.'<h2>Form Pembelian Persedian</h2>'.'</td>';
	$purchase .='</tr>';
	return $purchase;
}
?>
<footer>&copy nsmksn</footer>
</body>

</html>