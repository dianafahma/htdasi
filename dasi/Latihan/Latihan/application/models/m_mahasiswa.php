<?php
	class M_mahasiswa extends CI_Model{
	
	function get_list_data(){
	$query=$this->db->query("select * from ccdp order by nim");
	return $query;
	}
//function view_detail
	function get_detail_data($vnim){
	$query=$this->db->query("SELECT * FROM ccdp WHERE nim='$vnim'");
	$rows=$query->row();
	return $rows;
	}
//function delete
	function delete_data($vnim){
	$query=$this->db->query("DELETE FROM ccdp WHERE nim='$vnim'");
	}
//function update
	function get_update_data($vnim){
	$query=$this->db->query("SELECT * FROM ccdp WHERE nim='$vnim'");
	$row=$query->row();
	return $row;
	}
	function update_data_db($vnim){
	$vnim=$this->input->post('nim');
	$vnama=$this->input->post('nama');
	$valamat=$this->input->post('alamat');
	$vjurusan=$this->input->post('jurusan');
	$vangkatan=$this->input->post('angkatan');
	$query=$this->db->query("UPDATE ccdp SET  nim='$vnim',nama='$vnama',alamat='$valamat',jurusan='$vjurusan',angkatan='$vangkatan' WHERE nim='$vnim'");
	}
//function search
	function search(){
	$kword=$this->input->post('keyword');
	$query=$this->db->query("SELECT * FROM ccdp WHERE nim like '%$kword%'  or nama like '%$kword%' or angkatan like '%$kword%'");
	return $query;
	}
//function insert data
	function insertdata(){
	$vnim=$this->input->post('nim');
	$vnama=$this->input->post('nama');
	$valamat=$this->input->post('alamat');
	$vjurusan=$this->input->post('jurusan');
	$vangkatan=$this->input->post('angkatan');
	$query=$this->db->query("INSERT INTO ccdp(nim,nama,alamat,jurusan,angkatan) VALUES ('$vnim','$vnama','$valamat','$vjurusan','$vangkatan')");
	}
//function pagination
	function get_all_pagination($perPage,$uri) {
	$this->db->select('*');
	$this->db->from('ccdp');
	$this->db->order_by('nim','DESC');
	
		$getdata = $this->db->get('',$perPage,$uri);
		if($getdata->num_rows()>0)
			return $getdata->result_array();
		else
			return null;
		}
}
?>