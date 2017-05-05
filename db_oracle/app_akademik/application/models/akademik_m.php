<?php
class akademik_m extends CI_MOdel{
	function index(){
			
	}
	function prodi_data(){
		$query=$this->db->query("SELECT * FROM program_studi");
		//$row=$query->row();
//		$kode_prodi=$this->db->get('kode_prodi');
		return $query;
		
	}
}
?>