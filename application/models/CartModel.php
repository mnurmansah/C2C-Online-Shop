<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CartModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function findAll(){
		return $this->db->get('tbl_product')->result();
	}

	function find($productid){
		return $this->db->where('product_id', $productid)->get('product')->row();
	}
}