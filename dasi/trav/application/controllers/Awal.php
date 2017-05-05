<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {

 public function __construct(){
	parent::__construct();
	$this->load->helper(array('form','url'));
	$this->load->model('sort','',TRUE);
	}

	public function index()
	{
		$data['list_item']=$this->sort->get_list();
		$this->load->view('pantai',$data);
	}
	public function view_detail(){
	$vid = $this->uri->segment(3,0);
	$data['row_data'] = $this->sort->get_detail($vid);
	$this->load->view('detail_pantai');
	}
}
