<?php 
class M_supplier extends CI_Model {
	
	function get_list_supplier(){
	$query=$this->db->query("SELECT * FROM supplier order by id_supplier");
	return $query;
	}
			function get_nama_supplier(){
				$query=$this->db->query("SELECT * FROM supplier order by nama_supplier");
				return $query;
			}
			function get_supplier_nama(){
				$query=$this->db->query("SELECT * FROM supplier order by nama_supplier DESC");
				return $query;
			}
			
	
	
	function get_detail_supplier($vid){
		$query=$this->db->query("SELECT * FROM supplier WHERE id_supplier='$vid'");
		$rows=$query->row();
		return $rows;
	}
	function insert_supplier(){
		$id=$this->input->post('id_supplier');
		$nama=$this->input->post('nama_supplier');
		$alamat=$this->input->post('alamat_supplier');
		$query=$this->db->query("INSERT INTO `supplier` ( `id_supplier`,`nama_supplier`,`alamat_supplier`) VALUES ('$id','$nama','$alamat' )");
	}
	function get_ubah_supplier($vid){
		$id=$this->input->post('id_supplier');
		$nama=$this->input->post('nama_supplier');
		$alamat=$this->input->post('alamat_supplier');
		$query=$this->db->query("UPDATE `supplier` SET `id_supplier`='$id',`nama_supplier`='$nama',`alamat_supplier`='$alamat' WHERE id_supplier='$vid'");
	}
	function delete_data($vid){
	$query=$this->db->query("DELETE FROM `supplier` WHERE id_supplier='$vid'");
	return $query;
	}
}
?>