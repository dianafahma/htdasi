<?php
class M_nilai extends CI_Model{
	function get_list_data(){
	$this->db->select('mahasiswa.nim AS  "nim", mklh.kdmk AS  "kdmk", nilai.index AS  "index"');
	$this->db->from('mahasiswa, mklh, nilai');
	$this->db->where('mahasiswa.nim = nilai.nim AND mklh.kdmk = nilai.kdmk');
	$getdata=$this->db->get();
	if($getdata->num_rows()>0)
	return $getdata->result_array();
	else 
	return null;
	//$query="SELECT mahasiswa.nim AS  'nim', mklh.kdmk AS  'kodematakuliah', nilai.index AS  'index' FROM mahasiswa, mklh, nilai WHERE mahasiswa.nim = nilai.nim AND mklh.kdmk = nilai.kdmk";
	//return $query;
	}

	function input_data($vnim,$vnamafile){
	$n='upload/'.'$vnamafile';
	$query=$this->db->query("INSERT INTO mahasiswa (nim,filefoto) VALUES ('$vnim','$n')");
	}
}
?>