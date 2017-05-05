<?php/*
require_once('tktools/konekdb.php');
echo konekdb::getDisplay();
echo konekdb::displayData();
*/
echo loadPage();
//echo displayForm();


function loadPage(){
	$supplier='';
	$supplier .='<html><title></title><body>';
	$supplier .='<div id="atas"> Selamt';
	$supplier .='</div>';
	$supplier .= displayForm();
	//$supplier .='';
	$supplier .='</body></html>';
	return $supplier;
}


function displayForm(){
	$supplier='';
	//built form
	$supplier .= '<form method="post" action="data_pemasok.php">';
	$supplier .= '<table align="center" style="background-color:beige; width:320px; padding:10px; border:1px dashed #999">';
	
	$supplier .= displayRow('Kode Pemasok', '<input type="text" name="kodePemasok"/>');
	$supplier .= displayRow('Nama Pemasok', '<input type="text" name="namaPemasok"/>');
	$supplier .= displayRow('Alamat Pemasok', '<input type="text" name="alamatPemasok"/>');
	$supplier .= displayRow('Alamat Gudang', '<input type="text" name="alamatGudang"/>');
	$supplier .= displayRow('Kontak Pemasok', '<input type="text"	name="kontakPemasok"/>');
	$supplier .= displayRow('Cara Pembayaran', '<input type="text" name="caraHutang"/>');
	$supplier .= displayRow('', '<input type="submit" value="Pemasok Baru"/>');
	
	$supplier .= '</table>';
	$supplier .= '</form>';
	
	return $supplier;
	
}
function displayRow($left,$right){
	$supplier='';
	$supplier .='<tr>';
	$supplier .='<td width="150px">'.$left.'</td>';
	$supplier .='<td>'.$right.'</td>';
	$supplier .='</tr>';
	return $supplier;
}

?>