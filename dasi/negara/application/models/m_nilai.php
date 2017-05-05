<?php
class M_nilai extends CI_Model{

	function get_list_data(){
	$query = "SELECT mahasiswa.nim AS  'nim', mklh.kdmk AS  'kodematakuliah', nilai.index AS  'index' FROM mahasiswa, mklh, nilai WHERE mahasiswa.nim = nilai.nim AND mklh.kdmk = nilai.kdmk";
	return $query;

	}
}
?>