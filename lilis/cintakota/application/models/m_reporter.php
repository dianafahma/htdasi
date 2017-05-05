<?php
	class M_reporter extends CI_Model{
	
	function get_list_data(){
	$query=$this->db->query("select * from member order by nama");
	return $query;
	}
	function get_profil($vusername){
	$query=$this->db->query("select * from member WHERE username='$vusername'");
	return $query;
	}
//function view_detail
	function get_detail_data($vusername){
	$query=$this->db->query("SELECT * FROM member WHERE username='$vusername'");
	$rows=$query->row();
	return $rows;
	}
//function delete
	function delete_data($vusername){
	$query=$this->db->query("DELETE FROM member WHERE username='$vusername'");
	}
//function update
	function get_update_data($vreporter){
	$query=$this->db->query("SELECT * FROM member WHERE username='$vreporter'");
	$row=$query->row();
	return $row;
	}
	// profil
	function update_nama($vusername,$nama){
	//$vusername=$this->uri->segment(3);
			//($this->input->post('nama'));
			$query=$this->db->query("UPDATE member set nama='$nama' where username='$vusername'");
			// die("UPDATE member set nama='$nama' where username='$vusername'");
	}
	
	function update_pass($vusername,$password_lama,$password_baru){
			$query=$this->db->query("select * from member where username='$vusername' and password = '$password_lama'");
			if($query->num_rows()>0){
			$query=$this->db->query("UPDATE member set password='$password_baru' where username='$vusername'");
			//die("UPDATE member set password='$password_baru' where username='$vusername'");
			return TRUE;
			}else{
				return FALSE;
			}
	}
	function update_pass_red($vusername,$password){
		$query=$this->db->query("UPDATE member set password='$password' where username='$vusername'");
		// die("UPDATE member set password='$password' where username='$vusername'");
	}
	function update_jk($vusername,$jk){
			$query=$this->db->query("UPDATE member set jk='$jk' where username='$vusername'");
	}
	function update_alamat($vusername,$alamat){
	// $vusername=$this->uri->segment(3);
			// $valamat=($this->input->post('alamat'));
			$query=$this->db->query("UPDATE member set alamat='$alamat' where username='$vusername'");
	}
//function search
	function search(){
	$kword=$this->input->post('keyword');
	$query=$this->db->query("SELECT * FROM member WHERE username like '%$kword%'  or nama like '%$kword%' or alamat like '%$kword%'");
	return $query;
	}
	
function insert($data){
	$this->table="member";
	return $this->db->insert($this->table,$data);
	}
	
//function pagination
	function get_all($perPage,$uri){
		//$query=$this->db->query("select * from member order by username");
		//return $query;

		$this->db->select('*');
		$this->db->from('member');
		$this->db->order_by('username');
		$getdata = $this->db->get('', $perPage, $uri);
		if($getdata->num_rows()>0)
			return $getdata->result_array();
		else
			return null;
		}
			
	public function member_profile($username) {
			
			$this->db->where('username',$username);
			$query = $this->db->get('member');
			
			return $query->row();
			
		}
}
?>