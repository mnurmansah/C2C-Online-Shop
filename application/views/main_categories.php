
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
                        <h1>Main Categories</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Categories > Main Categories</li>
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
                        <strong>Add New Category</strong>
                    </div>
                    <form role="form" method="post" action="<?php echo site_url("category/add");?>">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label class=" form-control-label">Category Name</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-thumb-tack"></i></div>
                                            <input class="form-control" name="txtname_category" required> 
                                        </div>
                                        <small class="form-text text-muted">ex. Computers, Furniture, etc.</small>
                                        <br>
                                        <center><input type="submit" name="submit" value="Add Category" class="btn btn-success" method="post"></i></input>
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
         <?php if (!$isEdit) { ?>
        <div class="content col-md-12">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">List Category</strong>
                        </div>
                        <div class="card-body">
                             <table id="bootstrap-data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table_info">
                    <thead>
                      <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;">Category ID</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Category Name</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 175.01px;">Add By Users</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 138px;">Date Entered</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table" rowspan="1" colspan="1" style="width: 80px;">Action</th></tr>
                    </thead>
                    <tbody>
                    <?php 
                                                                    foreach ($this->mc->loadAll() as $row) {
                                                                      echo "<tr>
                                                                          <td>$row->category_id</td>
                                                                          <td>$row->name_category</td>
                                                                          <td>$row->add_byuser</td>
                                                                          <td>$row->date_entered</td>
                                                                          <td><a href='".site_url('category/delete/'.$row->category_id)."'><button type='button' class='btn btn-danger'>Delete</button></a>
                                                                            <a href='".site_url('category/edit/'.$row->category_id)."'><button type='button' class='btn btn-warning'>Edit</button></a></td>

                                                                      </tr>";  
                                                                    }
                                                                 ?>

                  </tbody>
                  </table></div></div>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div>
        <?php } ?>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<?php
include('footer.php');
?>