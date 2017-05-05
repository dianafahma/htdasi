<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_order extends CI_Model {

	public function __construct(){
	parent::__construct();
	}
	
	function ambildata(){
		$query=$this->db->query("SELECT * FROM tbl_pemesanan");
		$row=$query->row();
		return $row;
	 	}


// 	function insert_ke_tbl_pesan($vnama,$vharga,$vkode){
	
// 	}
// }

	function insert_ke_tbl_pemesanan($vnama,$vharga,$vkode){
	$m=count($vnama);
	$i=1;
	while ( $i<= $m) {
		$query=$this->db->query("INSERT INTO tbl_pesan (kode_produk, harga) VALUES ('$vkode', '$vharga') ");
		$query=$this->db->query("UPDATE tbl_product SET stok=(stok-1) where kode_produk = '$vkode' ");
		$i=$i+1;
	}

	$vno=$this->input->post('no_pemesanan');
	$vnama_dpn=$this->input->post('nama_depan');
	$vnama_belakang=$this->input->post('nama_belakang');
	$vemail=$this->input->post('email');
	$vnohp=$this->input->post('no_hp');
	$valamat=$this->input->post('alamat');
	$query=$this->db->query("INSERT INTO tbl_pemesanan (no_pemesanan, nama_depan, nama_belakang, email, no_hp, alamat) VALUES ('$vno', '$vnama_dpn', '$vnama_belakang','$vemail', '$vnohp', '$valamat')");
	}

}
