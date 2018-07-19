
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
	<div class="well">
		<div class="well "><img src="<?php echo site_url() ?>assets/themes/images/logo.png" ></div> 
	</div>
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
		<li class="active">Post New Product</li>
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
     <form class="form-horizontal" action="<?php echo site_url('frontend/user_postproduct') ?>" method="Post" enctype="multipart/form-data">
	   	 
	   	 <!--
	   	 <div class="control-group">
			<label class="control-label" for="MainCategoryProduct">Main Category Product<sup>*</sup></label>
			<div class="controls">
 			<select class="form-control" name="user_maincategory" placeholder="Select Main Category">
 				
 				<?php $no=1; foreach($subcat as $rows => $value) : ?>
 					<option value="<?= $value->subcategory_id  ?>"><?= $value->name_subcategory ?></option>
 				 <?php  $no++; endforeach; ?> 
 				
            </select>        
			</div>
		 </div> 
		-->
		 <div class="control-group">
			<label class="control-label" for="SubCategoryProduct">Sub Category Product<sup>*</sup></label>
			<div class="controls">
 			<select class="form-control" name="user_subcategory" placeholder="Select Sub Category">
 				<?php $no=1; foreach($subcat as $rows => $value) : ?>
 					<option value="<?= $value->subcategory_id  ?>"><?= $value->name_subcategory ?></option>
 				 <?php  $no++; endforeach; ?> 
            </select>        
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="ProductName">Product Name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="ProductName" name="user_productname" placeholder="Product Name" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="ProductCondition">Product Condition<sup>*</sup></label>
			<div class="controls">
 			<select class="form-control" name="user_productcondition" placeholder="Select Product Condition">
 				<option>New</option>
                <option>Second</option>
            </select>        
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="ProductPrice">Product Price ($) <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="ProductPrice" name="user_productprice" placeholder="Product Price" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="ProductDescription">Product Description<sup>*</sup></label>
			<div class="controls">
              <textarea class="input-xxlarge" type="text" rows="3" id="ProductDescription" name="user_productdescription" placeholder="Product Description" required>
			  </textarea>
			</div>
		 </div>
	 <div class="control-group">
		<label class="control-label" for="ProductImage">Product Image <sup>*</sup></label>
		<div class="controls">
		  <input type="file" id="ProductImage" name="user_productimage">
		</div>
	  </div>
	  <div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" type="submit" value="Post Product" />
			</div>
		</div>	
	</form>
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
