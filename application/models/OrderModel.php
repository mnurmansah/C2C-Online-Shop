<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class OrderModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettableOrder(){
		$query=$this->db->get('tbl_order');
		return $query->result();
	}
}