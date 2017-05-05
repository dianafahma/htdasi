<?php
class M_mahasiswa extends CI_Model{

	function get_list_data(){ //get_all_data //get_all_pagination
		$query=$this->db->query("select * from mahasiswa order by nim");
		return $query;
	}
	function search(){
		$kword=$this->input->post('keyword');
		$query=$this->db->query("select * from mahasiswa WHERE nama like '%$kword%'");
		return $query;
	}

	function insertdata(){
		$vnim=$this->input->post('nim');
		$vnama=$this->input->post('nama');
		$vumur=$this->input->post('umur');
		$query=$this->db->query("INSERT INTO mahasiswa(nim, nama, umur) VALUES ('$vnim', '$vnama', '$vumur')");
		return $row;
	}
	
	
		function get_detail_data($vnim){
		$query=$this->db->query("SELECT * FROM mahasiswa WHERE nim='$vnim'");
		$row=$query->row();
		return $row;
	}
	function get_update_data($vnim){
		$query=$this->db->query("SELECT * FROM mahasiswa WHERE nim='$vnim'");
		$rows=$query->row();
		return $rows;
	}
	function delete_data($vnim){
		$query=$this->db->query("DELETE FROM mahasiswa WHERE nim='$vnim'");
	}
	
	function update_data_db($vnim){
		$vnim=$this->input->post('nim');
		$vnama=$this->input->post('nama');
		$vumur=$this->input->post('umur');
		$query=$this->db->query("UPDATE mahasiswa SET nim='$vnim', nama='$vnama', umur='$vumur' WHERE nim='$vnim'" );
		
	}	
	}

?>