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
                        <li><i class="fa fa-thumb-tack"></i><a href="<?=base_url()?>index.php/category">Main Categories</a></li>
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
</aside>