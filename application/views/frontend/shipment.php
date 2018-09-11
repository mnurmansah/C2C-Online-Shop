
<?php
include('header.php');
?>

<?php
include('header_frontend.php');
?>

<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
	<h3>Checkout</h3>
    <div class="row">
            <form action="<?php echo site_url('frontend/checkout') ?>" method="Post">

        <div class="span8">
        <h4>Billing Address</h4>
        <div class="well">
           
              <div class="control-group">
                <label class="control-label">Shipping Address</label>
                <div class="controls">
                 <textarea class="input-xxlarge" type="text" rows="5" name="user_shippingaddress" placeholder="Shipping Address" required></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="SubCategoryProduct">Shipping Courier<sup>*</sup></label>
                <div class="controls">
                <select onchange="changeValue()" class="form-control" id="shipping" name="user_shippingcourier" placeholder="Select Shipping Courier">
                <option value="null" selected disabled>Choose Courier</option>
                <?php foreach ($shipping as $rows => $value): ?>
                    <option value="<?php echo $value->shipping_id ?>"><?php echo $value->shipping_name ?> &nbsp;($<?php echo $value->shipping_price ?>)</option>
                <?php endforeach ?>
                </select>        
                </div>
             </div>
        </div>
        </div>
            

        <div class="span4">
        <h4>Shopping Summary</h4>
            <div class="well">
            <div class="well">
            <h5>Total Price <?php echo number_format($this->cart->total()) ?></h5>
            <h5>Total Shipping Cost <span id="ShippingCost"></span></h5>
            <h5>Grand Total <span id="GrandTotal"></span></h5>
            </div>
            <center><input type="submit" value="Payment" class="btn btn-success"></center>


        </div>
        </div>
      </form>

    </div>
    </div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->

<script>
function changeValue() {
    var a = $('#shipping').val();
    var url = 'getGrandTotal';
    $.get(url,{ship_id: a}, function(res){
        var data = JSON.parse(res);
        $('#ShippingCost').html(data.sp);
        $('#GrandTotal').html(data.gt)
    });
};
</script>
	
<?php
include('footer.php');
?>
