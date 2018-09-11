
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
        <div class="span12">
        <div class="span4"></div>
        <div class="span4">
        		<center>
	<h3>Your QR Code</h3>
</center>
        <div class="well">
                <div clas="well">
                	<center>

                	<?php echo $this->session->flashdata('qrcode');?> 


                	</center>
                </div>   
        </div>
        <center>
                     <a href="<?=base_url()?>index.php/frontend/" role="button" class="btn btn-large">
                     <span class="icon-arrow-left"></span>  Continue Shopping </a>  </center>    
    	</div>
    	<div class="span4"></div>
        </div>
            

      </form>

    </div>
    </div>
</div>
</div>
<br>
<br>
<br>
<br>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	
<?php
include('footer.php');
?>
