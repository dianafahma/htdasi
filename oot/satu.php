<?php
class kendaraan{
	private $warna;
	private $j_pintu;
	private $j_roda;
	private $harga;
	private $merk;
	
	public function __construct(){
		echo 'ini adalah objek kendaraan. <br/>';
	}
	public function set_harga($harga){
	$this->harga=$harga;
	}
	public function set_merk($merk){
	$this->merk=$merk;
	}
	
	public function show_harga(){
	echo 'harga kendaraan: rp.'.$this->harga.'.<br/>';
	}
	public function show_merk(){
	echo 'Merk kendaraan: '.$this->merk.'.<br/>';
	}
	public function jalan(){
	echo 'ngeeeenggggg!!!';
	}
	
	
	
}

$saya_adalah_object= new kendaraan;
$saya_adalah_object->set_harga(10000);
$saya_adalah_object->show_harga();
$saya_adalah_object->set_merk("Inova");
$saya_adalah_object->show_merk();
$saya_adalah_object->jalan();

	class Bapak{
		private $nama ="Ayah";
		function Bapak($n){
			$this->nama=$n;
			
		}
		function Hallo(){
			echo "halp. saasa $this->nama <br/>";
		}
	}
	
	class Anak extends Bapak{
		function Hai(){
		echo "hai dari kelas anak";
		}
	}
	
	$test = new Anak("Anak dari bapak");
	$test->Hallo();
?>