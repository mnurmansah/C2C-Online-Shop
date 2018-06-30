<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class categornamemodel extends CI_Model {
	public function __Construct(){
		parent::__construct();
	}

	function getcategorynamemodel(){
    $query = $this->db->get('tbl_category');
    return $query->result_array();
	}
}
}