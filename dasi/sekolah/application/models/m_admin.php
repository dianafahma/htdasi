<?php
	class M_admin extends CI_Model{
	
	function get_list_data(){
	$query=$this->db->query("select * from daftar order by id_daftar");
	return $query;
	}
	
	function daftar(){
	if($this->input->post('submit'))
	{
	  $this->m_admin->insertdata();
	  redirect ('c_icm/pendaftar');
	}
	$this->load->view('daftar_by_admin');
	}
	
	//function listpendaftar
	function pendaftar(){
		$data['list_daftar']=$this->m_admin->get_list_data();
		$this->load->view('pendaftar_by_admin',$data);
		}
	//function view_detail
	function get_detail_data($vid_daftar){
		$query=$this->db->query("SELECT * FROM daftar WHERE id_daftar='$vid_daftar'");
		$rows=$query->row();
		return $rows;
	}
	//function delete
	function delete_data($vid_daftar){
		$query=$this->db->query("DELETE FROM daftar WHERE id_daftar='$vid_daftar'");
		}
	//function update
	function get_update_data($vid_daftar){
		$query=$this->db->query("SELECT * FROM daftar WHERE id_daftar='$vid_daftar'");
		$row=$query->row();
		return $row;
	}
	function get_detail($id_daftar){
	echo "gera";
	echo $id_daftar;
	}
	//get detail	
/*	function get_detail_data(){
	echo"dnsnnsn";
	$query=$this->db->query("SELECT * FROM daftar WHERE id_daftar='$id_daftar'");
	$rows=$query->row();
	return $rows;
	

		$this->db->select('*');
		$this->db->from('tokos');
		$this->db->order_by('id_toko');
		$getdata = $this->db->get('', $perPage, $uri);
		if($getdata->num_rows()>0)
			return $getdata->result_array();
		else
			return null;*/
			
	
//mdnndn
function insertdata(){
		$vid_daftar=$this->input->post('id_daftar');
		$vnama=$this->input->post('nama');
		$vjk=$this->input->post('jk');
		$vumur=$this->input->post('umur');
		$valamat=$this->input->post('alamat');
		$vasal_sekolah=$this->input->post('asal_sekolah');
		$vnilai_un=$this->input->post('nilai_un');
		$vnilai_uas=$this->input->post('nilai_uas');
		$vnama_ayah=$this->input->post('nama_ayah');
		$vpkj_ayah=$this->input->post('pkj_ayah');
		$vpdd_ayah=$this->input->post('pdd_ayah');
		$vnama_ibu=$this->input->post('nama_ibu');
		$vpkj_ibu=$this->input->post('pkj_ibu');
		$vpdd_ibu=$this->input->post('pdd_ibu');
	//	$vimage=$this->input->post('image');
		$query=$this->db->query("INSERT INTO daftar(id_daftar,nama,jk,umur,alamat,asal_sekolah,nilai_un,nilai_uas,nama_ayah,pkj_ayah,pdd_ayah,nama_ibu,pkj_ibu,pdd_ibu) VALUES ('$vid_daftar','$vnama','$vjk','$vumur','$valamat','$vasal_sekolah','$vnilai_un','$vnilai_uas','$vnama_ayah','$vpkj_ayah','$vpdd_ayah','$vnama_ibu','$vpkj_ibu','$vpdd_ibu')");
		}
		
	//function update
	/*function get_update_data($vid_daftar){
	$query=$this->db->query("SELECT * FROM daftar WHERE id_daftar='$vid_daftar'");
	$row=$query->row();
	return $row;
	}*/
	function update_data_db($vid_daftar){
		$vid_daftar=$this->input->post('id_daftar');
		$vnama=$this->input->post('nama');
		$vjk=$this->input->post('jk');
		$vumur=$this->input->post('umur');
		$valamat=$this->input->post('alamat');
		$vasal_sekolah=$this->input->post('asal_sekolah');
		$vnilai_un=$this->input->post('nilai_un');
		$vnilai_uas=$this->input->post('nilai_uas');
		$vnama_ayah=$this->input->post('nama_ayah');
		$vpkj_ayah=$this->input->post('pkj_ayah');
		$vpdd_ayah=$this->input->post('pdd_ayah');
		$vnama_ibu=$this->input->post('nama_ibu');
		$vpkj_ibu=$this->input->post('pkj_ibu');
		$vpdd_ibu=$this->input->post('pdd_ibu');
		//$vfilegambar=$this->input->post('filegambar');
		$query=$this->db->query("UPDATE daftar SET id_daftar='$vid_daftar',nama='$vnama',jk='$vjk',umur='$vumur',alamat='$valamat',asal_sekolah='$vasal_sekolah',nilai_un='$vnilai_un',nilai_uas='$vnilai_uas',nama_ayah='$vnama_ayah',pkj_ayah='$vpkj_ayah',pdd_ayah='$vpdd_ayah',nama_ibu='$vnama_ibu',pkj_ibu='$vpkj_ibu',pdd_ibu='$vpdd_ibu' WHERE id_daftar='$vid_daftar'");
		}
	//function search
		function search(){
		$kword=$this->input->post('keyword');
		$query=$this->db->query("SELECT * FROM daftar WHERE id_daftar like '%$kword%'  or nama like '%$kword%' or asal_sekolah like '%$kword%'");
		return $query;
		}

	
			
	}
		
		
		
		
	//tambah pendafta
?>