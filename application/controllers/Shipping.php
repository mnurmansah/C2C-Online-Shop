<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipping extends CI_Controller {

    public $data = array();

    public function __construct() {
		parent::__construct();

		$this->load->model("ShippingModel","sm");
    }

    public function index() {
        /* Contoh manggil header
            $this->load->view('main_components/header'); */

        $this->data['isEdit'] = false;
        $this->load->view('shipping', $this->data);
    }
    
    public function saveshipping() {
        $data=array(
            'shipping_id'=>$this->input->post('shipping_id'),
            'shipping_name'=>$this->input->post('shipping_name'),
            'shipping_price'=>$this->input->post('shipping_price'),
            'shipping_phonenumber'=>$this->input->post('shipping_phonenumber')          
        );
        if ($this->sm->insertintoshipping($data)) {
            redirect('shipping');
        } else {
            echo 'Error';
        }
    }

    public function deleteshipping($shippingid) {
        if ($this->sm->deleteshipping($shippingid)) {
            redirect('shipping');
        } else {
            echo 'Error';
        }
    }

    public function editshipping($shippingid) {
        $data = array(
            'shipping_name'=>$this->input->post('shipping_name'),
            'shipping_price'=>$this->input->post('shipping_price'),
            'shipping_phonenumber'=>$this->input->post('shipping_phonenumber')      
        );
        if ($this->sm->updateshipping($shippingid, $data)) {
            redirect('shipping');
        } else {
            echo 'Error';
        }
    }

    public function editstateshipping($shippingid) {
        $this->data['shippingid'] = $shippingid;
        $this->data['shippingdata'] = $this->sm->loadbyshippingid($shippingid);
        $this->data['isEdit'] = true;

        $this->load->view('shipping', $this->data);
    }
}
