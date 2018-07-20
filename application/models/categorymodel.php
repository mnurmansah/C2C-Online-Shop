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
}