
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

     
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Admin User</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Admin User > List Admin User</li>
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
                        <strong>Add New Admin User</strong>
                    </div>
                    <form role="form" method="post" action="<?php echo site_url("category/add");?>">
                        <div class="card-body card-block">
                            <div class="form-group">
                                    <label class=" form-control-label">Admin Fullname</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-thumb-tack"></i></div>
                                            <input class="form-control" name="txtname_category" required> 
                                    </div>
                                    <br>
                                    <label class=" form-control-label">Admin Username</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-thumb-tack"></i></div>
                                            <input class="form-control" name="txtname_category" required> 
                                    </div>
                                    <br>
                                    <label class=" form-control-label">Admin Password</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-thumb-tack"></i></div>
                                            <input class="form-control" name="txtname_category" required> 
                                    </div>
                                    <br>
                                        <center><input type="submit" name="submit" value="Submit" class="btn btn-success" method="post"></i></input>
                                            <input type="Reset" name="submit" value="Reset" class="btn btn-danger" method="post"></i></input></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
                            <strong class="card-title">List Admin User</strong>
                        </div>
                        <div class="card-body">
    <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;">Admin ID</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 350px;">Admin FullName</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 210px;">Admin Username</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 1px;">Admin Password<th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 1px;">Register Date</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 1px;">Action</th></tr>
                    </thead>
                    <tbody>
                    <tr>
                   <td>1</td>
                   <td>Administrator</td>
                   <td>admin</td>
                   <td>21232f297a57a5a743894a0e4a801fc3</td>
                   <td>2018-08-04 02:36:18</td>
                   <td><button type='button' class='btn btn-warning'>Edit</button><td>
                    </tr>
                  </tbody>
                  </table></div></div>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php
include('footer.php');
?>