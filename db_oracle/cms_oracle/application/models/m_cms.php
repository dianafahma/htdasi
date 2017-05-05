<?php
class M_cms extends CI_Model{

	
	function get_murid(){ 
	$query=$this->db->query("SELECT * FROM murid_baru");
		return $query;
		/*
		$this->db->order_by('nim','ASC');
		$query=$this->db->get("mahasiswa");
		return $query->result();*/
		
	}
		function sort_nama_a(){ 
	$query=$this->db->query("select * from murid_baru order by nama_murid asc");
		return $query;
	}
			function sort_nama_d(){ 
	$query=$this->db->query("select * from murid_baru order by nama_murid desc");
		return $query;
	}

		function sort_un_a(){ 
	$query=$this->db->query("select * from murid_baru order by nilai_un asc");
		return $query;
	}
			function sort_un_d(){ 
	$query=$this->db->query("select * from murid_baru order by nilai_un desc");
		return $query;
	}
			function sort_us_a(){ 
	$query=$this->db->query("select * from murid_baru order by nilai_us asc");
		return $query;
	}
			function sort_us_d(){ 
	$query=$this->db->query("select * from murid_baru order by nilai_us desc");
		return $query;
	}




		function insert(){
		$kode=$this->input->post('kode_daftar');
		$nama=$this->input->post('nama_murid');
		$alamat=$this->input->post('asal_sekolah');
		$nun=$this->input->post('nilai_un');
		$nus=$this->input->post('nilai_us');
		$query=$this->db->query("INSERT INTO  murid_baru(kode_daftar,nama_murid, asal_sekolah,nilai_un,nilai_us) VALUES('$kode','$nama','$alamat','$nun','$nus')");
	}
	function search_murid(){
		$kword=strtolower($_POST['keyword']);

		$query=$this->db->query("select * from  murid_baru WHERE LOWER(NAMA_MURID) LIKE '%$kword%' or LOWER(NILAI_UN) LIKE '%$kword%' ");
		return $query;
	}
		function del_murid($kode){
	$query=$this->db->query("DELETE FROM murid_baru WHERE kode_daftar='$kode'");	
	}


		function get_edit_murid($kode){
		//die("SELECT * FROM program_studi where kode_prodi='$kode'");
		$query=$this->db->query("SELECT * FROM murid_baru where kode_daftar='$kode'");
		$row=$query->row();
		return $row;
	}
	function update_edit($kode){
		$kode=$this->input->post('kode_daftar');
		$nama=$this->input->post('nama_murid');
		$alamat=$this->input->post('asal_sekolah');
		$nun=$this->input->post('nilai_un');
		$nus=$this->input->post('nilai_us');
		$query=$this->db->query("UPDATE murid_baru SET kode_daftar='$kode', nama_murid='$nama', asal_sekolah='$alamat', nilai_un='$nun', nilai_us='$nus' where kode_daftar='$kode'");
	}

	/*
	function get_data(){
	$this->load->library('table');
  $query = $this->db->query("select * from program_studi");
	}*/
	/*

	
	
	
	

	*/
	

}

?>