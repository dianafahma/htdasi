<?php
class M_hrd extends CI_Model{

	function get_kar(){
		$this->db->select('*');
		$this->db->from('karyawan');
		$this->db->order_by('id_kar');
		$get_data = $this->db->get('');
		if ($get_data->num_rows()>0)
			return $get_data->result_array();
		else
			return null;
	}
	function get_dreport(){
		$this->db->select('*');
		$this->db->from('daily');
		$this->db->order_by('no');
		$get_data = $this->db->get('');
	if ($get_data->num_rows()>0)
		return $get_data->result_array();
	else
		return null;
	}
	function get_absen(){
		$this->db->select('*');
		$this->db->from('absen');
		$this->db->order_by('id_kar');
		$get_data = $this->db->get('');
	if ($get_data->num_rows()>0)
		return $get_data->result_array();
	else
		return null;
	}



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