<?php
class clean_m extends CI_Model{
	function get_list_orang($perPage,$uri){
	  $this->db->select('*');
	  $this->db->from('orang');
	  $get_data=$this->db->get('',$perPage,$uri);
	  if($get_data->num_rows()>0)
	  	return $get_data->result_array();
	  else
	  	return null;
	}
}