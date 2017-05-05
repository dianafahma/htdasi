<?php
	class M_product extends CI_Model{
		// function get_list_data($vkode_produk){
		// 	$query=$this->db->query("SELECT * FROM tbl_product WHERE kode_produk='$vkode_produk'");
		// 	$row=$query->row();
		//  	return $row;
		// }

		function get_detail_data($vkode_produk){
		$query=$this->db->query("SELECT * FROM tbl_product WHERE kode_produk='$vkode_produk'");
		$row=$query->row();
		return $row;
		}

		// SELECT tbl_product.nama_produk, tbl_product.harga, tbl_category.category_id FROM tbl_product INNER JOIN tbl_category ON tbl_category.category_name = tbl_product.category_name AND tbl_product.tipe_produk = 'atasan' AND tbl_category.category_id = '1'
//<!----PRIA----->
		function get_atasan_pria($perPage,$uri) { 
	    $this->db->select('tbl_product.kode_produk, tbl_product.nama_produk, tbl_product.harga, tbl_product.gbr_kecil, tbl_sub_category.sub_category_id, tbl_sub_category.sub_category_name, tbl_category.category_id, tbl_category.category_name');
	    $this->db->from('tbl_product INNER JOIN tbl_sub_category INNER JOIN tbl_category');
	    $st1="tbl_sub_category.sub_category_id=tbl_product.sub_category_id AND (tbl_sub_category.sub_category_id='1')";
	    $this->db->where($st1, null, false);
		//$this->db->where('');
	    $st2="tbl_category.category_id=tbl_sub_category.category_id AND (tbl_category.category_id='1')";
	    $this->db->where($st2, null, false);
	    //$this->db->and('tbl_category.category_id='1'');
	    //$this->db->where('tipe_produk','atasan');

	    $getdata = $this->db->get('', $perPage, $uri);
	    if($getdata->num_rows() > 0)
	       return $getdata->result_array();
	    else
	       return null;
	  }

	  function get_bawahan_pria($perPage,$uri) { 
	    $this->db->select('tbl_product.kode_produk, tbl_product.nama_produk, tbl_product.harga, tbl_product.gbr_kecil, tbl_sub_category.sub_category_id, tbl_sub_category.sub_category_name, tbl_category.category_id, tbl_category.category_name');
	    $this->db->from('tbl_product INNER JOIN tbl_sub_category INNER JOIN tbl_category');
	    $st1="tbl_sub_category.sub_category_id=tbl_product.sub_category_id AND (tbl_sub_category.sub_category_id='2')";
	    $this->db->where($st1, null, false);
		//$this->db->where('');
	    $st2="tbl_category.category_id=tbl_sub_category.category_id AND (tbl_category.category_id='1')";
	    $this->db->where($st2, null, false);
	    //$this->db->and('tbl_category.category_id='1'');
	    //$this->db->where('tipe_produk','atasan');

	    $getdata = $this->db->get('', $perPage, $uri);
	    if($getdata->num_rows() > 0)
	       return $getdata->result_array();
	    else
	       return null;
	  }


// //<!----WANITA---->
	  	 function get_atasan_wanita($perPage,$uri) { 
		$this->db->select('tbl_product.kode_produk, tbl_product.nama_produk, tbl_product.harga, tbl_product.gbr_kecil, tbl_sub_category.sub_category_id, tbl_sub_category.sub_category_name, tbl_category.category_id, tbl_category.category_name');
	    $this->db->from('tbl_product INNER JOIN tbl_sub_category INNER JOIN tbl_category');
	    $st1="tbl_sub_category.sub_category_id=tbl_product.sub_category_id AND (tbl_sub_category.sub_category_id='9')";
	    $this->db->where($st1, null, false);
		//$this->db->where('');
	    $st2="tbl_category.category_id=tbl_sub_category.category_id AND (tbl_category.category_id='2')";
	    $this->db->where($st2, null, false);
	    //$this->db->and('tbl_category.category_id='1'');
	    //$this->db->where('tipe_produk','atasan');
	    $getdata = $this->db->get('', $perPage, $uri);
	    if($getdata->num_rows() > 0)
	       return $getdata->result_array();
	    else
	       return null;
	}

	}
?>