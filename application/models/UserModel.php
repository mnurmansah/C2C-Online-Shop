<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}
 
 function insertUser($data) 
  	{
      return $this->db->insert('tbl_user',$data);
    }

   public function cekUser($data) {
        $this->db->where('user_username', $data['user_username']);
        $this->db->where('user_password', $data['user_password']);
        return $this->db->get('tbl_user')->row_object();
    }

    function selectCat(){
      $this->db->select('*');
      return $this->db->get('tbl_subcategory')->result();
    }

   function postUser($data) 
    {
      return $this->db->insert('tbl_product',$data);
    }

   function selectProduct(){
      $this->db->select('*');
      $this->db->order_by('product_id','DESC');
      return $this->db->get('tbl_product')->result();
    }
  function gettableUser(){
    $query=$this->db->get('tbl_user');
    return $query->result();
  }

  function gettableUserProduct(){
    $user_id = $this->session->userdata('user_id');
    $query = $this->db->query("SELECT tbl_product.product_id, tbl_category.name_category,tbl_subcategory.name_subcategory,tbl_product.product_name,tbl_product.product_price, tbl_product.product_quantity,tbl_product.product_condition, tbl_product.product_date, tbl_product.img_thumbnail FROM tbl_product LEFT JOIN tbl_category ON tbl_product.category_id=tbl_category.category_id LEFT JOIN tbl_subcategory ON tbl_product.subcategory_id=tbl_subcategory.subcategory_id WHERE tbl_product.user_id='".$user_id."'");

    //$query=$this->db->get('tbl_product');
    return $query->result();
  }


}