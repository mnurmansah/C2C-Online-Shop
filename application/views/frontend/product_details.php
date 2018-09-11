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
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">Product Details</li>
    </ul>
    <br>	
	<div class="row">	  
			<div id="gallery" class="span3">
				<form action="<?php echo site_url('cart/add') ?>" method="post">
            <img src="<?php echo base_url() ?>assets/user/imagepost/<?php echo $detail->img_thumbnail?>"/>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="<?php echo base_url() ?>assets/user/imagepost/<?php echo $detail->img_thumbnail1?>"> <img style="width:29%" style="max-height: 120px" src="<?php echo base_url() ?>assets/user/imagepost/<?php echo $detail->img_thumbnail1?>" alt=""/></a>
                   <a href="<?php echo base_url() ?>assets/user/imagepost/<?php echo $detail->img_thumbnail2?>"> <img style="width:29%" src="<?php echo base_url() ?>assets/user/imagepost/<?php echo $detail->img_thumbnail2?>" alt=""/></a>
                   <a href="<?php echo base_url() ?>assets/user/imagepost/<?php echo $detail->img_thumbnail3?>" > <img style="width:29%" src="<?php echo base_url() ?>assets/user/imagepost/<?php echo $detail->img_thumbnail3?>" alt=""/></a>
                  </div>
                </div> 
              </div>
              <hr>
			</div>

			<div class="span6">
				<h3><?php echo $detail->product_name?></h3>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
				  	<div class="controls">
					  <input type="hidden" name="product_id" value="<?php echo $detail->product_id?>">
					  <input type="hidden" name="product_name" value="<?php echo $detail->product_name?>">
					  <input type="hidden" name="product_price" value="<?php echo $detail->product_price?>">
					  <input type="hidden" name="product_quantity" value="1">
					  <input type="submit"   class="btn btn-large btn-primary pull-right" value="Add to Cart">
					</div>
				  	<h5>Product Price :</h5>
					<label class="control-label"><span><h3>$<?php echo $detail->product_price?></h3></span></label>
				  </div>
				</form>
				<br>
				<h5>Description :</h5>
				<p>
				<?php echo $detail->product_desc?>
				</p>
				<br class="clr"/>
<h5>Seller Location :</h5>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAZDmMkzKRdGQBDDKbJFntQ1q-YPuiQ35g&sensor=false"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAAYrQ_24f5ridX1ZYFLLR_fzMOJXH3HJI&sensor=false"></script>
<script type="text/javascript">
var peta;
var lang = <?php echo $owner->user_locationlang ?>;
var lat = <?php echo $owner->user_locationlat ?>;
function peta_awal(){
    // definisikan koordinat awal untuk peta
       var awal = new google.maps.LatLng(lang,lat); 
       // peta option, berupa setting bagaimana peta itu akan muncul
       var petaoption = {zoom: 14,center: awal,mapTypeId: google.maps.MapTypeId.ROADMAP}; 
      // menuliskan koordinat peta dan memunculkannya ke halaman web
      peta = new google.maps.Map(document.getElementById("map_canvas"),petaoption);
      // marker 
      tanda = new google.maps.Marker({position: awal, map: peta });}
</script>
</head>
<body onload="peta_awal()">
<div id="map_canvas" style="width:100%; height:250px" ></div>
</body>

			<a href="#" name="detail"></a>
			<hr class="soft"/>
				<a href="<?=base_url()?>index.php/frontend/index" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a>
			</div>
		</form>


	</div>
</div>
</div> </div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
<?php
include('footer.php');
?>