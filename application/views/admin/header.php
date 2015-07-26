<!DOCTYPE html>
<html>

<head>
<base href="<?php echo $this->config->item('base_url') ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>News Portal Dot Com</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <!--link href="<?php echo base_url();?>font-awesome/css/font-awesome.css" rel="stylesheet"-->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"  rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url();?>css/sb-admin.css" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url();?>img/604.ico">

</head>

<body>

    <div id="wrapper">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url();?>admin">Portal News Dot Com</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">                          
                <!-- /.dropdown -->
				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  
						<i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url();?>admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/users"><i class="fa fa-edit fa-fw"></i> Managemen User</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>admin/kategori"><i class="fa fa-edit fa-fw"></i> Managemen Kategori</a>
                        </li>
                		<li>
                            <a href="<?php echo base_url();?>admin/tags"><i class="fa fa-edit fa-fw"></i> Managemen Tag</a>
                        </li>
						<li>
                            <a href="<?php echo base_url();?>admin/news"><i class="fa fa-edit fa-fw"></i> Managemen News</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>