<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model','product',true);
       $this->load->library('cart');
        $this->load->library('template');
    }

    function add($id) {
        $product = $this->product->get($id);

        $data = array(
            'id'      => $product->id,
           'qty'     => 1,
           'price'   => $product->price,

            'name'    => $product->name,
        );

        $this->cart->insert($data);
        redirect('cart');
    }
    function update()
    {
        $this->cart->update($_POST);
        redirect('cart');
    }

    function index() {
       $data['cart_list'] = $this->cart->contents();
        $this->template->display('cart', $data);
    }

}