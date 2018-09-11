
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
    <div class="well "><center><img src="<?php echo base_url() ?>assets/user/image/<?php echo $this->session->userdata('user_image') ?>" style="max-height: 200px"></center></div> 
    <center><b><?php echo $this->session->userdata('user_username') ?></b></center>
  </div>

  <div class="well">
        <ul class="nav nav-tabs nav-stacked">
          <li class="nav-header">Main Navigation</li>          
          <li><a href="<?=base_url()?>index.php/frontend/profile"><i class="icon-user"></i> My Profile</a></li>
          <li><a href="<?=base_url()?>index.php/frontend/post_product"><i class="icon-pencil"></i> Post & Your Product</a></li>
          <li><a href="<?=base_url()?>index.php/frontend/"><i class="icon-book
            "></i> History Order</a></li>
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
		<li class="active">Profile</li>
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
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $this->session->userdata('user_fullname') ?></h3>
          
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username</td>
                        <td> : &nbsp; <?php echo $this->session->userdata('user_username') ?></td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td> : &nbsp; <?php echo $this->session->userdata('user_address') ?></td>
                      </tr>
                        <td>Phone Number</td>
                        <td> : &nbsp; <?php echo $this->session->userdata('user_phonenumber') ?></td>                 
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td> : &nbsp; <?php echo $this->session->userdata('user_email') ?></a></td>
                      </tr>
                      <tr>
                        <td>Register Date</td>
                        <td> : &nbsp; <?php echo $this->session->userdata('user_registerdate') ?></td>
                      </tr>
                      <tr>
                        <td>Location</td>
                        <td> </td>
                      </tr>
                    </tbody>
                  </table>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAZDmMkzKRdGQBDDKbJFntQ1q-YPuiQ35g&sensor=false"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAAYrQ_24f5ridX1ZYFLLR_fzMOJXH3HJI&sensor=false"></script>
<script type="text/javascript">
var peta;
var lang = <?php echo $this->session->userdata('user_locationlang') ?>;
var lat = <?php echo $this->session->userdata('user_locationlat') ?>;
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
<br>

                        <span class="pull-left">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit Profile</a>
                        </span>
                        <br>
                </div>
              </div>
            </div>
                 <div class="panel-footer">

                    </div>
            
          </div>
        </div>
      </div>
    </div>



 
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
