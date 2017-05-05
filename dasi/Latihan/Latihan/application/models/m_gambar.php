<?php
class M_gambar extends CI_Model {

	function get_list_data(){
		$query=$this->db->query("SELECT * FROM gambar ORDER BY id");
		return $query;
	}
	
	function insert(){
		$this->table="gambar";
		return $this->db->insert();
	}

}
?>	