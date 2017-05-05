<?php
	class M_home extends CI_Model{

		function ambildata(){
		$query=$this->db->query("SELECT * FROM tbl_registrasi");
		$row=$query->row();
		return $row;
	 	}

		function insertdata(){
	$vno=$this->input->post('no');
	$vnama=$this->input->post('nama');
	$valamat=$this->input->post('alamat');
	$query=$this->db->query("INSERT INTO tbl_registrasi (no, nama, alamat) VALUES ('$vno', '$vnama', '$valamat')");
	}
}
?>