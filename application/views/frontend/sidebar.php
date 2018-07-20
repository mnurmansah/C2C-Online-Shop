<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="<?php echo base_url() ?>assets/themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>


		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> LIST OF CATEGORY</a></li>
			<?php foreach ($category as $cat): ?>
			<li class="subMenu"><a> <?php echo $cat->name_category ?></a>
				<ul>
				<?php foreach ($subcategory as $sub): ?>	
				<?php if ($sub->fcategory_id==$cat->category_id): ?>
									
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i><?php echo $sub->name_subcategory ?> (<?php echo $sub->total ?>) </a></li>
				<?php endif ?>				
				<?php endforeach ?>
				</ul>
			</li>
			<?php endforeach ?>
		</ul>
		<br/>
			<div class="thumbnail">
				<img src="<?php echo base_url() ?>assets/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>