<?php
 class C_mahasiswa extends CI_Controller {
 
   function __construct(){
     parent::__construct();    
     $this->load->model('m_mahasiswa','',TRUE);
     $this->load->library('pagination'); //call pagination library	 
   }
    
   function index() {
     //count the total rows 
	 $query=$this->db->query("select * from mahasiswa");
     $n = $query->num_rows();

     $config['base_url'] = base_url().'index.php/c_mahasiswa/index/'; 
     $config['total_rows'] = $n; 
     $config['per_page'] = '3'; //the number of per page for pagination
     $config['uri_segment'] = 3; 
     $config['full_tag_open'] = '[';
     $config['full_tag_close'] = ']';

     $this->pagination->initialize($config); //initialize pagination
     $data['title'] = 'Daftar Mahasiswa';
     $data['list_mahasiswa'] = $this->m_mahasiswa->get_all($config['per_page'],$this->uri->segment(3));
     $this->load->view('v_mahasiswa', $data);
    }
}
?>
	
   