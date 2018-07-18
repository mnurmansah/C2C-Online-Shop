<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class subcategorymodel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettablesubmain_category(){
		$query=$this->db->query("SELECT tbl_subcategory.subcategory_id, tbl_category.name_category, tbl_subcategory.name_subcategory, tbl_subcategory.add_byusersubc, tbl_subcategory.date_entered FROM tbl_subcategory JOIN tbl_category WHERE tbl_subcategory.fcategory_id = tbl_category.category_id");
		return $query->result();
	}
}