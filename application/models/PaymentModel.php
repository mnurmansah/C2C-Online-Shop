<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PaymentModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettablePayment(){
		$query=$this->db->get('tbl_payment');
		return $query->result();
	}
}