
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
          <li><a href="<?=base_url()?>index.php/frontend/historyorder"><i class="icon-book"></i> History Order</a></li>
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
          <li><a href="<?=base_url()?>index.php/frontend/historyorder"><i class="icon-book"></i> History Order</a></li>
          <li class="divider"></li>
        </ul>

        <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Order ID</th>
                  <th>Order Date</th>
                  <th>User Fullname</th>
                  <th>Product Name</th>
                  <th>Seller ID</th>
                  <th>Product Quantity</th>
                  <th>Product Price ($)</th>
                  <th>Shipping Name</th>
                  <th>Shipping Price ($)</th>
                  <th>Amount ($)</th>
        </tr>
              </thead>
              <tbody>
                <?php 
                    foreach ($this->hom->gettableHistoryOrder() as $row) {
                                                                      echo "<tr>
                                                                          <td>$row->order_id</td>
                                                                          <td>$row->order_date</td>
                                                                          <td>$row->user_fullname</td>
                                                                          <td>$row->product_name</td>
                                                                          <td>$row->user_id</td>
                                                                          <td>$row->product_quantity</td>
                                                                          <td>$row->product_price</td>
                                                                          <td>$row->shipping_name</td>
                                                                          <td>$row->shipping_price</td>
                                                                          <td>$row->amount</td>
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
