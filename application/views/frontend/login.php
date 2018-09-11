
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
		<li class="active">Login</li>
    </ul>
	
	<hr class="soft"/>
	<div class="row">
		<div class="span4">
			<div class="well">
				<center><h3> Login</h3></center>	
				<div class="well">
			<h5>ALREADY REGISTERED ?</h5>
			<form action="<?php echo site_url('loginuser/dologin') ?>" method="Post">
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Username</label>
				<div class="controls">
				  <input class="span3"  name="user_username" type="text" id="inputEmail1" placeholder="Username">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" name="user_password" class="span3"  id="inputPassword1" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" class="btn">Sign in</button> <a href="forgetpass.html">Forget password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->

<?php
include('footer.php');
?>



