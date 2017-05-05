<?php
/**
* model for Admin page intership
*/
class model_admin extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function get_all_job(){
		$query=$this->db->query("SELECT * FROM intership");
		return $query;
	}

	public function get_detail($vid){
		$query=$this->db->query("SELECT * FROM intership WHERE id='$vid'");
		$row=$query->row();
		return $row;
	}
	
	function insert($path,$file) {
		$vjob=$this->input->post('job');
		$vcompany=$this->input->post('company');
		$vcontact=$this->input->post('contact');
		$vadd=$this->input->post('address');
		// $vpath=$path;
		// echo $path;
		// break;
		//$vfile=$this->upload->get_multiple_upload_data('gambar_i');
		$vdes=$this->input->post('description');
		$query=$this->db->query("INSERT INTO intership(job, company, contact, address, gambar_i, description) VALUES ('$vjob', '$vcompany', '$vcontact','$vadd','$vfile','$vdes')");
		#return $row;
/*
		$data = array(
			'id'		=> $this->input->post('id'),
			'job'	=> $this->input->post('job'),
			'company'	=> $this->input->post('company'),
			'contact'	=> $this->input->post('contact'),
			'address'	=> $this->input->post('address'),

			'description'		=> $this->input->post('description')
			)
		);
		$this->db->insert('berita',$data);
		*/
	}
	function insert_gambar($path,$i) {
		$data = array(
			'id_berita'		=> $this->input->post('id'),
			'gambar_ke'		=> $i,
			'path_folder' 	=> $path
		);
		$this->db->insert("gambar", $data);
	}
}
?>
