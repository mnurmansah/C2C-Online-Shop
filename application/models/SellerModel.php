<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SellerModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}
 
 function insertSeller($data) 
  	{
      return $this->db->insert('tbl_seller',$data);
    }

   public function cekSeller($data) {
        $this->db->where('seller_username', $data['seller_username']);
        $this->db->where('seller_password', $data['seller_password']);
        return $this->db->get('tbl_seller')->row_object();
    }

    function selectCat(){
      $this->db->select('*');
      return $this->db->get('tbl_subcategory')->result();
    }

   function postSeller($data) 
    {
      return $this->db->insert('tbl_product',$data);
    }

   function selectProduct(){
      $this->db->select('*');
      return $this->db->get('tbl_product')->result();
    }
  function gettableSeller(){
    $query=$this->db->get('tbl_seller');
    return $query->result();
  }


}