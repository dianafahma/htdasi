<?php
	class M_mahasiswa extends CI_Model{
	
		function get_list_data()
		{
		$query=$this->db->query("select * from mahasiswa order by Nim");
			return $query;
	
	}
	function get_detail_data($vnim){
	$query=$this->db->query("SELECT * FROM mahasiswa WHERE nim='$vnim'");
	$rows=$query->row();
	return $rows;
	}
	
	
	}


?>