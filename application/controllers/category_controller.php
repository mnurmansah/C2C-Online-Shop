<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_controller extends CI_Controller {

    public $data = array();

    public function __construct() {
		parent::__construct();

		$this->load->model("model_category","mc");
    }

    public function index() {
        /* Contoh manggil header
            $this->load->view('main_components/header'); */

        $this->data['isEdit'] = false;
        $this->load->view('main_categories', $this->data);
    }
    
    public function addNewCategory() {
        $data = array(
            'name_category' => $this->input->post('txtname_category'),
            'add_byuser' => ''
        );
        if ($this->mc->insertIntoCategory($data)) {
            redirect('category');
        } else {
            echo 'Error';
        }
    }

    public function deleteCategory($categoryId) {
        if ($this->mc->deleteCategory($categoryId)) {
            redirect('category');
        } else {
            echo 'Error';
        }
    }

    public function saveEdit($categoryId) {
        $data = array(
            'name_category' => $this->input->post('txtname_category'),
            'add_byuser' => ''
        );
        if ($this->mc->updateCategory($categoryId, $data)) {
            redirect('category');
        } else {
            echo 'Error';
        }
    }

    public function setEditState($categoryId) {
        $this->data['categoryId'] = $categoryId;
        $this->data['categoryData'] = $this->mc->loadByCategoryId($categoryId);
        $this->data['isEdit'] = true;

        $this->load->view('main_categories', $this->data);
    }
}
