<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class shopping extends CI_Model
{
	
	#function __construct()
	#{
 #		parent::__construct();
 	#	$this->load->database();
	#}
	function get_list_item(){
		$query=$this->db->query("SELECT * from barang");
		return $query;
	}
	function get_list_pesan(){
		$query=$this->db->query("SELECT pesan.id_pesan AS 'no_pesan', barang.nama_barang AS 'nama_barang', barang.harga_barang AS 'harga_satuan', pesan.jumlah AS 'jml_pesan' FROM barang, pesan WHERE barang.kode_barang = pesan.kode_barang");
		return $query;
	}
	function get_list_pesanan(){
		$query=$this->db->query("SELECT id_trx, total from transaksi");
		return $query;
	}

	function input_trx(){
		$nam=$this->input->post('nama_pemesan');
		$hp=$this->input->post('hp');
		$email=$this->input->post('email');
		$alamat=$this->input->post('alamat');
		$query=$this->db->query("INSERT INTO transaksi (nama_pemesan,hp,email,alamat) VALUES ('$nam', '$hp', '$email','$alamat')");
	}
}
?>
