
<?php
include('header.php');
?>
     <!-- Left Panel -->
<?php
include('sidebar.php');
?>
    <!-- Left Panel -->

  <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                    <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>              
                    </div>
                </div>
            </div>


        </header><!-- /header -->
        <!-- Header-->
        <!-- Header-->

 <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Report</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Report > Report Orders</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    <div class="content mt-3">
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <strong>Report Orders</strong>
                    </div>
                    <form role="form" method="get" action="<?php echo site_url("page/reportorder");?>">
                    <div class="card-body card-block">
                        <div class="form-group">
                                <label class=" form-control-label">Date</label>
                                <div class="card-body">
                                  <select class="form-control" name="bulan" placeholder="Select Month">
                                    <option value="null" selected disabled>Choose Month</option>
                                    <?php 
                                        echo "
                                        <option value=1>Januari</option>
                                        <option value=2>Februari</option>
                                        <option value=3>Maret</option>
                                        <option value=4>April</option>
                                        <option value=5>Mei</option>
                                        <option value=6>Juni</option>
                                        <option value=7>Juli</option>
                                        <option value=8>August</option>
                                        <option value=9>September</option>
                                        <option value=10>October</option>
                                        <option value=11>November</option>
                                        <option value=12>Desember</option>
                                        ";
                                    ?>
                                </select>                             
                                </div>
                                     <center><input type="submit" value="Submit" class="btn btn-success" method="get"></center>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
    
            <div class="col-lg-4">
            </div>
        </div>
        </div>        


        <div class="content mt-3">
                    <div class="col-lg-4">
                        
                    </div>
        </div>
        <div class="content col-md-12">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Report Order : </strong>
                        </div>
                        <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;">Order ID</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Order Date</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 175.01px;">Customer Name</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 138px;">Ordered Products</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 10px;">Seller ID</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 10px;">Quantity</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 10px;">Product Price</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 10px;">Shipping Name</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 10px;">Shipping Price</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 10px;">Total Amount</th></tr>
                    </thead>
                    <tbody>
                    <?php 
                                                                    foreach ($this->rom->gettableReportOrder() as $row) {
                                                                      echo "<tr>
                                                                          <td>$row->order_id</td>
                                                                          <td>$row->order_date</td>
                                                                          <td>$row->user_fullname</td>
                                                                          <td>$row->product_name</td>
                                                                          <td>$row->user_id</td>
                                                                          <td>$row->product_quantity</td>
                                                                          <td>$row->product_price</td>
                                                                          <td>$row->shipping_name</td>
                                                                          <td>$row->shipping_price</td>
                                                                          <td>$row->amount</td>
                                                                      </tr>";  
                                                                    }
                                                                 ?></tbody>
                  </table></div></div>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
    </div><!-- /#right-panel -->
<?php
include('footer.php');
?>