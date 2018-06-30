<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
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
    <link href="<?php echo base_url('assets/scss/style.css');?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">

   <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                        <img class="align-content" src="<?php echo base_url() ?>images/log4.jpg"
                        alt="">
                </div>
                <div class="card">
                    <div class="card-header">
                        <center><strong><b>SIGN IN</b></strong></center>
                    </div>
                    <div class="card-body card-block">
                        <div class="login-form">
                   <p class="alert alert-danger" id="response"><b>USERNAME DAN PASSWORD TIDAK VALID</b></p>
                    <form id="frm_login" role="form" action="<?php echo base_url() ?>auth/login" method="POST">
                        <div class="form-group">
                          <label for="">User name</label>
                          <input type="text" class="form-control" name="username"  placeholder="User name">
                        </div>
                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" class="form-control" name="password"  placeholder="Password">
                        </div>
                        <input type="submit" class="btn btn-info btn-block" value="submit">
                      </form>
                    </div>
                 </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

    <script>
        $(document).ready(function (){
            $("#frm_login").submit(function (e){
                e.preventDefault();
                var url = $(this).attr('action');
                var method = $(this).attr('method');
                var data = $(this).serialize();
                
                $.ajax({
                   url:url,
                   type:method,
                   data:data
                }).done(function(data){
                   if(data !=='')
                    {
                        $("#response").show('fast');
                        $("#response").effect( "shake" );
                        $('#frm_login')[0].reset();
                    }
                    else
                    {
                    window.location.href='<?php echo base_url() ?>home/';
                    throw new Error('go');
                    } 
                });
            });
            
            $( "div" ).each(function( index ) {
            var cl = $(this).attr('class');
            if(cl =='')
                {
                    $(this).hide();
                }
            });
            
        });
        </script>


</body>
</html>
