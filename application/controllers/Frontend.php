<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

    }

	public function index()
	{
		$postUser = $this->UserModel->selectProduct();
		$this->data['postuser'] = $postUser;
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
		$SubCat = $this->UserModel->selectCat();
		$this->data['subcat'] = $SubCat;
		$this->load->view('frontend/profile',$this->data);
	}

	public function profile_yourproduct()
	{
		$this->load->view('frontend/profile_yourproduct');
	}

	public function user_regis(){
	$config['upload_path']          = 'assets/user/image';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
 
 	if ( ! $this->upload->do_upload('user_image')) {
 	$this->session->set_flashdata('gagal','Your file is not support with the requirement, please add again');
	redirect('frontend/register');

	 }else{

			$file = $this->upload->data();
			$gambar = $file['file_name'];
			$i = $this->input;
			$data = array(
				'user_fullname' 	=> $i->post('user_fullname'),
				'user_username' 	=> $i->post('user_username'),
				'user_password' 	=>sha1($i->post('user_password')),
				'user_email' 		=> $i->post('user_email'),
				'user_address' 		=> $i->post('user_address'),
				'user_image'        => $gambar
		);
	$this->UserModel->insertUser($data);
	$this->session->set_flashdata('note','The data has been added');
	redirect('frontend/register');

	 }

	}

	public function user_postproduct(){
	$config['upload_path']          = 'assets/user/imagepost';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
 
 	if ( ! $this->upload->do_upload('user_productimage')) {
 	$this->session->set_flashdata('gagal','Your file is not support with the requirement, please add again');
	redirect('frontend/profile');

	 }else{

			$file = $this->upload->data();
			$gambar = $file['file_name'];
			$i = $this->input;
			$data = array(
				'user_id' 			=> $this->session->userdata('user_id'),
				'product_name' 		=> $i->post('user_productname'),
				'product_price' 	=> $i->post('user_productprice'),
				'subcategory_id' 	=> $i->post('user_subcategory'),
				'product_condition' => $i->post('user_productcondition'),
				'img_thumbnail'     => $gambar,
				'product_desc' 		=> $i->post('user_productdescription'),
		);
	$this->UserModel->postUser($data);
	$this->session->set_flashdata('note','The data has been added');
	redirect('frontend/profile');
	 }

	}		


}

