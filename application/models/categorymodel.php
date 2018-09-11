<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class categorymodel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettablemain_category(){
		$query=$this->db->get('tbl_category');
		return $query->result();
	}

	function gettablesub_category(){
		$query=$this->db->select('*, (select count(*) from tbl_product where subcategory_id=tbl_subcategory.subcategory_id) as total');
		$query=$this->db->get('tbl_subcategory');
		return $query->result();
	}

	function getAllCategorySub(){	
		$query=$this->db->from('tbl_category');
		$query=$this->db->join('tbl_subcategory','tbl_category.category_id = tbl_subcategory.fcategory_id');
		return $query->get()->result();
	}

	function findProduct($subcategory_id='all',$name=null){
		$this->db->select('*');
		if ($subcategory_id!='all') {
			$this->db->where('category_id',$subcategory_id);
		}
		if ($name!='') {
			$this->db->like('product_name',$name, 'both');
		}
		return $this->db->get('tbl_product')->result();
	}

	function findProductBySub($subcategory_id){
		$this->db->select('*');
		$this->db->where('subcategory_id',$subcategory_id);
		return $this->db->get('tbl_product')->result();
	}
}