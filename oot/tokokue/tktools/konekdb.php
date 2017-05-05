<?php /*
class konekdb {

 public static function getDisplay(){
	$suplier='';
	$suplier .='Display Konek ';
	return $suplier;
 }*/
 $db = new mysql('localhost','php','php','db_pos');
 /*$sql ='SELECT * FROM pasien';
 $result = $db->query($sql);
 echo displayData($result);
 $db->close();

 function displayData($result){
	$suplier='';
	while ($row = $result->fetch_object()){
	//$suplier =htmlspecialchars($row->kode_pasien).'<br/>';
	$suplier =htmlspecialchars($row->nama_pasien);}
	return $suplier;
 }*/
 

?>