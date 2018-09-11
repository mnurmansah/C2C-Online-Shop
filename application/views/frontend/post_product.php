
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
          <li><a href="<?=base_url()?>index.php/frontend/profile_yourproduct"><i class="icon-user"></i> Your Product Sell</a></li>
          <li class="divider"></li>
        </ul>
     <form class="form-horizontal" action="<?php echo site_url('frontend/user_postproduct') ?>" method="Post" enctype="multipart/form-data">
	   	 <div class="control-group">
			<label class="control-label" for="MainCategoryProduct">Main Category Product<sup>*</sup></label>
			<div class="controls">
 			<select class="form-control" id="main_category" name="user_maincategory" onChange="getSubcategory()" placeholder="Select Main Category">
 				<option value="null" selected disabled>Choose Main Category</option>
 				<?php $no=1; foreach($maincat as $rows => $value) : ?>
 					<option value="<?= $value->category_id  ?>"><?= $value->name_category ?></option>
 				 <?php  $no++; endforeach; ?> 
 				
            </select>        
			</div>
		 </div> 
		 <div class="control-group">
			<label class="control-label" for="SubCategoryProduct">Sub Category Product<sup>*</sup></label>
			<div class="controls">
 			<select class="form-control" id="subcategory" name="user_subcategory" placeholder="Select Sub Category" disabled>
 				<option value="null" selected disabled>Choose Sub Category</option>
            </select>        
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="ProductName">Product Title <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="ProductName" name="user_productname" placeholder="Product Title" required>
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
			<label class="control-label" for="ProductPrice">Product Quantity<sup>*</sup></label>
			<div class="controls">
			  <input type="number" id="ProductPrice" name="user_productquantity" placeholder="Product Quantity" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="ProductDescription">Product Description<sup>*</sup></label>
			<div class="controls">
              <textarea class="input-xxlarge" type="text" rows="5" id="ProductDescription" name="user_productdescription" placeholder="Product Description" required>
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
			<label class="control-label" for="ProductImage">Product Image Detail 1 <sup>*</sup></label>
			<div class="controls">
		  	<input type="file" id="ProductImage2" name="user_productimage2">
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ProductImage">Product Image Detail 2 <sup>*</sup></label>
			<div class="controls">
		  	<input type="file" id="ProductImage3" name="user_productimage3">
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ProductImage">Product Image Detail 3 <sup>*</sup></label>
			<div class="controls">
		  	<input type="file" id="ProductImage4" name="user_productimage4">
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

<script type="text/javascript">
	function getSubcategory(url) {
		var test = $('#main_category').val();
		var url = "getSubCategory";
		// alert(test);
		$.get(url,{ catId: test }, function(data) {
			$('#subcategory').prop("disabled", false);
			$('#subcategory').html(data);
		});
	};
</script>