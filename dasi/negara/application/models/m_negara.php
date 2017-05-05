<?php
class M_negara extends CI_Model{
	function get_negara(){
		$this->db->select('*');
		$this->db->from('negara');
		$this->db->order_by('id_negara');
		$get_data = $this->db->get('');
		if($get_data->num_rows()>0)
			return $get_data->result_array();
		else
			return null;
	}
	function get_detail($vid){
		$this->db->select('*');
		$this->db->from('negara');
		$this->db->where(array('id_negara'=>$vid));
		$this->db->order_by('id_negara');
		$get_data = $this->db->get('');
		if($get_data->num_rows()>0)
			return $get_data->row();
		else
			return null;	
	}

	function tambah_data(){
		$id=$this->input->post('id_negara');
		$nama=$this->input->post('nama_negara');
		$jml=$this->input->post('jml_penduduk');
		$query=$this->db->query("insert into negara (id_negara,nama_negara,jml_penduduk) values ('$id','$nama','$jml')");
		return $rows;
	}
	function search_negara(){
		$kword=strtolower($this->input->post('keyword'));
		$this->db->select('*');
		$this->db->from('negara');
		$this->db->where("nama_negara like '%$kword%'");
		$get_data=$this->db->get();
		if($get_data->num_rows()>0)
			return $get_data->result_array();
		if($get_data->num_rows()==0)
			redirect ('c_negara/error');
			//echo "mkdsk";

	}
	function error(){
			redirect ('c_negara/error','refresh');
	}

}
?>
