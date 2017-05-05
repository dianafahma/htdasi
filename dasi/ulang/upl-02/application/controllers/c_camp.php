<?php
class C_camp extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->helper('form','url'); // untuk input
	$this->load->model('m_camp','',TRUE);
	$this->load->library('pagination'); // call pagination library
	}
	function view_home(){
	$this->load->view('index.php');
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
		function lihatnilai(){
			$data['data_nilai']=$this->m_camp->datanilai();
			$this->load->view('blog.php',$data);		
		}
		function get_nilai(){
			$data['list_nilais']=$this->m_camp->get_nilai();
			$this->load->view('blog.php',$data);
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