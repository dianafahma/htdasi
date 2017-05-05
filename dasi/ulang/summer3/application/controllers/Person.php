<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* this controller is trial only
*/
class Person extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Person_m','person');
		$this->load->database();
		//$this->load->helper(array('form','url'));

	}

	public function index(){
		$this->load->helper('url');
		$this->load->view('person_view');
	}

	public function ajax_list()
	{
		$list = $this->person->get_list_data();
		$data =array();
		$no = $_POST['start'];
		foreach ($list as $person) 
		{
			$no++;
			$row = array();
			$row[] = $person->firstName;
			$row[] = $person->lastName;
			$row[] = $person->gender;
			$row[] = $person->address;
			$row[] = $person->dob;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_person('."'".$person->id."'".')">
			<i class="glyphicon glyphicon-pencil"></i>Edit</a>
				<a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i>Delete</a>';
			$data[]=$row;

		}
		$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->person->count_all('persons'),
				"recordsFiltered" => $this->person->count_filter('persons'),
				"data"=>$data,
			);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id){
		$data =$this->person->get_id($id);
		echo json_encode($data);
	}

	public function ajax_add(){
		$data = array(
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$insert = $this->person->save($data);
		echo json_encode(array("status"=>TRUE));
	}

	public function ajax_update(){
		$data = array(
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$this->person->update(array('id'=> $this->input->post('id')),$data);
		echo json_encode(array("status"=>TRUE));
	}
	public function ajax_delete($id){
		$this->person->delete($id);
		echo json_encode(array("status"=>TRUE));	
	}
	
}
?>