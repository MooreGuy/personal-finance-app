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
		
	</head>

	<body>
		<!-- Top Navbar -->
		<nav class="navbar navbar-default navbar-static-top">
	      	<div class="container">

		        <div class="navbar-header">
		        <!-- When the view shrinks the navbar will push things into the hamburger menu -->
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="#">Project name</a>
		        </div>

		        <!-- Tabs for each section. This will toggle into the hamburger menu -->
		        <div id="navbar" class="navbar-collapse collapse">
		        	<ul class="nav navbar-nav">
		            	<li class="active"><a href="<?php  echo base_url(); ?>index.php/home/welcome">Home</a></li>
		            	<li><a href="<?php  echo base_url(); ?>index.php/community_board_home/home">Community</a></li>

		            	<!-- When a user sucessfully signs in show this profile tab -->
		            	<li><a href="<?php  echo base_url(); ?>index.php/user_profile/home">My Profile</a></li>

		            	<!-- When an admin user successfully signs in show this tab -->
		            	<li><a href="<?php  echo base_url(); ?>index.php/admin/dashboard">Admin</a></li>
		          	</ul>

		          <!-- Login form. This will toggle into the hamburger menu-->
		          <form class="navbar-form navbar-right">
		            <div class="form-group">
		              <input type="text" placeholder="Email" class="form-control">
		            </div>
		            <div class="form-group">
		              <input type="password" placeholder="Password" class="form-control">
		            </div>
		            <button type="submit" class="btn btn-success">Log in</button>
		          </form>
		        </div><!--/.navbar-collapse -->

	      	</div><!-- /.container -->
	    </nav>
