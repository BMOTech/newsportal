<!doctype html>
<html lang="en">
<head>

<base href="<?php echo $this->config->item('base_url') ?>" />
	<meta charset="UTF-8">
	<meta name="description" content="" >
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>News Portal Dot Com </title>
    <!-- Core CSS - Include with every page -->    
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"  rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url();?>img/604.ico">
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<header id="ccr-header">
	<section id="ccr-nav-top" class="fullwidth">
		<div class="">
			<div class="container">
				<nav class="top-menu">
					<ul class="left-top-menu">
						<li><a href="<?php echo base_url();?>">Home</a></li>
					</ul><!-- /.left-top-menu -->

					<ul class="right-top-menu pull-right">
						<li>
							<form class="form-inline" role="form" action="<?php echo base_url();?>front_end/search">
								<input type="search" placeholder="Search here..." required name="query">
								  <button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</li>
					</ul> <!--  /.right-top-menu -->
				</nav> <!-- /.top-menu -->
			</div>
		</div>	
	</section> <!--  /#ccr-nav-top  -->


	
	<section id="ccr-site-title">
		<div class="container">
			<div class="site-logo">
				<a href="<?php echo base_url();?>" class="navbar-brand">
					<img src="img/logo.png" alt="Side Logo" />
						<h1>News <span>Portal</span></h1>
						<h3>Dot Com</h3>
				</a>
			</div> <!-- / .navbar-header -->

			<div class="add-space">
				728 x 90 px Banner
			</div> <!-- / .adspace -->

		</div>	<!-- /.container -->
	</section> <!-- / #ccr-site-title -->



	<section id="ccr-nav-main">
		<nav class="main-menu">
			<div class="container">

				<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".ccr-nav-main">
				            <i class="fa fa-bars"></i>
			          	</button> <!-- /.navbar-toggle -->
				</div> <!-- / .navbar-header -->

				<div class="collapse navbar-collapse ccr-nav-main">
                
                
					<ul class="nav navbar-nav">
						<li><a class="active" href="<?php echo base_url();?>">Home</a></li>                        
                        <?php foreach ($kategori->result() as $key1) {?> 
						
                        <li><a href="<?php echo base_url();?>front_end/kategori/<?php echo $key1->id_kategori?>"><?php echo $key1->nama_kategori ?></a></li>
                        <?php } ?>
                        
					</ul> <!-- /  .nav -->
				</div><!-- /  .collapse .navbar-collapse  -->


			</div>	<!-- /.container -->
		</nav> <!-- /.main-menu -->
	</section> <!-- / #ccr-nav-main -->
</header> <!-- /#ccr-header -->



