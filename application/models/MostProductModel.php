<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MostProductModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function getMostProductModel(){
		$query=$this->db->query("SELECT tbl_product.* FROM `tbl_product` inner join `tbl_orderdetails` on tbl_product.product_id=tbl_orderdetails.product_id GROUP BY product_id ORDER BY sum(tbl_orderdetails.product_quantity) DESC LIMIT 4");
		return $query->result();
	}
}