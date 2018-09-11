<?php
include('header.php');
?>

<?php
include('header_frontend.php');
?>

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
            
		<br class="clr">
		<hr class="soft">
		<div class="tab-content">
			<div class="tab-pane active" id="listView">
				
				<?php foreach ($product_search_id as $pro): ?>
				<div class="row">	
				  	<form action="<?php echo site_url('cart/add') ?>" method="post">
					<div class="span2">
						<img src="<?php echo base_url() ?>/assets/user/imagepost/<?php echo $pro->img_thumbnail ?>" alt="" style="max-height: 150px;">
					</div>
					<div class="span4">
						<h3><?php echo $pro->product_condition ?></h3>				
						<hr class="soft"></hr>
						<h5><?php echo $pro->product_name ?> </h5>
						<p>
							<?php echo $pro->product_desc ?>
						</p>
						
						<a class="btn btn-small pull-right" href="<?php echo site_url('frontend/product_details/'.$pro->product_id) ?>">View Details</a> 
						<br class="clr">
					</div>
					<div class="span3 alignR">
	
					<h3> $<?php echo $pro->product_price ?></h3>

					<input type="hidden" name="product_id" value="<?php echo $pro->product_id?>">
					  <input type="hidden" name="product_name" value="<?php echo $pro->product_name?>">
					  <input type="hidden" name="product_price" value="<?php echo $pro->product_price?>">
					  <input type="hidden" name="product_quantity" value="1">
					  <input type="submit"  value="Add to Cart" class="btn btn-large btn-primary">
						</form>
					</div>
			</div>
					<?php endforeach ?> 
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