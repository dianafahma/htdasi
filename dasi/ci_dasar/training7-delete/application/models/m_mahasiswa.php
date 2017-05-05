<?php
class M_mahasiswa extends CI_Model{

	function get_list_data(){
		$query=$this->db->query("select * from mahasiswa order by nim");
		return $query;
	}
	
	
	function get_all(){
		$query="select * from mahasiswa order by nim";
		$query=$this->db->query($query);
		
		return $query->num_rows();
	}
	
  function insertdata(){
	$vnim=$this->input->post('nim');
	$vnama=$this->input->post('nama');
	$vumur=$this->input->post('umur');
	$query=$this->db->query("INSERT INTO mahasiswa(nim, nama, umur) VALUES ('$vnim', '$vnama', '$vumur')");
	}
	function get_detail_data($vnim){
		$query=$this->db->query("SELECT * FROM mahasiswa WHERE nim='$vnim'");
		$row=$query->row();
		return $row;
	}
	function delete_data($vnim){
		$query=$this->db->query("DELETE FROM mahasiswa WHERE nim='$vnim'");
	}
	
	  function get_all_pagination($perPage,$uri) { //to get all data in table mahasiswa

    $this->db->select('*');
    $this->db->from('mahasiswa');
    $this->db->order_by('nim','DESC');

    $getdata = $this->db->get('', $perPage, $uri);
    if($getdata->num_rows() > 0)
       return $getdata->result_array();
    else
       return null;
  }
}
?>