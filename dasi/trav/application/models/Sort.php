<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sort extends CI_Model {
	function get_list(){
	$query=$this->db->query("SELECT * FROM kota order by id_kota");
	return $query;
	}
	function get_detail($vid){
	$query=$this->db->query("SELECT * FROM kota WHERE id_kota='$vid'");
	$rows=$query->row();
	return $rows;
	}
}
