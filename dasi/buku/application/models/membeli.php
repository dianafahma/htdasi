<?php 
	class membeli extends CI_Model {

	//mengambil data dan menampilkannya pada list
	function get_list_data(){
	$query=$this->db->query("SELECT * FROM buku ");
	return $query;
	}

	//menampilkan detail barang per item
	function get_detail_data($vid){
		$query=$this->db->query("SELECT * FROM buku WHERE id_buku='$vid'");
		$rows=$query->row();
		return $rows;
	}

	//menyimpan data pesanan dan pelanggan
	function input_trx($vkode,$vname,$vharga,$vjml){
	$n=count($vkode);
	 $i=1;
			while ($i <= $n) {
				$query=$this->db->query("INSERT INTO pesan (id_buku,harga,jumlah) VALUES ('$vkode',$vharga,$vjml)");
				$query=$this->db->query("UPDATE buku SET stok = (stok - 1) WHERE id_buku = '$vkode' ");
				$i=$i+1;
			}
	}

	function proses_trx($total){

		$vid=$this->input->post('id_trx');
		$vnama_pemesan=$this->input->post('nama_pemesan');
		$vhp=$this->input->post('hp');
		$vemail=$this->input->post('email');
		$vala=$this->input->post('alamat');

		// $n=count($vkode);
		// 	 $i=1;
		// 	while ($i <= $n) {
				// $vtotal=$Vtotal+$vjml;
			// 	$i=$i+1;
			// }

		
		$query=$this->db->query("INSERT INTO pemesanan (id_pemesanan, nama,hp,email, alamat,total) VALUES ('$vid','$vnama_pemesan','$vhp','$vemail','$vala','$total')");	
	}

	// function search(){
	// $kword=$this->input->post('keyword');
	// $query=$this->db->query("SELECT * FROM barangs WHERE nama_barang like '%$kword%'");
	// return $query;
	// }

	// function cat_bukutulis(){
	// 	$query=$this->db->query("SELECT * FROM `barangs` WHERE kode_barang LIKE '%BT%'");
	// 	return $query;
	// }
	// function cat_alattulis(){
	// $query=$this->db->query("SELECT * FROM `barangs` WHERE kode_barang LIKE 'P%'");
	// return $query;
	// }

}
?>
