<?php
class M_mahasiswa extends CI_Model{
  
  function get_all($perPage,$uri) { //to get all data in table mahasiswa

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
