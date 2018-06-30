<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class subcategorymodel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettablesubmain_category(){
		$query=$this->db->get('tbl_subcategory');
		return $query->result();
	}
}