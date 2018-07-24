<?php
include('header.php');
?>

<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome! &nbsp<strong><?php echo $this->session->userdata('user_username') ?></strong></div>
	<div class="span6">
	<div class="pull-right">
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
		   	<select class="form-control" name="user_subcategory" placeholder="Select Sub Category">
		   		<option value="null" selected disabled>Choose Category</option>
 			<?php foreach ($category as $cat): ?>
 				<option value="<?= $cat->category_id  ?>"><?php echo $cat->name_category ?></option>
 			<?php endforeach ?> 
            </select>     
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <?php if ($this->session->userdata('logged')) { ?>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""> <a href="<?=base_url()?>index.php/frontend/profile" role="button" style="padding-right:0"><span class="btn btn-large btn-success" ><?php echo $this->session->userdata('user_username') ?></span></a></li>
	<li class=""> <a href="<?=base_url()?>index.php/frontend/profile" " role="button" style="padding-right:0"><span class="btn btn-large btn-warning">Post Ads</span></a></li>
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
<?php
include('sidebar.php');
?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li class="active">Search Product</li>
    </ul>	
	<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#profile" data-toggle="tab">Related Products</a></li>
            </ul>
            
		<div id="myTab" class="pull-right">
		 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
		 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
		</div>
		<br class="clr">
		<hr class="soft">
		<div class="tab-content">
			<div class="tab-pane active" id="listView">
				<div class="row">	  
					<div class="span2">
						<img src="themes/images/products/4.jpg" alt="">
					</div>
					<div class="span4">
						<h3>New | Available</h3>				
						<hr class="soft">
						<h5>Product Name </h5>
						<p>
						Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - 
						that is why our goods are so popular..
						</p>
						<a class="btn btn-small pull-right" href="product_details.html">View Details</a>
						<br class="clr">
					</div>
					<div class="span3 alignR">
					<form class="form-horizontal qtyFrm">
					<h3> $222.00</h3>
					<div class="btn-group">
					  <a href="product_details.html" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
					  <a href="product_details.html" class="btn btn-large"><i class="icon-zoom-in"></i></a>
					 </div>
						</form>
					</div>
			</div>
		</div>
			<div class="tab-pane" id="blockView">
				<ul class="thumbnails">
					<li class="span3">
					  <div class="thumbnail">
						<a href="product_details.html"><img src="themes/images/products/10.jpg" alt=""></a>
						<div class="caption">
						  <h5>Manicure &amp; Pedicure</h5>
						  <p> 
							Lorem Ipsum is simply dummy text. 
						  </p>
						  <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">€222.00</a></h4>
						</div>
					  </div>
					</li>
				  </ul>
			<hr class="soft">
			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>
	</div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
<?php
include('footer.php');
?>