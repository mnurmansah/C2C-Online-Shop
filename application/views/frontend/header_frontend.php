
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome! &nbsp<strong><?php echo $this->session->userdata('user_fullname') ?></strong></div>
	<div class="span6">
	<div class="pull-right">
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
    <a class="brand" href="<?=base_url()?>index.php/frontend/index"><img src="<?php echo base_url() ?>/images/.png" alt="E-Phsar"/></a>
		<form class="form-inline navbar-search" method="get" action="<?=base_url()?>index.php/frontend/search" >
		<input id="srchFld" class="srchTxt" type="text" name="search"/>
		   	<select class="form-control" name="user_subcategory" placeholder="Select Sub Category">
		   		<option value="all" selected>Choose Category</option>
 			<?php foreach ($category as $cat): ?>
 				<option value="<?= $cat->category_id  ?>"><?php echo $cat->name_category ?></option>
 			<?php endforeach ?> 
            </select>     
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <?php if ($this->session->userdata('logged')) { ?>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""> <a href="<?=base_url()?>index.php/frontend/profile" role="button" style="padding-right:0"><span class="btn btn-large btn-success" ><?php echo $this->session->userdata('user_username') ?></span></a></li>
	<li class=""> <a href="<?=base_url()?>index.php/frontend/post_product" " role="button" style="padding-right:0"><span class="btn btn-large btn-warning">Post Ads</span></a></li>
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