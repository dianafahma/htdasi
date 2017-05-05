<?php 
	class membeli extends CI_Model {

	//mengambil data dan menampilkannya pada list
	function get_list_data(){
	$query=$this->db->query("SELECT * FROM barangs ");
	return $query;
	}

	//menampilkan detail barang per item
	function get_detail_data($vid){
		$query=$this->db->query("SELECT * FROM barangs WHERE kode_barang='$vid'");
		$rows=$query->row();
		return $rows;
	}

	// function delete($vid){
	// 	$pesanan = $this->session->userdata('pesanan');
	// 	$this->session->set_userdata('pesanan',$vid);//"SELECT * FROM '$pesanan' WHERE kode_barang='$vid'");
	// 	// $rows=$query->row();
	// 	// return $rows;
	// }

	//menyimpan data pesanan dan pelanggan
	function input_trx($vkode,$vname,$vharga){
		$vsub=1;
	echo $vkode.$vname.$vharga.$vsub;
	// break;
	
	// $query=$this->db->query("INSERT INTO transaksi (nama_pemesan,hp,email, alamat) VALUES ('$vnama_pemesan','$vhp','$vemail','$vala','$vtotal')");	
	// $query=$this->db->query("INSERT INTO transaksi (id_kota,nama_kota,penduduk) VALUES ('$vid_kota','$vnama_kota','$vpenduduk')");	
	}

	function proses_trx(){
		$vid=$this->input->post('id_trx');
		$vnama_pemesan=$this->input->post('nama_pemesan');
		$vhp=$this->input->post('hp');
		$vemail=$this->input->post('email');
		$vala=$this->input->post('alamat');
		$vtotal=$this->input->post('total');
		$query=$this->db->query("INSERT INTO transaksi (nama_pemesan,hp,email, alamat,total) VALUES ('$vnama_pemesan','$vhp','$vemail','$vala','$vtotal')");	
	}

	function search(){
	$kword=$this->input->post('keyword');
	$query=$this->db->query("SELECT * FROM barangs WHERE nama_barang like '%$kword%'");
	return $query;
	}

	function cat_bukutulis(){
		$query=$this->db->query("SELECT * FROM `barangs` WHERE kode_barang LIKE '%BT%'");
		return $query;
	}
	function cat_alattulis(){
	$query=$this->db->query("SELECT * FROM `barangs` WHERE kode_barang LIKE 'P%'");
	return $query;
	}

}
?>
