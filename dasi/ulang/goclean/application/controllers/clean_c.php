<?php 
class clean_C extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('clean_m','',TRUE);
		$this->load->helper('form');
		$this->load->database();
		$this->load->library(array('session','pagination'));
	}
	function display(){
		$query=$this->db->query("select * from orang");
		$n=$query->num_rows();
		$config['base_url'] = base_url().'index.php/clean_c/display';
		$config['total_rows'] = $n;
		$config['per_page']='15';
		$config['uri_segment'] = 3;
		$config['full_tag_open'] =  '<<';
		$config['full_tag_close'] =  '>>';
		$this->pagination->initialize($config);
		$data['content_view']="datalapor.php";
		$data['list_lapor']=$this->clean_m->get_list_orang($config['per_page'],$this->uri->segment(3));
		$this->load->view('template',$data);
	}
}
	?>