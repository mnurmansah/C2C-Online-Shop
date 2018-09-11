<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller{
  
    public function index(){
      $data['product']=$this->ProductModel->get_all();
      $this->load->view('product',$data);
    }
 
    public function search(){
      $keyword = $this->input->post('keyword');
      $data['products']=$this->ProductModel->get_product_keyword($keyword);
      $this->load->view('search',$data);
    }
  }