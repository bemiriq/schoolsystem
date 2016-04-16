<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url('public/css/sb-admin.css')?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url('public/css/plugins/morris.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url('public/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>       
        
    <?php echo validation_errors(); ?>
    <div class="row" style="width: 100%;">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <form role="form" action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter your Username" name="username" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Your Password" name="password" type="password">
                            </div>
                            <div class="form-group">
                                    <a href="<?=site_url('school/register')?>" style="margin-left: 80%;">Register</a>    
                            </div>

                            <input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="Login"/>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?=base_url('public/js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?=base_url('public/js/plugins/morris/raphael.min.js')?>"></script>
    <!-- <script src="<?=base_url('public/js/plugins/morris/morris.min.js')?>"></script>
    <script src="<?=base_url('public/js/plugins/morris/morris-data.js')?>"></script> -->

</body>

</html>

