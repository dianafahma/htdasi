<?php
class M_Berita extends CI_Model{

	function get_list_data($limit=''){
		
		$addQuery = '';
		if($limit!=''){
			$addQuery = "limit $limit";
		}
		$query = $this->db->query("SELECT * FROM berita ORDER BY tanggal DESC $addQuery");
		return $query;
	}
	function get_list_data_rep($username){
		$query = $this->db->query("SELECT * FROM berita WHERE penulis='$username' ORDER BY tanggal DESC");
		return $query;
	}
	function get_detail_data($vid = null){
		$query=$this->db->query("SELECT * FROM berita WHERE id='$vid'");
		$rows=$query->row();
		return $rows;
	}
	function get_detail_rep($vusername = null){
		$query=$this->db->query("SELECT * FROM member ORDER BY username='$vusername'");
		$rows=$query->row();
		return $rows;
	}
	
	function get_list_rep($vusername = null){
		$query=$this->db->query("SELECT * FROM member ORDER BY username DESC");
		$rows=$query->row();
		return $rows;
	}
	function get_detail_gambar($vid = null){
		$query=$this->db->query("SELECT * FROM gambar WHERE id_berita='$vid'");
		return $query;
	}
	function get_gambar($vid = null){
		$query=$this->db->query("SELECT * FROM gambar WHERE id_berita='$vid' limit 1");
		return $query->row();
	}
	function insert() {
		$data = array(
			'id'		=> $this->input->post('id'),
			'kgr_judul'	=> $this->input->post('kgr_judul'),
			'judul'		=> $this->input->post('judul'),
			'isi'		=> $this->input->post('isi'),
			'penulis'	=> $this->session->userdata('ses_username')
		);
		$this->db->insert('berita',$data);
	}
	function insert_gambar($path,$i) {
		$data = array(
			'id_berita'		=> $this->input->post('id'),
			'gambar_ke'		=> $i,
			'path_folder' 	=> $path
		);
		$this->db->insert("gambar", $data);
	}
	function delete($vid){
		$this->db->where('id',$vid);
		$this->db->delete('berita');
	}
	function update($vid){
		$id = $this->uri->segment(3);
		$data = array(
			'kgr_judul'	=> $this->input->post('kgr_judul'),
			'judul'		=> $this->input->post('judul'),
			'isi'		=> $this->input->post('isi')
		);
		// $this->db->where('id',$id);
		$this->db->update('berita',$data,array('id'=>$id)); 
	}
	 function search(){
		 $keyword=$this->input->post('keyword');
		 $query=$this->db->query("SELECT * FROM berita WHERE judul LIKE '%$keyword%' OR kgr_judul LIKE '%$keyword%'");
		 return $query;
	 }
	public function validasi($v_username,$v_password){
		$sql = "select * from member where username = '$v_username' and password = '$v_password'";
		$result = $this->db->query($sql);
		$ketemu=$result->num_rows;
		if($ketemu>0){
			return true;
		}
		else
		{
			return false;
		}
	}
	public function validasi2($v_username,$v_password){
		$sql = "select * from login where username = '$v_username' and password = '$v_password'";
		$result = $this->db->query($sql);
		$ketemu=$result->num_rows;
		if($ketemu>0){
			return true;
		}
		else
		{
			return false;
		}
	}
	function change_status($vid, $status) {
		$str="UPDATE berita SET status='$status' WHERE id='$vid'";
		$query=$this->db->query($str);
		}
		function status_edit($vid, $status_edit) {
		$str="UPDATE berita SET status_edit='$status_edit' WHERE id='$vid'";
		$query=$this->db->query($str);
		}
		function change_publish($vid, $publish) {
		$str="UPDATE berita SET publish='$publish', tgl_publish=now() WHERE id='$vid'";
		$query=$this->db->query($str);
		}
		function per_id($id) {
		$this->db->where('id',$id);
		$query=$this->db->get('berita');
		return $query->result();
		}

		function kategori1($limit=''){
		$addQuery = '';
		if($limit!=''){
			$addQuery = "limit $limit";
		}
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Hiburan' ORDER BY tanggal DESC $addQuery");
		return $query;
		}
		function kategori2($limit=''){
		$addQuery = '';
		if($limit!=''){
			$addQuery = "limit $limit";
		}
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Politik' ORDER BY tanggal DESC $addQuery");
		return $query;
		}
		function kategori3($limit=''){
		$addQuery = '';
		if($limit!=''){
			$addQuery = "limit $limit";
		}
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Kriminal' ORDER BY tanggal DESC $addQuery");
		return $query;
		}
		function kategori4($limit=''){
		$addQuery = '';
		if($limit!=''){
			$addQuery = "limit $limit";
		}
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Internasional' ORDER BY tanggal DESC $addQuery");
		return $query;
		}
		function kategori5($limit=''){
		$addQuery = '';
		if($limit!=''){
			$addQuery = "limit $limit";
		}
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Teknologi' ORDER BY tanggal DESC $addQuery");
		return $query;
		}
		function kategori6($limit=''){
		$addQuery = '';
		if($limit!=''){
			$addQuery = "limit $limit";
		}
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Bisnis' ORDER BY tanggal DESC $addQuery");
		return $query;
		}
		function tampil(){
			$query=$this->db->get('berita');
			if($query ->num_rows()>0){
				return $query->result();
			} else {
				return array();
			}
		}
// ADMIN //
		function terpublis($username){
		$query = $this->db->query("SELECT * FROM berita WHERE publish='1' and penulis='$username' ORDER BY id DESC");
		return $query;
		}
		function arsip($username){
		$query = $this->db->query("SELECT * FROM berita WHERE status_edit='1' or status='1' and penulis='$username' ORDER BY id DESC");
		return $query;
		}
		function k_hiburan($username){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Hiburan' and penulis='$username'");
		return $query;
		}function k_politik($username){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Politik' and penulis='$username'");
		return $query;
		}function k_kriminal($username){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Kriminal' and penulis='$username'");
		return $query;
		}function k_inter($username){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Internasional' and penulis='$username'");
		return $query;
		}function k_teknologi($username){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Teknologi' and penulis='$username'");
		return $query;
		}function k_bisnis($username){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Bisnis' and penulis='$username'");
		return $query;
		}
		
// redaksi //
		function terpublis2(){
		$query = $this->db->query("SELECT * FROM berita WHERE publish='1' ORDER BY id DESC");
		return $query;
		}
		function arsip2(){
		$query = $this->db->query("SELECT * FROM berita WHERE status_edit='1' ORDER BY id DESC");
		return $query;
		}
		function k_hiburan2(){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Hiburan'");
		return $query;
		}function k_politik2(){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Politik'");
		return $query;
		}function k_kriminal2(){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Kriminal'");
		return $query;
		}function k_inter2(){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Internasional'");
		return $query;
		}function k_teknologi2(){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Teknologi'");
		return $query;
		}function k_bisnis2(){
		$query = $this->db->query("SELECT * FROM berita WHERE kgr_judul='Bisnis'");
		return $query;
		}
}
		
?>
	