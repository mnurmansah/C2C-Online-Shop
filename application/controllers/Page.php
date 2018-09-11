<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("categorymodel","cm");
		$this->load->model("subcategorymodel","scm");
		$this->load->model("ProductModel","gtp");
		$this->load->model("UserModel","um");
		$this->load->model("ShippingModel","sm");
		$this->load->model("OrderModel","om");
		$this->load->model("PaymentModel","pm");
		$this->load->model("DetailOrderModel","dom");
		$this->load->model("ReportOrderModel","rom");
	}

        public function index(){
            $this->load->view('dashboard');
		}

		public function dashboard(){
			$this->load->view ('dashboard');
		}

		public function main_categories() {
			$this->load->view ('main_categories');
		}

		public function sub_categories() {
			$this->load->view ('sub_categories');
		}

		public function shipping() {
			$this->load->view ('shipping');
		}

		public function product() {
			$this->load->view ('product');
		}

		public function order() {
			$this->load->view ('order');
		}

		public function user() {
			$this->load->view ('user');
		}

		public function payment() {
			$this->load->view ('payment');
		}

		public function detailorder() {
			$this->load->view ('detailorder');
		}

		public function reportorder() {
			$this->load->view ('reportorder');
		}

		public function adminuser() {
			$this->load->view ('adminuser');
		}

	function deletecategory($categoryid){
		$categoryid = $this->db->where('category_id', $categoryid);
		$this->db->delete('tbl_category');
		redirect('page/main_categories','refresh');
	}

	function listcategoryname(){
		$data['tbl_category']=$this->categorynamemodel->getcategorynamemodel();
		$this->load->view('page/sub_categories',$data);
 
    }
	
	function savesubcategory(){
		$data=array(
			'fcategory_id'=>$this->input->post('txt_fcategoryid'),
			'name_subcategory'=>$this->input->post('txtname_subcategory')

		);
		$this->db->insert('tbl_subcategory', $data);
		redirect('page/sub_categories');
	}

	function deletesubcategory($subcategoryid){
		$subcategoryid = $this->db->where('subcategory_id', $subcategoryid);
		$this->db->delete('tbl_subcategory');
		redirect('page/sub_categories','refresh');
	}

	function deleteproduct($productid){
		$productid = $this->db->where('product_id', $productid);
		$this->db->delete('tbl_product');
		redirect('page/product','refresh');
	}

	function deleteuser($userid){
		$userid = $this->db->where('user_id', $userid);
		$this->db->delete('tbl_user');
		redirect('page/user','refresh');
	}

	function deleteorder($orderid){
		$orderid = $this->db->where('order_id', $orderid);
		$this->db->delete('tbl_order');
		redirect('page/order','refresh');
	}

	function deletepayment($paymentid){
		$paymentid = $this->db->where('payment_id', $paymentid);
		$this->db->delete('tbl_payment');
		redirect('page/payment','refresh');
	}















}
        
        
