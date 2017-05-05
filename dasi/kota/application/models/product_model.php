<?php

 class product_model extends CI_Model {

   function __construct()
   {
       parent::__construct();
   }

   function get_all($limit = NULL, $offset = NULL) {
       $query = $this->db->get('barang', $limit, $offset);
       return $query->result();
    }
    function get($id) {
       $query = $this->db->get_where('barang', array(‘id’=>$id));
        return $query->row();
    }
 }
