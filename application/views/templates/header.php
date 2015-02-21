<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Financial_Sharing</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootsrap and our CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/header.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/about_us.css">
		<link rel="stylesheet" type="text/css" href="css/community_board_forums.css">
		<link rel="stylesheet" type="text/css" href="css/community_board_user_guides.css">
		<link rel="stylesheet" type="text/css" href="css/community_board_home.css">
		<link rel="stylesheet" type="text/css" href="css/admin.css">
		<link rel="stylesheet" type="text/css" href="css/announcements.css">
		<link rel="stylesheet" type="text/css" href="css/terms_of_use.css">
		<link rel="stylesheet" type="text/css" href="css/user_profiles.css">
		<link rel="stylesheet" type="text/css" href="css/footer.css">

		<!-- JQuery, Bootstrap, CanvasJS -->
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>		
		
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
	            	<li class="active"><a href="#home">Home</a></li>
	            	<li><a href="#community">Community</a></li>

	            	<!-- When a user sucessfully signs in show this profile tab -->
	            	<li><a href="#my_profile">My Profile</a></li>

	            	<!-- When an admin user successfully signs in show this tab -->
	            	<li><a href="#admin">Admin</a></li>
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
	      </div>
	    </nav>