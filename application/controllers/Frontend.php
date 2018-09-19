<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('ProductModel');
        $this->load->model('MostProductModel');
        $this->load->model('HistoryOrderModel',"hom");
        $this->load->model('categorymodel');
        $this->load->model("model_category","mc");
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');


		$postUser = $this->UserModel->selectProduct();
		$this->data['postuser'] = $postUser;
		$this->data['category'] = $this->categorymodel->gettablemain_category();
		$this->data['subcategory'] = $this->categorymodel->gettablesub_category();


    }

	public function index()
	{
		$this->data['mostProduct'] = $this->MostProductModel->getMostProductModel();
		$this->load->view('frontend/index',$this->data);
		
	}

	public function register()
	{
		$this->load->view('frontend/register',$this->data);
		
	}


	public function login()
	{
		$this->load->view('frontend/login',$this->data);
		
	}

	public function product_search()
	{
		$this->load->view('frontend/product_search',$this->data);
		
	}

	public function qrcode()
	{
		$this->load->view('frontend/qrcode');
		
	}


	public function post_product()
	{
		$SubCat = $this->UserModel->selectCat();
		$this->data['subcat'] = $SubCat;
		$this->data['maincat'] = $this->mc->loadAll();
		$this->load->view('frontend/post_product',$this->data);
	}
	
	public function profile()
	{
		$this->load->view('frontend/profile',$this->data);
	}

	public function product_details($product_id)
	{
		$detail = $this->ProductModel->SelectDetailProduct($product_id);
		$owner = $this->ProductModel->getProductOwner($detail->user_id);
		$this->data['owner'] = $owner;
		$this->data['detail'] = $detail;
		$this->load->view('frontend/product_details',$this->data);


	}

	public function search($subkategori=null)
	{
		if ($subkategori) {
			$product = $this->categorymodel->findProduct($subkategori);
			
		}else{
			$kategori = $this->input->get('user_subcategory');
			$search = $this->input->get('search');
			$product = $this->categorymodel->findProduct($kategori,$search);
			
		}
		$this->data['product_search_id'] = $product;
		$this->load->view('frontend/search',$this->data);
	}

	public function subcategory($sub)
	{
		$product = $this->categorymodel->findProductBySub($sub);
		$this->data['product_search_id'] = $product;
		$this->load->view('frontend/search',$this->data);
	}



	public function profile_yourproduct()
	{
		$this->load->view('frontend/profile_yourproduct');
	}

	public function historyorder()
	{
		$this->load->view('frontend/historyorder');
	}


	public function shopping()
	{
		$this->load->view('frontend/shopping');
	}

	public function shipment()
	{
		if ($this->session->userdata('user_id')=="") {
			redirect('frontend/login','refresh');
		}else{
		$datacourir = $this->ProductModel->selectshipping();
		$this->data['shipping']=$datacourir;
		$this->load->view('frontend/shipment',$this->data);
		}
	}



	public function user_regis(){
	$config['upload_path']          = 'assets/user/image';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
 
 	if ( ! $this->upload->do_upload('user_image')) {
 	$this->session->set_flashdata('gagal','Your file is not support with the requirement, please add again');
	redirect('frontend/register');

	 }else{

			$file = $this->upload->data();
			$gambar = $file['file_name'];
			$i = $this->input;
			$data = array(
				'user_fullname' 	=> $i->post('user_fullname'),
				'user_username' 	=> $i->post('user_username'),
				'user_password' 	=>sha1($i->post('user_password')),
				'user_email' 		=> $i->post('user_email'),
				'user_phonenumber' 	=> $i->post('user_phonenumber'),
				'user_address' 		=> $i->post('user_address'),
				'user_locationlang' => $i->post('user_locationlang'),
				'user_locationlat' 	=> $i->post('user_locationlat'),
				'user_image'        => $gambar
		);
	$this->UserModel->insertUser($data);
	$this->session->set_flashdata('note','The data has been added');
	redirect('frontend/login');

	 }

	}

	public function user_postproduct(){
	$config['upload_path']          = 'assets/user/imagepost';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
 
 	if ($this->upload->do_upload('user_productimage')) {
			$file = $this->upload->data();
			$gambar1 = $file['file_name'];
	 } else {
	 	$gambar1 = false;
	 }

	 if ($this->upload->do_upload('user_productimage2')) {
			$file2 = $this->upload->data();
			$gambar2 = $file2['file_name'];

	 } else {
	 	$gambar2 = false;
	 }

	 if ($this->upload->do_upload('user_productimage3')) {
			$file3 = $this->upload->data();
			$gambar3 = $file3['file_name'];

	 } else {
	 	$gambar3 = false;
	 }

	 if ($this->upload->do_upload('user_productimage4')) {
			$file4 = $this->upload->data();
			$gambar4 = $file4['file_name'];

	 } else {
	 	$gambar4 = false;
	 }


	 if($gambar1 && $gambar2 && $gambar3 && $gambar4){
			$i = $this->input;
			$data = array(
				'user_id' 			=> $this->session->userdata('user_id'),
				'product_name' 		=> $i->post('user_productname'),
				'product_price' 	=> $i->post('user_productprice'),
				'category_id' 		=> $i->post('user_maincategory'),
				'subcategory_id' 	=> $i->post('user_subcategory'),
				'product_quantity' 	=> $i->post('user_productquantity'),
				'product_condition' => $i->post('user_productcondition'),
				'img_thumbnail'     => $gambar1,
				'img_thumbnail1'    => $gambar2,
				'img_thumbnail2'    => $gambar3,
				'img_thumbnail3'    => $gambar4,
				'product_desc' 		=> $i->post('user_productdescription'),
		);
	$this->UserModel->postUser($data);
	$this->session->set_flashdata('note','The data has been added');
	redirect('frontend/profile_yourproduct');

	} else{

	 $this->session->set_flashdata('gagal','Your file is not support with the requirement, please add again');
	redirect('frontend/profile_yourproduct');

	}
	}

	public function user_deleteproduct($productid){
			$productid = $this->db->where('product_id', $productid);
			$this->db->delete('tbl_product');
			redirect('frontend/profile_yourproduct','refresh');
	}		

    public function getSubCategory() {
        $main_categoryId = $_GET['catId'];
        $subcategory = $this->mc->loadSubCategoryByMainId($main_categoryId);

 		echo '<option value="null" selected disabled>Choose Sub Category</option>';
        foreach ($subcategory as $key) {
        	echo '<option value="'.$key->subcategory_id.'">'.$key->name_subcategory.'</option>';
        }
        exit;
    }

    function checkout(){

    	$this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $this->load->model('ShippingModel', 'sm');

    	$i = $this->input;

    	$shipping_price = $this->sm->loadRowShipping($i->post('user_shippingcourier'))->shipping_price;
    	$unique_trans_id = uniqid();

    	$config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/qrcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$unique_trans_id.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $unique_trans_id; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

    	$data=array(
    		'user_id'			=> $this->session->userdata('user_id'),
    		'shipping_id'		=> $i->post('user_shippingcourier'),
    		'shipping_address'	=> $i->post('user_shippingaddress'),
    		'total_amount'		=> $this->cart->total() + $shipping_price
    	);

    	//'PAYMENT/2018/05/01-UNIQUE'

    	$lastid = $this->ProductModel->insertCheckout($data);

    	$datar = array(
    		'order_id' 	=> $lastid,
    		'unique_trans_id' => $unique_trans_id,
    		'amount'	=> $this->cart->total() + $shipping_price
    	);

    	$this->ProductModel->insertPayment($datar);

    	$cartContents = $this->cart->contents();
    	foreach ($cartContents as $rows) {
    		$datas = array(
    			'product_id' 		=> $rows['id'],
    			'order_id'	 		=> $lastid,
    			'product_quantity'	=> $rows['qty'],
    			'product_price'		=> $rows['price']
    		);

    		$this->ProductModel->insertDetailCheckout($datas);
    	}
    	$this->cart->destroy();
    	$this->session->set_flashdata('qrcode','<img src="'.base_url().'assets/qrcode/'.$image_name.'" alt="asd" />');
    	redirect('frontend/qrcode');
    }

    function getGrandTotal() {
        $this->load->model('ShippingModel', 'sm');

    	$shipping_price = $this->sm->loadRowShipping($_GET['ship_id'])->shipping_price;
    	$grand_total = $this->cart->total() + $shipping_price;

    	$data = array('sp' => $shipping_price, 'gt' => $grand_total);
    	echo json_encode($data);
    }
}

