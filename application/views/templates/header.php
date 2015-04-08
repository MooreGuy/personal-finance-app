<?php
	$this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en" class>
	<head>
		<title>Financial_Sharing</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootsrap and our CSS -->
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php base_url(); ?>/css/owl.carousel.css">
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
		<script type="text/javascript" src="<?php base_url(); ?>/js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?php base_url(); ?>/js/header.js"></script>		
		
	</head>

	<body>

		<!-- Putting all of the modals in the header to give them one location -->
		<!-- Edit Forum Post Modal -->
		<div class="modal fade" id="editForumPostModal" tabindex="-1" role="dialog" aria-labelledby="editForumPostModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    		<div class="modal-content">
	      			<div class="modal-header">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

	        			<!-- Title of the Modal -->
		        		<div class="container">
		        			<div class="row">
		        				<div class="col-md-6 modal-col">
		        					<h2 class="modal-title" id="editForumPostModalLabel">Edit Post</h2>
		        				</div>
		        			</div>
		        		</div>

	      			</div>

	      			<div class="modal-body" id="editFourmPostModal-body">
	      				<div class="container">
	      					<div class="row">
	      						<div class="col-md-6 modal-col">
	      							<div class="form-group">
								  		<label for="editPostTitle">Title:</label>
								  		<input type="text" id="editPostTitle" class="form-control">
								  	</div>
	      						</div>
	      					</div>

	      					<div class="row">
	      						<div class="col-md-6 modal-col">
	      							<div class="form-group editPostFormGroup">
								  		<label for="editPostBody">Body:</label>
								  		<textarea type="text" id="editPostBody" class="form-control"></textarea>
								  	</div>
	      						</div>
	      					</div>
	      				</div>
	      			</div>

	      			<div class="modal-footer">
	      				<button type="button" class="btn btn-danger pull-left">Delete Post</button>
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-primary">Save Changes</button>
	      			</div>
	    		</div>
	  		</div>
		</div>

		<!-- Add Forum Post Modal -->
		<div class="modal fade" id="addForumPostModal" tabindex="-1" role="dialog" aria-labelledby="addForumPostModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    		<div class="modal-content">
	      			<div class="modal-header">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

	        			<!-- Title of the Modal -->
		        		<div class="container">
		        			<div class="row">
		        				<div class="col-md-6 modal-col">
		        					<h2 class="modal-title" id="addForumPostModalLabel">Add New Post</h2>
		        				</div>
		        			</div>
		        		</div>

	      			</div>

	      			<div class="modal-body" id="addFourmPostModal-body">
	      				<div class="container">
	      					<div class="row">
	      						<div class="col-md-6 modal-col">
	      							<!-- Category selection dropdown -->
	      							<form  id="addNewPostForm">
		      							<label for="addPostCategory" class="addPostCategoryLabel">Category:</label>
		      							<select id="addPostCategory">
		      								<option value="1">Transport</option>
		      								<option value="2">Food</option>
		      								<option value="3">Phone</option>
		      								<option value="4">Enternaintment</option>
		      								<option value="5">Housing</option>
		      								<option value="6">Utilities</option>
		      								<option value="7">Travel</option>
		      								<option value="8">General</option>
		      							</select>
										

		      							<div class="form-group">
									  		<label for="addPostTitle">Title:</label>
									  		<input type="text" id="addPostTitle" name="addPostTitle" class="form-control">
									  	</div>

									  	<div class="form-group addPostFormGroup">
									  		<label for="addPostBody">Body:</label> <label id="addPostBody-error" class="error" for="addPostBody"></label>
									  		<textarea type="text" id="addPostBody" name="addPostBody" class="form-control"></textarea>
									  	</div>
									</form>
	      						</div>
	      					</div>

	      					
	      				</div>
	      			</div>

	      			<div class="modal-footer">
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-success js-addNew-forumPost">Add</button>
	      			</div>
	    		</div>
	  		</div>
		</div>

		<!-- Add Comment Modal -->
		<div class="modal fade" id="addCommentPostModal" tabindex="-1" role="dialog" aria-labelledby="addCommentPostModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    		<div class="modal-content">
	      			<div class="modal-header">
	        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

	        			<!-- Title of the Modal -->
		        		<div class="container">
		        			<div class="row">
		        				<div class="col-md-6 modal-col">
		        					<h2 class="modal-title" id="addCommentPostModalLabel">Add New Comment</h2>
		        				</div>
		        			</div>
		        		</div>

	      			</div>

	      			<div class="modal-body" id="addCommentPostModal-body">
	      				<div class="container">
	      					<div class="row">
	      						<div class="col-md-6 modal-col">
	      							<!-- UserName of person looged in -->
									<h5><strong>Commenting as: </strong><span>Dr.Awkward</span></h5>

	      							<!-- Title of the post the user is commenting on -->
	      							<h5><strong>Commenting on: </strong><span class="commentOnTitle"></span></h5>
								</div>
	      					</div>

	      					<div class="row">
	      						<div class="col-md-6 modal-col">
	      							<div class="form-group addCommentGroup">
								  		<label for="addCommentBody">Body:</label>
								  		<textarea type="text" id="addCommentBody" class="form-control"></textarea>
								  	</div>
	      						</div>
	      					</div>
	      				</div>
	      			</div>

	      			<div class="modal-footer">
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-success">Add</button>
	      			</div>
	    		</div>
	  		</div>
		</div>

		<!-- Forgot Password Modal -->
		<div class="modal fade" id="forgotPassModal" tabindex="-1" role="dialog" aria-labelledby="forgotPassModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		      	<div class="modal-content">

		        	<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

		        		<!-- Title of the Modal -->
		        		<div class="container">
		        			<div class="row">
		        				<div class="col-md-6 modal-col">
		        					<h2 class="modal-title" id="forgotPassModalLabel">Forgot Password</h2>
		        				</div>
		        			</div>
		        		</div>
		        		
		      		</div>


		      		<div class="modal-body">
		        		<form class="edit-modal-form">
						  	<div class="form-group">
						    	<div class="input-group forgot-pass-input-group">
						    		<div class="forgotPass step1">
						    			<div class="container">

						    				<div class="row">
							    				<div class="col-md-6 modal-col">
							    					<p>We will send a password reset email with further instructions on resetting your password.</p>
							    				</div>
							    			</div>

							    			<div class="row">
						    					<div class="col-md-3 modal-col">
							    					<div class="form-group">
												  		<label for="forgotPassEmail">Email:</label>
												  		<input type="email" id="forgotPassEmail" class="form-control">
												  	</div>
												</div>
											</div>

										</div>
								  	</div>
								</div>
						  	</div>
						</form>
		      		</div>
		      		<div class="modal-footer">
	        			<button type="button" class="btn btn-default js-forgotPassClose" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-primary js-forgotPassNext" data-step="1">Next</button>
	      			</div>
		    	</div>
		  	</div>
		</div>
		<!-- END Modals -->

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
				          <a class="navbar-brand navbar-site-brand" href="<?php  echo base_url(); ?>home/welcome">Project Logo</a>
				        </div>
				    </div>

				    <div class="col-md-11">
				        <!-- Tabs for each section. This will toggle into the hamburger menu -->
				        <!-- Only show the tabs if the user is logged in -->
				        <div id="navbar" class="navbar-collapse collapse">
				        	<div class="container">
				        		<div class="row">

				        			<div class="col-md-5 navbar-col">
							        	<div class="navbar-tabs-wrapper">
								        	<ul class="nav navbar-nav">
								            	<li name="community_board_home"><a href="<?php  echo base_url(); ?>community_board_home/home">Community</a></li>
								            	<li name="announcements"><a href="<?php  echo base_url(); ?>announcements/home">Announcements</a></li>

								            	<!-- Only show the MyProfile tab when the user logs in -->
								            	<li name="user_profile"><a href="<?php  echo base_url(); ?>user_profile/home">My Profile</a></li>

								            	<!-- When an admin user successfully signs in show the admin tab -->
								            	<li name="admin"><a href="<?php  echo base_url(); ?>admin/overview">Admin</a></li>
								          	</ul>
								        </div>
								    </div>

								    <div class="col-md-6 login-form-col">
								        <div class="navbar-login-wrapper">
								          	<!-- Login form. This will toggle into the hamburger menu-->
								          	<form class="navbar-form log-in-form" action="<?php echo base_url();?>account/login_form" method="post" id="log-in-form" >
								            	<div class="form-group">
								              		<input type="text" name="email" placeholder="Email" class="form-control log-in-input">

								              		<div class="checkbox">
									              		<input class="remember-me-checkbox" type="checkbox"> Remember Me
								              		</div>
								            	</div>
								            	<div class="form-group">
								              		<input type="password" placeholder="Password" class="form-control log-in-input">
								              		<a href="<?php echo base_url();?>account/forgot_password_form" data-toggle="modal" data-target="#forgotPassModal">Forgot Password?</a>
								            	</div>
								            	<button type="submit" class="btn btn-success log-in-button">Log in</button>
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


