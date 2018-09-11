<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ShippingModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

    public function loadShipping(){
        return $this->db->order_by('shipping_id','ASC')->get('tbl_shipping')->result_object();
    }

    public function loadbyshippingid($shippingid) {
        return $this->db->where('shipping_id', $shippingid)->get('tbl_shipping')->result_object();
    }

    public function loadRowShipping($shippingid) {
        return $this->db->where('shipping_id', $shippingid)->get('tbl_shipping')->row();
    }

    public function insertintoshipping($data) {
        return $this->db->insert('tbl_shipping', $data);
    }

    public function updateshipping($shippingid, $data) {
    return $this->db->where('shipping_id', $shippingid)->update('tbl_shipping', $data);
    }

    public function deleteshipping($shippingid) {
        // Kalau ada sub category nya, di delete dulu.

        return $this->db->where('shipping_id', $shippingid)->delete('tbl_shipping');
    }

}