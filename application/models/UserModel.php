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


}