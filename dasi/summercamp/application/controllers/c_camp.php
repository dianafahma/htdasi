<?php
class C_camp extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->helper('form'); // untuk input
	$this->load->model('m_camp','',TRUE);
	$this->load->library('pagination'); // call pagination library
	}
	function view_home(){
	$this->load->view('home.php');
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
	
}
?>