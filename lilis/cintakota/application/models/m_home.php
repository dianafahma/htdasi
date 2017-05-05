<?php
class M_home extends CI_Model{

	function get_list_data(){
		$query = $this->db->query("SELECT * FROM berita ORDER BY tanggal DESC");
		return $query;
	}
	function get_detail_rep($vusername = null){
		$query=$this->db->query("SELECT * FROM member WHERE username='$vusername'");
		$rows=$query->row();
		return $rows;
	}
	function get_detail_redaksi($vusername = null){
		$query=$this->db->query("SELECT * FROM login WHERE username='$vusername'");
		$rows=$query->row();
		return $rows;
	}
	function get_detail_reporter($vusername = null){
		$query=$this->db->query("SELECT * FROM member WHERE username='$vusername'");
		$rows=$query->row();
		return $rows;
	}
	function insert_kontak(){
		function insert($data){
		$this->table="berita";
		return $this->db->insert($this->table,$data);
		}
	}
}
?>