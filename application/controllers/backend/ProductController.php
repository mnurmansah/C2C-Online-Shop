<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("ProductModel");
	}

	public function index()
	{
		$data = array();
		$data['products'] = $this->ProductModel->gettableProduct();
		$this->load->view('product', $data);
	}

}

/* End of file ProductController.php */
/* Location: ./application/controllers/backend/ProductController.php */