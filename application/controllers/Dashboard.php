<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
    }

	public function index()
	{
		if($this->admin->logged_id())
		{

			$this->load->view("dashboard");			

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

		public function dashboard(){
			$this->load->view ('dashboard');
		}

		public function main_categories() {
			$this->load->view ('main_categories');
		}

		public function sub_categories() {
			$this->load->view ('sub_categories');
		}

		public function product() {
			$this->load->view ('product');
		}

		public function user() {
			$this->load->view ('user');
		}

		public function shipping() {
			$this->load->view ('shipping');
		}

}
