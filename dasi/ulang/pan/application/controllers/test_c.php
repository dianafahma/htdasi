<?php 
class test_C extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('test_m','',TRUE);
		$this->load->helper('form');
		$this->load->database();
	}
	function index(){
	$data['qprovinsi']=$this->test_m->get_provinsi();
	//$isu['list_kota']=$this->test_m->get_list_kota();
		$this->load->view('index',$data);
	}
	
	 function get_kota(){
 
            $prov = $this->input->post('provinsi');  //mengambil post data yang dijabarkan pada javascript yaitu type: "POST"
            $arrStates = $this->test_m->get_kota_byprovinsi($prov);  //mengambil data dari database melalui model mcombox
            foreach ($arrStates as $states) {
                $arrstates[$states->idkot] = $states->name;
            } //array dibuat untuk ditampilkan pada combox box
            print form_dropdown('kota',$arrstates); //setelah berhasil diambil lalu ditampilkan
      }

	/*
	public function pilih_kota(){
	$vkota=$this->uri->segment(3);
		$data['list_kota']=$this->test_m->get_list_kota($vkota);
		$this->load->view('index',$data);
	}
	
	
	
	//dijalankan saat provinsi di klik
	
	function display_kota(){
		$data['list_kota']=$this->test_m->get_list_kota();
		$this->load->view('index',$data);
	}
	*/
	function display(){
		$this->input->post('submit');
		/*$tujuan=$_POST['kota'];
		echo $tujuan;
		break;*/
		$data['list_item']=$this->test_m->get_list();
		$this->load->view('destinasi',$data);
	}
}
?>
