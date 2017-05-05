<?php
class C_ghouse extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_ghouse','',TRUE);
		$this->load->library('pagination');
	
	}
	
	function room(){
			$this->load->view('room-upload');
	
	}
	function do_upload(){
		$config['upload_path']='./uploads/';
		$config['allowed_types']= 'gif|bmp|jpg|png|doc|docx|php|xls|xlsx|pdf';
		$config['max_size'] = '1000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$this->load->library('upload',$config);
		
		if(! $this->upload->do_upload()){
			
			$data['list_unggah']=$this->m_ghouse->get_list_unggah();
			$this->load->view('room-upload',$data);
		}
		else{
			
			$file=$this->upload->data();
			
			$vnamafile=$file['file_name'];
//$vkode=$this->input->post('kode');
	//		$vtipe=$this->input->post('tipe');
			//$vrate=$this->input->post('rate');
			//$vimage=$this->input->post('image');
			//$vavail=$this->input->post('avail');
			//$vfacility=$this->input->post('facility');
						$vdeskripsi=$this->input->post('tipe');
			$this->m_ghouse->insertdata($vnamafile,$vdeskripsi);
			$data['list_unggah']=$this->m_ghouse->get_list_unggah();
				$this->load->view('room-upload',$data);
		}
	}	
}
?>