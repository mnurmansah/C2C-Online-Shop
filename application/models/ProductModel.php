<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ProductModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettableProduct(){

		return $this->db->order_by('product_id','DESC')->get('tbl_product')->result_object();
	}

	// Fetch records 

	public function get_all(){
			return $this->db->get('tbl_product')->result();
		}


	function SelectDetailProduct($product_id){
		$this->db->select('*');
		$this->db->where('product_id',$product_id);
		return $this->db->get('tbl_product')->row_object();
	}

	function getProductOwner($user_id){
		$this->db->select('*');
		$this->db->where('user_id',$user_id);
		return $this->db->get('tbl_user')->row_object();
	}

	function selectshipping(){
		$this->db->select('*');
		return $this->db->get('tbl_shipping')->result();
	}


	function insertCheckout($data){

  		$this->db->insert('tbl_order', $data);
  		return $this->db->insert_id(); 
	}

	function insertDetailCheckout($datas){

  		return $this->db->insert('tbl_productdetails', $datas);
  		 
	}

	function insertPayment($datar){

  		return $this->db->insert('tbl_payment', $datar);
  		 
	}

}