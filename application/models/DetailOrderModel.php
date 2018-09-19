<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DetailOrderModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettableDetailOrder(){
		$query=$this->db->get('tbl_orderdetails');
		return $query->result();
	}
}