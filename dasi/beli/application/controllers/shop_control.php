<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class shop_control extends CI_Controller
{
	
	function __construct()
	{
 		parent::__construct();
 		$this->load->model('shopping');
 		$this->load->helper('url');
	}

	public function index(){
		
		$this->load->view('index');
	}

	public function contact(){
		$this->load->view('contact');
	}
}
?>
