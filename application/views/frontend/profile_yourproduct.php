
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


<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6"> </div>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.html"><span class="">Fr</span></a>
		<a href="product_summary.html"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.html"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.html"><span class="">$</span></a>
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-user"></i>Profile</span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="<?=base_url()?>index.php/frontend/index"><img src="<?php echo base_url() ?>assets/themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
      <?php if ($this->session->userdata('logged')) { ?>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""> <a href="<?=base_url()?>index.php/frontend/profile" role="button" style="padding-right:0"><span class="btn btn-large btn-success" ><?php echo $this->session->userdata('user_username') ?></span></a></li>
	<li class="">
	 <a href="<?=site_url('loginuser/logout')?>" role="button" style="padding-right:0"><span class="btn btn-large btn-danger">Sign Out</span></a>
	</li>
    </ul>
    <?php }else{ ?>
	<ul id="topMenu" class="nav pull-right">
	 <li class=""> <a href="<?=base_url()?>index.php/frontend/register" role="button" style="padding-right:0"><span class="btn btn-large btn-success" >Register</span></a></li>
	 <li class="">
	 <a href="<?=base_url()?>index.php/frontend/login" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Log in</span></a>
	</li>
	<li class=""> <a href="<?=base_url()?>index.php/frontend/login" role="button" style="padding-right:0"><span class="btn btn-large btn-warning">Post Free Ads</span></a></li>
    </ul>
    <?php } ?>	
  </div>
</div>
</div>
</div>
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
          <li><a href="#"><i class="icon-user"></i> Profile</a></li>
          <li><a href="#"><i class="icon-pencil"></i> Notifications</a></li>
          <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="icon-flag"></i> Help</a></li>
        </ul>
      </div>



</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Your Product</li>
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
          <li><a href="<?=base_url()?>index.php/frontend/profile"><i class="icon-pencil"></i> Post New Product</a></li>
          <li><a href="<?=base_url()?>index.php/frontend/profile_yourproduct"><i class="icon-user"></i> Your Product</a></li>
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
                             <td>$row->product_condition</td>
                             <td>$row->product_date</td>
                             <td>$row->img_thumbnail</td>
                             <td><a href='".site_url('page/deleteproduct/'.$row->product_id)."'><button type='button' class='btn btn-danger'>X</button></a>
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
