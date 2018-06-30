<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class categorymodel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function gettablemain_category(){
		$query=$this->db->get('tbl_category');
		return $query->result();
	}
}