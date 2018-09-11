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
		<li class="active">Products Search</li>
    </ul>
	<h3> Products Search</h3>	
	<hr class="soft"/>
	<form method='post' action="<?= base_url() ?>index.php/Search/loadRecord" >
     <input type='text' name='search' value='<?= $search ?>'><input type='submit' name='submit' value='Submit'>
   </form>
   <br/>

   <table border='1' width='100%' style='border-collapse: collapse;'>
    <tr>
      <th>S.no</th>
      <th>Category Id</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Desc</th>
    </tr>
    <?php 
    $sno = $row+1;
    foreach($result as $data){
;
      echo "<tr>";
      echo "<td>".$sno."</td>";
      echo "<td><a href='".$data['product_id']."' target='_blank'>".$data['category_id']."</a></td>";
      echo "<td><a href='".$data['product_id']."' target='_blank'>".$data['product_name']."</a></td>";
      echo "<td><a href='".$data['product_id']."' target='_blank'>".$data['product_price']."</a></td>";
      echo "<td><a href='".$data['product_id']."' target='_blank'>".$data['product_desc']."</a></td>";
      echo "</tr>";
      $sno++;

    }
    if(count($result) == 0){
      echo "<tr>";
      echo "<td colspan='3'>No record found.</td>";
      echo "</tr>";
    }
    ?>
   </table>
	<hr class="soft"/>
	   <div style='margin-top: 10px;'>
   <?= $pagination; ?>
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