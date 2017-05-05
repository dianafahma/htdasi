<?php
class C_nilai extends CI_Controller {
	function __construct(){
	parent::__construct();
	$this->load->helper(array('form','url'));
	$this->load->model('m_nilai','',TRUE);

	}
	function display(){
	$data['list_nilai']=$this->m_nilai->get_list_data();
	$this->load->view('v_nilai_display.php',$data);
	}

	function do_upload(){
	$config['upload_path']='./upload/';
	$config['allowed_types']= 'png';
	$this->load->library('upload',$config);
	if(! $this->upload->do_upload()){
	//$data['list_mhsw']=$this->m_nilai->input_data();
	$this->load->view('v_upload_data');
		
	}
	else{

	$file=$this->upload->data();
	$vnim = $this->input->post('nim');
	//$vnama = $this->input->post('nama');
	$vnamafile=$file['filefoto'];
	//$vumur=$this->input->post('umur');

	$this->m_nilai->input_data($vnim,$vnamafile);
			
	$data['list_mhsw']=$this->m_nilai->input_data();
		$this->load->view('v_upload_data',$data);
	/*$data=array('nim' => $this->input->post('nim'),
				'nama' =>$this->input->post('nama'),
				'namafile' =>$this->input->post('namafile'),
				'umur' =>$this->input->post('umur'),
				'filefoto' => 'upload/'.$file['filefoto'],
				$this->m_nilai->inputdata($data));*/
		}
	}
}
?>