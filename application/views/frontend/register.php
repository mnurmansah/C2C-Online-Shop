
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
	<?php
include('sidebar.php');
?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?=base_url()?>index.php/frontend/">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
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
    	<h3>Registration</h3>

	<div class="well">
		   <ul class="nav nav-tabs">
          <li><a href="<?=base_url()?>index.php/frontend/register"><i class="icon-user"></i> Registration</a></li>
          <li class="divider"></li>
        </ul>

		<form class="form-horizontal" action="<?php echo site_url('frontend/user_regis') ?>" method="Post" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label" for="Fullname">Fullname <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="Fullname"  name="user_fullname" placeholder="Full Name" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="Username">Username <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="Username" name="user_username" placeholder="Username" required>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="Password">Password <sup>*</sup></label>
			<div class="controls">
			  <input type="password" id="Password" name="user_password" placeholder="Password" required>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="Email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="email" id="Email" name="user_email" placeholder="Email" required>
		</div>
	  </div>
	  	<div class="control-group">
		<label class="control-label" for="Email">Phone Number <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="Phonenumber" name="user_phonenumber" placeholder="Phone Number" required>
		</div>
	  </div>	  	  
	<div class="control-group">
		<label class="control-label" for="Address">Address <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="Address" name="user_address" placeholder="Address" required>
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="user_locationlang">User Coordinate Longitude <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="user_locationlang" name="user_locationlang" placeholder="Location Coordinate Longitude" required>
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="user_locationlat">User Coordinate Latitude <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="user_locationlat" name="user_locationlat" placeholder="Location Coordinate Latitude" required>
		</div>
	  </div>
	 <div class="control-group">
		<label class="control-label" for="Image">Image Profile <sup>*</sup></label>
		<div class="controls">
		  <input type="file" id="Image" name="user_image">
		</div>
	  </div>
	  <div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" type="submit" value="Register" />
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
