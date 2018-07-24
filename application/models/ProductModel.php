<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ProductModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettableProduct(){

		return $this->db->order_by('product_id','DESC')->get('tbl_product')->result_object();
	}
}