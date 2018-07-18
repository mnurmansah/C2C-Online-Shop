<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginSeller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('SellerModel');
		$this->load->helper(array('form', 'url'));
	}


	public function index() {
	$this->load->view('frontend/login');
	}

function dologin() {
		$data = [
			'seller_username' => $this->input->post('seller_username'),
			'seller_password' => sha1($this->input->post('seller_password')),
		];
		$dataSeller = $this->SellerModel->cekSeller($data); // 4. Cek data berdasarkan username dan password
		if ($dataSeller) {
			$sess_ = [ // 5. Hasil dari query ditampun di dalam variabel $sess_
				'seller_id' 			=> $dataSeller->seller_id,
				'seller_username' 		=> $dataSeller->seller_username,
				'logged' 				=> true,
			];
			$this->session->set_userdata( $sess_ ); // 6. Daftarin $sess_ ke session
			redirect('frontend');
		} else {
			$this->session->set_flashdata('gagal', 'Sorry, username or password are not valid');
			redirect('LoginSeller');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('LoginSeller');
	}


}














