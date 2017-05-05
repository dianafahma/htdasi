<?php
class C_upload extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('m_tugas','',TRUE); //tanpa koma
	}
	function do_upload(){
		$config['upload_path']='./uploads/';
		$config['allowed_types']= 'gif|bmp|jpg|png|doc|docx|php|xls|xlsx|pdf';
		$config['max_size'] = '1000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$this->load->library('upload',$config);		
		
		if(! $this->upload->do_upload()){
			$data['list_tugas']=$this->m_tugas->get_list_data();
			$this->load->view('v_upload_form', $data);
		}
		else{
			$file=$this->upload->data();
			$vnamafile=$file['file_name'];
			$vdeskripsi=$this->input->post('deskripsi');
			$this->m_tugas->insertdata($vnamafile, $vdeskripsi);
			$data['list_tugas']=$this->m_tugas->get_list_data();
			$this->load->view('v_upload_form',$data);
		}
	}	
}
?>
