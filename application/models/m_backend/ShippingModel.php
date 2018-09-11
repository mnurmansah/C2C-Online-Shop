<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ShippingModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

    public function loadShipping(){
        return $this->db->order_by('shipping_id','ASC')->get('tbl_shipping')->result_object();
    }
}