<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class produk_controller extends CI_Controller {

   function __construct()
   {
       parent::__construct();
    }

    function index()
    {
       $this->load->library('template');
        $this->load->model('product_model','product',true);
       $data['product_list'] = $this->product->get_all();
        $this->template->display('product', $data);
    }
 }

 ?>