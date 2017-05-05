<?php
	class c_gambar extends CI_Controller {
	
	function __construct(){
	parent::__construct();
	$this->load->helper(array('form','url'));
	$this->load->model('m_gambar','',TRUE);
	//$this->load->helper('form');
	//$this->load->model('m_gambar','',TRUE);
	//$this->load->library(array('upload','form_validation',''));
	}
	
	function display(){
		$data['content_view']='v_berita';
		$data['list_gambar']=$this->m_gambar->get_list_data();
		$this->load->view('v_template',$data);
	}
	
	function insert(){
		if($this->input->post('submit'))
		{
		$this->m_gambar->insert();
		redirect('c_gambar/display');
		}
	  $data['content_view'] ="v_berita_add.php";
	  $this->load->view('v_template',$data);
		}
	
	function upload(){
		$config['upload_path'] ='./uploads/';
		$config['allowed_types'] = 'gif|bmp|jpg|png|doc|docx|php|xls|xlsx|pdf';
		$config['max_size'] = '1000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$this->load->library('upload',$config);
		   
		if(!$this->upload->do_upload())
		{
			$data['list_gambar']=$this->m_gambar->get_list_data();
			$this->load->view('v_berita_add', $data);
		}
		else
		{
			$file = $this->upload->data();
			//$vnamafile=$file['file_name'];
			//$vdeskripsi=$this->input->post('deskripsi');
			//$this->m_gambar->insert($vnamafile,$vdeskripsi);
			$data['list_gambar']=$this->m_gambar->get_list_data();
			$this->load->view('v_berita_add',$data);
		} 
	}
}
?>