<?php
class User_controller extends CI_Controller{

	function __Construct()
	{
        parent ::__construct();
	}

    function user()
    {
        $this->load->model('user_model');
        $data['judul'] = 'Menampilkan Data dari Database Menggunakan Codeigniter';
        $data['daftar_user'] = $this->user_model->get_user_all();
        $this->load->view('daftar_user', $data);
    }
}