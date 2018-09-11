<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="<?=base_url()?>index.php/frontend/shopping"><img src="<?php echo base_url() ?>assets/themes/images/ico-cart.png" alt="cart"><?php echo count($this->cart->contents()) ?> Items in your cart  <span class="badge badge-warning pull-right"><?php echo number_format($this->cart->total()) ?></span></a></div>


		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> LIST OF CATEGORY</a></li>
			<?php foreach ($category as $cat): ?>
			<li class="subMenu"><a> <?php echo $cat->name_category ?></a>
				<ul>
				<?php foreach ($subcategory as $sub): ?>	
				<?php if ($sub->fcategory_id==$cat->category_id): ?>
									
				<li><a class="active" href="<?php echo site_url('frontend/subcategory/'.$sub->subcategory_id) ?>"><i class="icon-chevron-right"></i><?php echo $sub->name_subcategory ?> (<?php echo $sub->total ?>) </a></li>
				<?php endif ?>				
				<?php endforeach ?>
				</ul>
			</li>
			<?php endforeach ?>
		</ul>
		<br/>


			  
	</div>