<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard C2C-OS</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link href="<?php echo base_url('assets/css/normalize.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/themify-icons.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/flag-icon.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/cs-skin-elastic.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/lib/datatable/dataTables.bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/scss/style.css');?>" rel="stylesheet">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->
     <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <a class="navbar-brand" href="./"><img src="<?php echo base_url() ?>images/log5.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="" ></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?=base_url()?>index.php/page/dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tags"></i>Categories</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-thumb-tack"></i><a href="<?=base_url()?>index.php/page/main_categories">Main Categories</a></li>
                            <li><i class="fa fa-tasks"></i><a href="<?=base_url()?>index.php/page/sub_categories">Sub Categories</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-archive"></i>Product</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-archive"></i><a href="<?=base_url()?>index.php/page/product">List Product</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Customers</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="<?=base_url()?>index.php/page/customer">List Customers</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Sellers</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-users"></i><a href="<?=base_url()?>index.php/page/seller">List Sellers</a></li>
                        </ul>
                    </li>                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Orders</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-shopping-cart"></i><a href="index.php/page/orders.php">List Orders</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-dollar"></i>Payments</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-dollar"></i><a href="forms-basic.html">List Payments</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Shipping</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-truck"></i><a href="forms-basic.html">List Shipping</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-male"></i><a href="users.php">List Users</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Report</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-book"></i><a href="reporta.php">Report A</a></li>
                            <li><i class="menu-icon fa fa-book"></i><a href="reportb.php">Report B</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
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

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Seller</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Seller > List Seller</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
        
        <div class="content col-md-12">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">List Seller</strong>
                        </div>
                        <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 236.01px;">Name</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 387.01px;">Position</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 175.01px;">Office</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 138px;">Salary</th></tr>
                    </thead>
                    <tbody>

                    <tr role="row" class="odd">
                        <td class="sorting_1">Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>$162,700</td>
                      </tr><tr role="row" class="even">
                        <td class="sorting_1">Angelica Ramos</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>London</td>
                        <td>$1,200,000</td>
                      </tr></tbody>
                  </table></div></div>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
  <!-- Right Panel -->
    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

    <script src="<?php echo base_url() ?>assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/data-table/jszip.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

    <script src="<?php echo base_url() ?>assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dashboard.js"></script>
    <script src="<?php echo base_url() ?>assets/js/widgets.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>

    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/lib/chosen/chosen.jquery.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

</body>
</html>
