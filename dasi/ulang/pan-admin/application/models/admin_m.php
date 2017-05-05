<?php
class admin_m extends CI_Model{

	function get_list_data(){
	  $this->db->select('*');
	  $this->db->from('pantai');
	  $get_data=$this->db->get();
	  if($get_data->num_rows()>0)
	  	return $get_data->result_array();
	  else
	  	return null;
	}
	function insert_data(){ //This is not for upload
	  $nim=$this->input->post('nim');
	  $nama=$this->input->post('nama');
	  $umur=$this->input->post('umur');
	  $foto=$this->input->post('foto');
	  $query=$this->db->query("insert into mahasiswa (nim,nama, umur,foto) values ('$nim','$nama','$umur','$foto')");
	  return $query;
	}
	
	
	
	
	function get_detail_data($id){
	  $this->db->select('*');
	  $this->db->from('mahasiswa');
	  $this->db->where(array('id'=>$id));
	  $get_data=$this->db->get();
	  if($get_data->num_rows()>0)
	  	return $get_data->row();
	  else
	  	return null;

	}
	function get_edit_data($id){
		 $this->db->select('*');
	  $this->db->from('mahasiswa');
	  $this->db->where(array('id'=>$id));
	  $get_data=$this->db->get();
	  if($get_data->num_rows()>0)
	  	return $get_data->row();
	  else
	  	return null;
	}
	
	function  edit_data($id,$nim,$vnama,$vfile,$vumur){
		$n=$vfile;
		$query=$this->db->query("UPDATE mahasiswa set nim='$nim', nama='$vnama',umur='$vumur',foto='$n' where id=$id");
	}
	function delete_data($id){
		 $query=$this->db->query("delete from mahasiswa where id=$id");
		return $query;	
	}
	function insert_mahasiswa(){ //This is not for upload
	  $nim=$this->input->post('nim');
	  $nama=$this->input->post('nama');
	  $umur=$this->input->post('umur');
	  $foto=$this->input->post('foto');
	  $query=$this->db->query("insert into mahasiswa (nim,nama, umur,foto) values ('$nim','$nama','$umur','$foto')");
	  return $query;
	}
	function insert_dmahasiswa($nim,$vnama,$vfile,$umur){
	  $n=$vfile;
	  $query=$this->db->query("INSERT INTO mahasiswa (nim,nama,umur,foto) values ('$nim','$vnama','$umur','$n')");
	}
	function update_dmahasiswa($gnim,$vnama,$vfile,$vumur){
		$nama=$this->input->post('nama');
		$umur=$this->input->post('umur');
	  $n='unggah/'.$vfile;
	  $query=$this->db->query("UPDATE mahasiswa set nama='$nama',foto='$n'where nim='$gnim'");
	}
	function get_search_mahasiswa(){
		$kword=strtolower($this->input->post('keyword'));
		$this->db->select('*');
	  $this->db->from('mahasiswa');
	  $this->db->where("nama like '%$kword%'");
	  $get_data=$this->db->get();
	  if($get_data->num_rows()>0)
	  	return $get_data->result_array();
	  else
	  	return null;	
	}
}
?>