<?php
class M_camp extends CI_Model{

	function get_all_pagination(){
		$query=$this->db->query("select * from mahasiswa order by nim");
		return $query;
	}
	function search(){
		$kword=$this->input->post('keyword');
		$query=$this->db->query("select * from mahasiswa WHERE nama like '%$kword%'");
		return $query;
	}
  function dataregister(){
	$vnama=$this->input->post('name');
	$vemail=$this->input->post('email');
	$vtelp=$this->input->post('telp');
	$vala=$this->input->post('address');
	$vwaktu=$this->input->post('duration');
	$vjml=$this->input->post('numb_child');
	$vanak=$this->input->post('name_child');
	$vumur=$this->input->post('age');
	$query=$this->db->query("INSERT INTO test.register (id,name, email, telp, address,duration,numb_child,name_child,age) VALUES ('null','$vnama', '$vemail', '$vtelp','$vala','$vwaktu','$vjml','$vanak','$vumur')");
	}
	function sendmessage(){
	$vnama=$this->input->post('name');
	$vemail=$this->input->post('email');
	$vsub=$this->input->post('subject');
	$vpesan=$this->input->post('mes');
	$query=$this->db->query("INSERT INTO test.message (id,name, email, subject,mes) VALUES ('null','$vnama', '$vemail', '$vsub','$vpesan')");
	}
	
	function datanilai(){
	$this->db->select('mahasiswa.nim AS  "nim", mklh.kdmk AS  "kdmk", nilai.indeks AS  "index"');
	$this->db->from('mahasiswa, mklh, nilai');
	$this->db->where('mahasiswa.nim = nilai.nim AND mklh.kdmk = nilai.kdmk');
	$getdata=$this->db->get();
	if($getdata->num_rows()>0)
	return $getdata->result_array();
	else 
	return null;
/*
		$sql="SELECT mahasiswa.nim AS  'nim', mklh.kdmk AS  'kode mata kuliah', nilai.indeks AS  'indeks'
	FROM mahasiswa, mklh, nilai
	WHERE mahasiswa.nim = nilai.nim
	AND mklh.kdmk = nilai.kdmk
	LIMIT 0 , 30";*/
	}
	function get_nilai(){
		$query=$this->db->query("SELECT * FROM nilai");
		//$row=$query->row();
//		$kode_prodi=$this->db->get('kode_prodi');
		return $query;
	}
	
	function get_detail_data($vnim){
		$query=$this->db->query("SELECT * FROM mahasiswa WHERE nim='$vnim'");
		$row=$query->row();
		return $row;
	}
	function delete_data($vnim){
		$query=$this->db->query("DELETE FROM mahasiswa WHERE nim='$vnim'");
	}
}
?>