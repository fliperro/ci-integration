<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo config_item('app_name'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('vendor\bootstrap\dist\css\bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('vendor\metisMenu\dist\metisMenu.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('assets\css\sb-admin.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets\css\custom.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('vendor\font-awesome\css\font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Pnotify -->
    <link href="<?php echo base_url('vendor\pnotify\dist\pnotify.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor\pnotify\dist\pnotify.buttons.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo lang('login_heading');?></h3>
                    </div>
                    <div class="panel-body">
                        <?php echo $view_content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('vendor\jquery\dist\jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\bootstrap\dist\js\bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\metisMenu\dist\metisMenu.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\pnotify\dist\pnotify.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\pnotify\dist\pnotify.buttons.js'); ?>"></script>

    <script src="<?php echo base_url('assets\js\sb-admin.js'); ?>"></script>    
    <!-- <script src="<?php echo base_url('assets\js\custom.js?random='.uniqid()); ?>"></script> -->

    <?php echo $notice; ?>
      
</body>

</html>