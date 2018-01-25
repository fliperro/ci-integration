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

    <!-- DataTables CSS -->
    <link href="<?php echo base_url('vendor\datatables-plugins\integration\bootstrap\3\dataTables.bootstrap.css'); ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('vendor\datatables-responsive\css\dataTables.responsive.css'); ?>" rel="stylesheet">


    <link href="<?php echo base_url('vendor\jquery-ui\themes\base\jquery-ui.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor\jqueryui-timepicker-addon\dist\jquery-ui-timepicker-addon.min.css'); ?>" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo anchor('', config_item('app_name'), array('class' => 'navbar-brand')); ?>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $identity; ?> <i class="fa fa-caret-down"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      
                        <li>
                            <?php echo anchor('auth/logout', '<i class="fa fa-sign-out fa-fw"></i> '.lang('menu_user_logout')); ?>       
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <?php if($this->ion_auth->is_admin()): ?>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> <?php echo lang('menu_admin_section'); ?> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php echo anchor('auth', '<i class="fa fa-users fa-fw"></i> '.lang('menu_auth_index')); ?>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            
              <?php echo($view_content); ?>    
              <!-- /.row -->
            
    
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="<?php echo base_url('vendor\jquery\dist\jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\bootstrap\dist\js\bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\metisMenu\dist\metisMenu.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\pnotify\dist\pnotify.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\pnotify\dist\pnotify.buttons.js'); ?>"></script>

    <script src="<?php echo base_url('vendor\datatables\media\js\jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\datatables-plugins\integration\bootstrap\3\dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\datatables-responsive\js\dataTables.responsive.js'); ?>"></script>

    <script src="<?php echo base_url('vendor\datatables-responsive\js\dataTables.responsive.js'); ?>"></script>

    <script src="<?php echo base_url('vendor\jquery-ui\jquery-ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\jquery-ui\ui\i18n\datepicker-pl.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\jqueryui-timepicker-addon\dist\jquery-ui-timepicker-addon.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor\jqueryui-timepicker-addon\dist\i18n\jquery-ui-timepicker-pl.js'); ?>"></script>

    <script src="<?php echo base_url('vendor\eldarion-ajax\js\eldarion-ajax.min.js'); ?>"></script>

    <script src="<?php echo base_url('assets\js\sb-admin.js'); ?>"></script>
    <script src="<?php echo base_url('assets\js\custom.js?random='.uniqid()); ?>"></script>

    <?php echo $notice; ?>
      

</body>

</html>