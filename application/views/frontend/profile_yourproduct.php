
<?php
include('header.php');
?>

<style type="text/css">
	
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}
</style>

<?php
include('header_frontend.php');
?>

<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<div id="sidebar" class="span3">
  <div class="well">
    <div class="well "><img src="<?php echo base_url() ?>assets/user/image/<?php echo $this->session->userdata('user_image') ?>" ></div> 
    <center><b><?php echo $this->session->userdata('user_username') ?></b></center>
  </div>

  <div class="well">
        <ul class="nav nav-tabs nav-stacked">
          <li class="nav-header">Main Navigation</li>          
          <li><a href="<?=base_url()?>index.php/frontend/profile"><i class="icon-user"></i> My Profile</a></li>
          <li><a href="<?=base_url()?>index.php/frontend/post_product"><i class="icon-pencil"></i> Post & Your Product</a></li>
          <li><a href="<?=base_url()?>index.php/frontend/"><i class="icon-book"></i> History Order</a></li>
          <li><a href="<?=base_url()?>index.php/frontend/change_password"><i class="icon-cog"></i> Change Password</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="icon-flag"></i> Help</a></li>
        </ul>
      </div>



</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Your Product Sell</li>
    </ul>
    <div class="well">
	<?php
            //notifikasi
          if($this->session->flashdata('note')) 
            {
              echo'<div class="alert alert-success alert-dismissible">';
              echo'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
              echo $this->session->flashdata('note');
              echo'</div>';
            }elseif($this->session->flashdata('gagal')) 
            {
              echo'<div class="alert alert-danger alert-dismissible">';
              echo'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
              echo $this->session->flashdata('gagal');
              echo'</div>';
            }
      ?>	

	<div class="well">
		   <ul class="nav nav-tabs">
          <li><a href="<?=base_url()?>index.php/frontend/post_product"><i class="icon-pencil"></i> Post New Product</a></li>
          <li><a href="<?=base_url()?>index.php/frontend/profile_yourproduct"><i class="icon-user"></i> Your Product Sell</a></li>
          <li class="divider"></li>
        </ul>

        <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Main Category</th>
                  <th>Sub Category</th>
                  <th>Product Name</th>
                  <th>Product Price ($)</th>
                  <th>Product Quantity</th>
                  <th>Product Condition</th>
                  <th>Product Date</th>
                  <th>Product Image</th>
                  <th>Action</th>
        </tr>
              </thead>
              <tbody>
                <?php 
                    foreach ($this->UserModel->gettableUserProduct() as $row) {
                             echo "<tr>
                             <td>$row->product_id</td>
                             <td>$row->name_category</td>
                             <td>$row->name_subcategory</td>
                             <td>$row->product_name</td>
                             <td>$row->product_price</td>
                             <td>$row->product_quantity</td>
                             <td>$row->product_condition</td>
                             <td>$row->product_date</td>
                             <td><img src='".base_url('assets/user/imagepost/'.$row->img_thumbnail)."'/></td>


                             <td><a href='".site_url('frontend/'.$row->product_id)."'><button type='button' class='btn btn-primary'>Edit</button></a>
                             <td><a href='".site_url('frontend/user_deleteproduct/'.$row->product_id)."'><button type='button' class='btn btn-danger'>Delete</button></a>
                             
                             </tr>";  
                     }
                    ?></tbody>
                    </table>
    </div>

    


	
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php
include('footer.php');
?>
