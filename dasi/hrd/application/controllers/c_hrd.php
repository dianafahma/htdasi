<?php
class C_hrd extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->helper(array('form','url')); 
	$this->load->model(array('m_hrd'));
	$this->load->library(array('session'));
	$this->load->library('pagination'); // call pagination library
	$this->load->database();
	}
	
	function list_karyawan(){
		$data['list_karyawan']=$this->m_hrd->get_kar();
		$this->load->view('v_tabel_karyawan',$data);
	}
	function list_dreport(){
		$data['list_dreport']=$this->m_hrd->get_dreport();
		$this->load->view('v_tabel_dreport',$data);
	}
	function list_absen(){
		$data['list_absen']=$this->m_hrd->get_absen();
		$this->load->view('v_tabel_absen',$data);
	}
	
	
	
	function list_kar(){
	$query=$this->db->query("SELECT * FROM karyawan");
	$n = $query->num_rows();
		$config['base_url'] = base_url().'index.php/c_hrd/list_kar/';
		$config['total_rows'] = $n;
		$config['perpage']='20';
		$config['uri_segment']=3;
		$config['full_tag_open']='[';
		$config['full_tag_close']=']';
	$this->pagination->initialize($config);
	
	$this->m_hrd->get_list_kar($config['per_page'],$this->uri->segment(3));
	$this->load->view('leader_page.php',$data);
	}
	
	function view_about(){
	$this->load->view('about.php');
	}
	function view_activities(){
	$this->load->view('activities.php');
	}
	function view_application(){
	$this->load->view('application.php');
	}
	function view_register(){
	$this->load->view('register.php');
	}
	function view_blog(){
	$this->load->view('blog.php');
	}
	function view_index(){
	$this->load->view('index.php');
	}
	function view_competition(){
	$this->load->view('competition.php');
	}
	function view_contact(){
	$this->load->view('contact.php');
	}
	function view_events(){
	$this->load->view('events.php');
	}
	function view_programs(){
	$this->load->view('programs.php');
	}
	function view_staff(){
	$this->load->view('staff.php');
	}
	
	function register(){
	if($this->input->post('submit'))
		{
			$this->m_camp->dataregister();
			redirect ('c_camp/view_contact');
		}
		$this->load->view('index.php');
	}
	function message(){
	if($this->input->post('submit'))
		{
			$this->m_camp->sendmessage();
			redirect ('c_camp/view_contact');
		}
		$this->load->view('index.php');
	}
}
?>