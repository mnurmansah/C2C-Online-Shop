<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ProductModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettableProduct(){
		$query=$this->db->get('tbl_product');
		return $query->result();
	}
}