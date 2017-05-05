<?php
class M_akademik extends CI_Model{
	function get_prodi(){ 
		$query=$this->db->query("SELECT * FROM program_studi");
		return $query;
		
	}
	function get_maha(){ 
	$query=$this->db->query("SELECT * FROM mahasiswa");
		return $query;
		/*
		$this->db->order_by('nim','ASC');
		$query=$this->db->get("mahasiswa");
		return $query->result();*/
		
	}
	/*
	function get_data(){
	$this->load->library('table');
  $query = $this->db->query("select * from program_studi");
	}*/
	function del_prodi($kode){
	$query=$this->db->query("DELETE FROM program_studi WHERE kode_prodi='$kode'");	
	}
	
	
	function search_prodi(){
		$kword=strtolower($_POST['keyword']);;

		$query=$this->db->query("select * from PROGRAM_STUDI WHERE LOWER(NAMA_PRODI) LIKE '%$kword%'");
		return $query;
	}
	
	function get_edit_prodi($kode){
		//die("SELECT * FROM program_studi where kode_prodi='$kode'");
		$query=$this->db->query("SELECT * FROM program_studi where kode_prodi='$kode'");
		$row=$query->row();
		return $row;
	}
	function update_edit($kode){
		$kode=$this->input->post('kode_prodi');
		$nama=$this->input->post('nama_prodi');
		$query=$this->db->query("UPDATE program_studi SET kode_prodi='$kode', nama_prodi='$nama' where kode_prodi='$kode'");
	}
	
	
	function insert(){
		$kode=$this->input->post('kode_prodi');
		$nama=$this->input->post('nama_prodi');
		$query=$this->db->query("INSERT INTO  program_studi(kode_prodi,nama_prodi) VALUES('$kode','$nama')");
	}
}

?>