
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
	<div class="span6">Welcome!</div>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.html"><span class="">Fr</span></a>
		<a href="product_summary.html"><span class="">Es</span></a>
		<span class="btn btn-mini">En</span>
		<a href="product_summary.html"><span>&pound;</span></a>
		<span class="btn btn-mini">$155.00</span>
		<a href="product_summary.html"><span class="">$</span></a>
		<a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 3 ] Items in Your Cart </span> </a> 
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
   <ul id="topMenu" class="nav pull-right">
	 <li class=""> <a href="<?=base_url()?>index.php/frontend/register" role="button" style="padding-right:0"><span class="btn btn-large btn-success" >Register</span></a></li>
	 <li class="">
	 <a href="<?=base_url()?>index.php/frontend/login" role="button" style="padding-right:0"><span class="btn btn-large btn-success">Log in</span></a>
	</li>
	<li class=""> <a href="<?=base_url()?>index.php/frontend/postfreeads" role="button" style="padding-right:0"><span class="btn btn-large btn-warning">Post Free Ads</span></a></li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php
include('sidebar.php');
?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?=base_url()?>index.php/frontend/">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration Option</li>
    </ul>
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
    	<h3>Registration Seller</h3>

	<div class="well">
		<div class="alert alert-info">
		   <ul class="nav nav-tabs">
          <li><a href="<?=base_url()?>index.php/frontend/registercustomer"><i class="icon-pencil"></i> Registration as Customer</a></li>
          <li><a href="<?=base_url()?>index.php/frontend/register"><i class="icon-user"></i> Registration as Seller</a></li>
          <li class="divider"></li>
        </ul>

		<form class="form-horizontal" action="<?php echo site_url('frontend/seller_regis') ?>" method="Post" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label" for="Fullname">Seller Fullname <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="Fullname"  name="seller_fullname" placeholder="Full Name" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="Username">Seller Username <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="Username" name="seller_username" placeholder="Username" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="Password">Seller Password <sup>*</sup></label>
			<div class="controls">
			  <input type="password" id="Password" name="seller_password" placeholder="Password" required>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="Email">Seller Email <sup>*</sup></label>
		<div class="controls">
		  <input type="email" id="Email" name="seller_email" placeholder="Email" required>
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="location">Seller Address <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="seller_address" name="seller_address" placeholder="Seller Address" required>
		</div>
	  </div>

	 <div class="control-group">
		<label class="control-label" for="seller_img">Seller Image <sup>*</sup></label>
		<div class="controls">
		  <input type="file" id="seller_img" name="seller_img">
		</div>
	  </div>
	  <div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" type="submit" value="Register" />
			</div>
		</div>	
	</form>
	</div>
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
