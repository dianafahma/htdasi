<?php
class M_tugas extends CI_Model{

	function get_list_data(){
		
		$query=$this->db->query("select * from tugas ORDER BY id");
		return $query;
		
		
	}
	function insertdata($namafile,$deskripsi){
		$tanggal=date('Y-m-d');
		$query=$this->db->query("INSERT INTO tugas(judul,file,tanggal) VALUES ('$deskripsi','$namafile','$tanggal')");
		
	}
}
?>
