<?php 
/**
* 
*/
class M_bias extends CI_Model
{
	function room_list(){
	$this->db->select('*');
	$this->db->from('room');
	//$this->db->order_by('avail','ASC');
	$getroom = $this->db->get();
	if ($getroom->num_rows()>0)
		return $getroom->result_array();
		else
			return null;
		echo "Data Not Found";
	}
		function room_old(){
	$this->db->select('*');
	$this->db->from('room');
	$this->db->where(array('kode'=>$kode));
	$this->db->order_by('avail','ASC');
	$getroom = $this->db->get();
	if ($getroom->num_rows()>0)
		return $getroom->row();
		else
			return null;
		echo "Data Not Found";
	}
	function room_new($kode){
		$vtipe=$this->input->post('tipe');
		$vrate=$this->input->post('rate');
		$vimage=$this->input->post('image');
		$vavail=$this->input->post('avail');
		$vfacility=$this->input->post('facility');
		$query=$this->db->query("update room set tipe='$vtipe',rate='$vrate',image='$vimage',avail='$vavail',facility='$vfacility' where kode='$kode'");
		return $rows;
	}
}


?>
