<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginUser extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->helper(array('form', 'url'));
	}


	public function index() {
	$this->load->view('frontend/login');
	}

function dologin() {
		$data = [
			'user_username' => $this->input->post('user_username'),
			'user_password' => sha1($this->input->post('user_password')),
		];
		$dataUser = $this->UserModel->cekUser($data); // 4. Cek data berdasarkan username dan password
		if ($dataUser) {
			$sess_ = [ // 5. Hasil dari query ditampun di dalam variabel $sess_
				'user_id' 				=> $dataUser->user_id,
				'user_username' 		=> $dataUser->user_username,
				'user_image'			=> $dataUser->user_image,
				'logged' 				=> true,
			];
			$this->session->set_userdata( $sess_ ); // 6. Daftarin $sess_ ke session
			redirect('frontend');
		} else {
			$this->session->set_flashdata('gagal', 'Sorry, username or password are not valid');
			redirect('LoginUser');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('frontend/login');
	}


}














