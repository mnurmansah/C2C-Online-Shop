<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));

	}

	public function index(){
	$item=$this->cart->contents();
	echo "<pre>";
	print_r($item);
	}



	public function add() {
	
		$data= array(
			'id'      	=> $this->input->post('product_id'),
			'image'     => $this->input->post('img_thumbnail'),
			'name'    	=> $this->input->post('product_name'),
			'price'   	=> $this->input->post('product_price'),
			'qty'  => 1
			);

		$this->cart->insert($data);
		redirect('frontend/shopping');
	}



	public function remove($rowid) {

	  $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );

        $this->cart->update($data);
		$this->load->view('frontend/shopping');

	}





}
