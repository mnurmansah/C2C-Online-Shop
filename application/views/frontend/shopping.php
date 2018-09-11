
<?php
include('header.php');
?>

<?php
include('header_frontend.php');
?>

<!-- Header End====================================================================== -->
<div id="mainBody">
<div class="container">
	<h3>Your Shopping Cart</h3>
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Sub Total</th>
                        <th class="text-center">Action</th>

                        <th> </th>
                    </tr>
                </thead>
                <tbody>
<?php 
$no=1; 
$total = 0;
$cartContents = $this->cart->contents();
 foreach ($cartContents as $items){

 ?>      

                    <tr>
                        <td><img width="100" src="<?php echo base_url() ?>assets/user/imagepost/<?php echo $items['image']?>"></td>
                        <td><?php echo $items['name'] ?></td>
                        <td><?php echo $items['qty'] ?></td>
                        <td><strong><?php echo $items['price'] ?></strong></td>
                        <td>$<?php echo $items['price']*$items['qty'] ?></td>
                        <td>
                        <a  href="<?php echo site_url('cart/remove/'.$items['rowid'])?>" class="btn btn-large btn-danger">
                        <span class=""></span> Remove
                        </a></td>
<?php 
$no++;
$total = $total + ($items['price'] * $items['qty']);

} ?>

                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><h3>Total ($)</h3></td>
                        <td class="text-right"><h3><strong><input type="text" name="total" class="form-control col-lg-6" value="<?php echo number_format($this->cart->total()) ?>" readonly></strong></h3></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                         <a href="<?=base_url()?>index.php/frontend/" role="button" class="btn btn-large pull-right">
                           <span class="icon-arrow-left"></span>  Continue Shopping 
                        </a></td>
                        <td>
                            <a href="<?=base_url()?>index.php/frontend/shipment" role="button" class="btn btn-large btn-success">
                            Checkout 
                        </a></td>
                       </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
<?php
include('footer.php');
?>
