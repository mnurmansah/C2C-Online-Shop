<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
   Model ini untuk menyimpan kumpulan dari method yang akan digunakan pada sub modul category 
*/

class Model_category extends CI_Model {
    
	public function __Construct(){
		parent::__construct();
    }
    
    public function loadAll() {
        return $this->db->order_by('category_id','ASC')->get('tbl_category')->result_object();
    }

    public function loadByCategoryId($categoryId) {
        return $this->db->where('category_id', $categoryId)->get('tbl_category')->result_object();
    }

    public function insertIntoCategory($data) {
        return $this->db->insert('tbl_category', $data);
    }

    public function updateCategory($categoryId, $data) {
        return $this->db->where('category_id', $categoryId)->update('tbl_category', $data);
    }

    public function deleteCategory($categoryId) {
        // Kalau ada sub category nya, di delete dulu.
        if ($this->hasSubCategory($categoryId)) {
            $this->deleteSubCategoryByCategory($categoryId);
        }
        return $this->db->where('category_id', $categoryId)->delete('tbl_category');
    }

    public function hasSubCategory($categoryId) {
        $anySubCategory = $this->db->where('fcategory_id', $categoryId)->get('tbl_subcategory')->num_rows();
        if ($anySubCategory > 0) {
            return true;
        }
        return false;
    }

    private function deleteSubCategoryByCategory($categoryId) {
        return $this->db->where('fcategory_id', $categoryId)->delete('tbl_subcategory');
    }
}