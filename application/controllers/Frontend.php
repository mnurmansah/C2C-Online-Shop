<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SellerModel');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

    }

	public function index()
	{
		$postSeller = $this->SellerModel->selectProduct();
		$this->data['postseller'] = $postSeller;
		$this->load->view('frontend/index',$this->data);
		
	}

	public function register()
	{
		$this->load->view('frontend/register');
		
	}

	public function registercustomer()
	{
		$this->load->view('frontend/registercustomer');
		
	}

	public function login()
	{
		$this->load->view('frontend/login');
		
	}

	public function logincustomer()
	{
		$this->load->view('frontend/logincustomer');
		
	}


	public function profile()
	{
		$SubCat = $this->SellerModel->selectCat();
		$this->data['subcat'] = $SubCat;
		$this->load->view('frontend/profile',$this->data);
	}

	public function profile_yourproduct()
	{
		$this->load->view('frontend/profile_yourproduct');
	}

	public function seller_regis(){
	$config['upload_path']          = 'assets/seller/image';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
 
 	if ( ! $this->upload->do_upload('seller_img')) {
 	$this->session->set_flashdata('gagal','Your file is not support with the requirement, please add again');
	redirect('frontend/register');

	 }else{

			$file = $this->upload->data();
			$gambar = $file['file_name'];
			$i = $this->input;
			$data = array(
				'seller_fullname' 	=> $i->post('seller_fullname'),
				'seller_username' 	=> $i->post('seller_username'),
				'seller_password' 	=>sha1($i->post('seller_password')),
				'seller_email' 		=> $i->post('seller_email'),
				'seller_address' 	=> $i->post('seller_address'),
				'seller_img'        => $gambar
		);
	$this->SellerModel->insertSeller($data);
	$this->session->set_flashdata('note','The data has been added');
	redirect('frontend/register');


	 }

	}


	public function seller_postproduct(){
	$config['upload_path']          = 'assets/seller/imagepost';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
 
 	if ( ! $this->upload->do_upload('seller_productimage')) {
 	$this->session->set_flashdata('gagal','Your file is not support with the requirement, please add again');
	redirect('frontend/profile');

	 }else{

			$file = $this->upload->data();
			$gambar = $file['file_name'];
			$i = $this->input;
			$data = array(
				'seller_id' 		=> $this->session->userdata('seller_id'),
				'product_name' 		=> $i->post('seller_productname'),
				'product_price' 	=> $i->post('seller_productprice'),
				'subcategory_id' 	=> $i->post('seller_subcategory'),
				'product_condition' => $i->post('seller_productcondition'),
				'img_thumbnail'     => $gambar,
				'product_desc' 		=> $i->post('seller_productdescription'),
		);
	$this->SellerModel->postSeller($data);
	$this->session->set_flashdata('note','The data has been added');
	redirect('frontend/profile');


	 }

	}		


}

