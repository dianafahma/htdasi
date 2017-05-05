<?php 
	class M_kota extends CI_Model {


		function test($vkode,$vnama,$vharga,$vjmlb){
			 #echo $kode[1];
			 #break;
			// echo $nama[1];
			#$i=1;
			echo $vkode;
			echo $vnama;
			// $vkode=$kode[i];
			// $vnama=$nama[i];
			#echo $kode;

			$psn="PSN01";
			//pemesanan = insert , pesan = insert , barang = update
			//input ke tabel pemesanan
			$query=$this->db->query("INSERT INTO transaksi (id_trx,nama_pemesan,alamat,email,hp,total) VALUES ('$psn','Danu','Maguwo','danu@mail.com','09888333','$total')");
			//Input ke tabel pesan
			$psn="PSN01";
			$i=1;
			while ($i <= 3) {
				$query=$this->db->query("INSERT INTO pesans (no_pesan,kode_barang,harga,jumlah) VALUES ('$psn','$vkode',$vharga,$vjmlb)");
				# update daftar barang stok
				$query=$this->db->query("UPDATE barangs SET stok_barang = (stok_barang - $vjmlb) WHERE kode_barang = '$vkode' ");
				$i=$i+1;
			}

		}

		function test1($vkode,$vnama,$vharga,$vjmlb,$subtotal){
			echo $vkode;
			$psn="PSN04";
			//input ke tabel pemesanan
			$query=$this->db->query("INSERT INTO transaksi (id_trx,nama_pemesan,alamat,email,hp,total) VALUES ('$psn','Danu','Maguwo','danu@mail.com','09888333','$subtotal')");
		}

		function test2($vkode,$vnama,$vharga,$vjmlb){
			echo $vkode;
			$psn="PSN04";
			$query=$this->db->query("INSERT INTO pesans (no_pesan,kode_barang,harga,jumlah) VALUES ('$psn','$vkode',$vharga,$vjmlb)");

		}

		function test3($vkode,$vnama,$vharga,$vjmlb){
	
		echo $vkode;
			$psn="PSN04";
			//input ke tabel pemesanan
			$query=$this->db->query("UPDATE barangs SET stok_barang = (stok_barang - $vjmlb) WHERE kode_barang = '$vkode' ");
		}


		function get_join(){
			$query=$this->db->query("SELECT mahasiswa.nim AS  'nim', mklh.kdmk AS  'kodematakuliah', nilai.index AS  'index' FROM mahasiswa, mklh, nilai WHERE mahasiswa.nim = nilai.nim AND mklh.kdmk = nilai.kdmk");
	return $query;
		}
	



	#This is change to cart
	function get_list_data(){
	$query=$this->db->query("SELECT * FROM barang ");
	return $query;
	}

	function input_trx(){
	$vid=$this->input->post('id_trx');
	$vnama_kota=$this->input->post('nama_kota');
	$vpenduduk=$this->input->post('penduduk');
	$query=$this->db->query("INSERT INTO kota(id_kota,nama_kota,penduduk) VALUES ('$vid_kota','$vnama_kota','$vpenduduk')");	
	}

	
	function insertdata(){
	$vid_kota=$this->input->post('id_kota');
	$vnama_kota=$this->input->post('nama_kota');
	$vpenduduk=$this->input->post('penduduk');
	$query=$this->db->query("INSERT INTO kota(id_kota,nama_kota,penduduk) VALUES ('$vid_kota','$vnama_kota','$vpenduduk')");
	}
	
	
	function get_detail_data($vid){
		$query=$this->db->query("SELECT * FROM barang WHERE kode_barang='$vid'");
		$rows=$query->row();
		return $rows;
	}
	


	function delete_data($vid_kota){
	$query=$this->db->query("DELETE FROM kota WHERE id_kota='$vid_kota'");
	}
	
	function search(){
	$kword=$this->input->post('keyword');
	$query=$this->db->query("SELECT * FROM kota WHERE nama_kota like '%$kword%'");
	return $query;
	}
	
	function get_update_data($vid_kota){
	$query=$this->db->query("SELECT * FROM kota WHERE id_kota='$vid_kota'");
	$row=$query->row();
	return $row;
	}
	function update_data_db($vid_kota){
	$vnim=$this->input->post('id_kota');
	$vnama=$this->input->post('nama_kota');
	$vumur=$this->input->post('penduduk');
	$query=$this->db->query("UPDATE kota SET  id_kota='$vid_kota',nama_kota='$vnama_kota',penduduk='$vpenduduk' WHERE id_kota='$vid_kota'");
	}
}
?>