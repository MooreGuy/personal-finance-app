<?php
	$this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Financial_Sharing</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootsrap and our CSS -->
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/header.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/home.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/about_us.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/community_board_forums.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/community_board_user_guide.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/community_board_home.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/admin.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/announcements.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/terms_of_use.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/user_profile.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/footer.css">

		<!-- JQuery, Bootstrap, CanvasJS -->
		<script type="text/javascript" src="<?php base_url(); ?>/js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>/js/jquery.canvasjs.min.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>/js/header.js"></script>		
		
	</head>

	<body>
		<!-- Top Navbar -->
		<nav class="navbar navbar-default navbar-static-top">
	      	<div class="container">
	      		<div class="row">

	      			<div class="col-md-1">
				        <div class="navbar-header">
				        <!-- When the view shrinks the navbar will push things into the hamburger menu -->
				          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </button>
				          <a class="navbar-brand navbar-site-brand" href="#">Project Logo</a>
				        </div>
				    </div>

				    <div class="col-md-11">
				        <!-- Tabs for each section. This will toggle into the hamburger menu -->
				        <!-- Only show the tabs if the user is logged in -->
				        <div id="navbar" class="navbar-collapse collapse">
				        	<div class="container">
				        		<div class="row">

				        			<div class="col-md-6 navbar-col">
							        	<div class="navbar-tabs-wrapper">
								        	<ul class="nav navbar-nav">
								            	<li name="home"><a href="<?php  echo base_url(); ?>index.php/home/welcome">Home</a></li>
								            	<li name="community_board_home"><a href="<?php  echo base_url(); ?>index.php/community_board_home/home">Community</a></li>
								            	<li name="announcements"><a href="<?php  echo base_url(); ?>index.php/announcements/home">Announcements</a></li>
								            	<li name="user_profile"><a href="<?php  echo base_url(); ?>index.php/user_profile/home">My Profile</a></li>

								            	<!-- When an admin user successfully signs in show the admin tab -->
								            	<li name="admin"><a href="<?php  echo base_url(); ?>index.php/admin/overview">Admin</a></li>
								          	</ul>
								        </div>
								    </div>

								    <div class="col-md-6">
								        <div class="navbar-login-wrapper pull-left">
								          	<!-- Login form. This will toggle into the hamburger menu-->
								          	<form class="navbar-form log-in-form">
								            	<div class="form-group">
								              		<input type="text" placeholder="Email" class="form-control log-in-input">

								              		<div class="checkbox">
									              		<input class="remember-me-checkbox" type="checkbox"> Remember Me
								              		</div>
								            	</div>
								            	<div class="form-group">
								              		<input type="password" placeholder="Password" class="form-control log-in-input">
								              		<a href="#">Forgot Password?</a>
								            	</div>
								            	<button type="button" class="btn btn-success log-in-button">Log in</button>
								          	</form>
								        </div>
								    </div>

							    </div><!-- /.row -->
							</div><!-- /.container -->
				        </div><!--/.navbar-collapse -->
				    </div>

				</div><!-- /.row -->
	      	</div><!-- /.container -->
	    </nav>


