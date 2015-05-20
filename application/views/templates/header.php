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

	<body >

		<!-- Putting all of the modals in the header to give them one location -->
		<!-- Edit Forum Post Modal -->
		<div class="modal fade" id="editForumPostModal" tabindex="-1" role="dialog" aria-labelledby="editForumPostModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    		<div class="modal-content">
	      			<div class="modal-header">

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
	      							<form id="editPostForm">
		      							<div class="form-group">
									  		<label for="editPostTitle">Title:</label> <label id="editPostTitle-error" class="error" for="editPostTitle"></label>
									  		<input type="text" id="editPostTitle" name="editPostTitle" class="form-control">
									  	</div>
									  	<div class="form-group editPostFormGroup">
									  		<label for="editPostBody">Body:</label> <label id="editPostBody-error" class="error" for="editPostBody"></label>
									  		<textarea type="text" id="editPostBody" name="editPostBody" class="form-control"></textarea>
									  	</div>
									</form>
	      						</div>
	      					</div>
	      				</div>
	      			</div>

	      			<div class="modal-footer">
	        			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-primary js-editPost">Save</button>
	      			</div>
	    		</div>
	  		</div>
		</div>

		<!-- Edit Forum Comment Modal -->
		<div class="modal fade" id="editForumCommentModal" tabindex="-1" role="dialog" aria-labelledby="editForumCommentModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    		<div class="modal-content">
	      			<div class="modal-header">

	        			<!-- Title of the Modal -->
		        		<div class="container">
		        			<div class="row">
		        				<div class="col-md-6 modal-col">
		        					<h2 class="modal-title" id="editForumCommentModalLabel">Edit Comment</h2>
		        				</div>
		        			</div>
		        		</div>

	      			</div>

	      			<div class="modal-body" id="editFourmCommentModal-body">
	      				<div class="container">
      						<div class="row">
	      						<div class="col-md-6 modal-col">
	      							<form id="editCommentForm">		      							
									  	<div class="form-group editPostFormGroup">
									  		<label for="editCommentBody">Body:</label> <label id="editCommentBody-error" class="error" for="editCommentBody"></label>
									  		<textarea type="text" id="editCommentBody" name="editCommentBody" postId="" class="form-control"></textarea>
									  	</div>
									</form>
	      						</div>
	      					</div>
	      				</div>
	      			</div>

	      			<div class="modal-footer">
	        			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-primary js-editComment">Save</button>
	      			</div>
	    		</div>
	  		</div>
		</div>

		<!-- Add Forum Post Modal -->
		<div class="modal fade" id="addForumPostModal" tabindex="-1" role="dialog" aria-labelledby="addForumPostModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    		<div class="modal-content">
	      			<div class="modal-header">
	        			<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->

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
		      							<label for="addPostCategory" class="addPostCategoryLabel">Category:</label> <label id="addPostCategory-error" class="error" for="addPostCategory"></label>
		      							<select id="addPostCategory" name="addPostCategory">
		      								<option value="" disabled>Select a category</option>
		      								<option value="1">Transport</option>
		      								<option value="2">Food</option>
		      								<option value="3">Communications</option>
		      								<option value="4">Entertainment</option>
		      								<option value="5">Housing</option>
		      								<option value="6">Utilities</option>
		      								<option value="7">Travel</option>
		      								<option value="8">General</option>
		      							</select>
										

		      							<div class="form-group">
									  		<label for="addPostTitle">Title:</label> <label id="addPostTitle-error" class="error" for="addPostTitle"></label>
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
	        			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-success js-addNew-forumPost">Add</button>
	      			</div>
	    		</div>
	  		</div>
		</div>

		<!-- Add Post Comment Modal -->
		<div class="modal fade" id="addCommentPostModal" tabindex="-1" role="dialog" aria-labelledby="addCommentPostModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    		<div class="modal-content">
	      			<div class="modal-header">
	        			<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->

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
	      							<!-- UserName of person logged in -->
									<h5><strong>Commenting as: </strong><span><?php echo $user_name; ?></span></h5>

	      							<!-- Title of the post the user is commenting on -->
	      							<h5><strong>Commenting on: </strong><span class="commentOnTitle" data-parentId="" data-category=""></span></h5>
								</div>
	      					</div>

	      					<div class="row">
	      						<div class="col-md-6 modal-col">
	      							<form id="addCommentForm">
		      							<div class="form-group addCommentGroup">
									  		<label for="addCommentBody">Body:</label> <label id="addCommentBody-error" class="error" for="addCommentBody"></label>
									  		<textarea type="text" id="addCommentBody" name="addCommentBody" class="form-control" data-category=""></textarea>
									  	</div>
									</form>
	      						</div>
	      					</div>
	      				</div>
	      			</div>

	      			<div class="modal-footer">
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-success js-addNew-Comment">Add</button>
	      			</div>
	    		</div>
	  		</div>
		</div>

		<!-- Delete Forum Post Modal -->
		<div class="modal fade" id="deleteForumPostModal" tabindex="-1" role="dialog" aria-labelledby="deleteForumPostModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    		<div class="modal-content">
	      			<div class="modal-header">

	        			<!-- Title of the Modal -->
		        		<div class="container">
		        			<div class="row">
		        				<div class="col-md-6 modal-col">
		        					<h2 class="modal-title" id="deleteForumPostModalLabel">Delete Post</h2>
		        				</div>
		        			</div>
		        		</div>

	      			</div>

	      			<div class="modal-body" id="deleteFourmPostModal-body">
	      				<div class="container">
      						<div class="row">
	      						<div class="col-md-6 modal-col">
	      							<p>Are you sure you want to delete this post?</p>
	      							<label>Title:</label>
	      							<p id="deletePostTitle" data-postId=""></p>

	      							<label>Body:</label>
	      							<p id="deletePostBody"></p>
	      						</div>
	      					</div>
	      				</div>
	      			</div>

	      			<div class="modal-footer">
	        			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-danger js-deletePost" >Delete</button>
	      			</div>
	    		</div>
	  		</div>
		</div>

		<!-- Delete Forum Comment Modal -->
		<div class="modal fade" id="deleteForumCommentModal" tabindex="-1" role="dialog" aria-labelledby="deleteForumCommentModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    		<div class="modal-content">
	      			<div class="modal-header">

	        			<!-- Title of the Modal -->
		        		<div class="container">
		        			<div class="row">
		        				<div class="col-md-6 modal-col">
		        					<h2 class="modal-title" id="deleteForumCommentModalLabel">Delete Comment</h2>
		        				</div>
		        			</div>
		        		</div>

	      			</div>

	      			<div class="modal-body" id="deleteFourmCommentModal-body">
	      				<div class="container">
      						<div class="row">
	      						<div class="col-md-6 modal-col">
	      							<p>Are you sure you want to delete this comment?</p>


	      							<label>Body:</label>
	      							<p id="deleteCommentBody"></p>
	      						</div>
	      					</div>
	      				</div>
	      			</div>

	      			<div class="modal-footer">
	        			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-danger js-deleteComment" >Delete</button>
	      			</div>
	    		</div>
	  		</div>
		</div>

		<!-- Flag forum post/comment Modal -->
		<div class="modal fade" id="flagForumPostModal" tabindex="-1" role="dialog" aria-labelledby="flagForumPostModalLabel" aria-hidden="true">
	  		<div class="modal-dialog">
	    		<div class="modal-content">
	      			<div class="modal-header">

	        			<!-- Title of the Modal -->
		        		<div class="container">
		        			<div class="row">
		        				<div class="col-md-6 modal-col">
		        					<h2 class="modal-title" id="flagForumPostModalLabel">Report Post/Comment</h2>
		        				</div>
		        			</div>
		        		</div>

	      			</div>

	      			<div class="modal-body" id="flagForumPostModal-body">
	      				<div class="container">
      						<div class="row">
	      						<div class="col-md-6 modal-col">

	      							<form id="report-post-form">
	      								<div class="form-group">
											<label for="flagForumPost" class="flagForumPostLabel">Why are you reporting this?</label> <label id="flagForumPost-error" class="error" for="flagForumPost"></label>
			      							<select id="flagForumPost" name="flagForumPost">
			      								<option value="0" disabled selected>Select a reason</option>	      			
			      								<option value="1">Offensive Language</option>
			      								<option value="2">Spam</option>
			      								<option value="3">Vote Manipulation</option>
			      								<option value="4">Personal Information</option>
			      								<option value="5">Other</option>
			      							</select>
	      								</div>

	      								<div class="form-group">
											<label for="flagForumPostCommentBody">Comment:</label> <label id="flagForumPostCommentBody-error" class="error" for="flagForumPostCommentBody"></label>
											<textarea type="text" id="flagForumPostCommentBody" name="flagForumPostCommentBody" class="form-control" data-category="" postId></textarea>
	      								</div>
	      							</form>
	      							
	      							
	      						</div>
	      					</div>
	      				</div>
	      			</div>

	      			<div class="modal-footer">
	        			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-danger js-flagForumPost" >Report</button>
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

		<!-- Start User Sussess/Error Messages -->
		<!-- Success alert for when the user successfully adds a new post -->
		<div class="add-post-success-wrapper">
			<div class="well well-sm" id="add-post-success">
				<span class="text-info success-text-info">Your post has successfully been added.</span>
			</div>
		</div>

		<!-- Success alert for when the user successfully edits a post -->
		<div class="edit-post-success-wrapper">
			<div class="well well-sm" id="edit-post-success">
				<span class="text-info success-text-info">Your post has successfully been saved.</span>
			</div>
		</div>

		<!-- Success alert for when the user successfully edits a comment -->
		<div class="edit-comment-success-wrapper">
			<div class="well well-sm" id="edit-comment-success">
				<span class="text-info success-text-info">Your comment has successfully been saved.</span>
			</div>
		</div>

		<!-- Success alert for when the user successfully adds a comment -->
		<div class="add-comment-success-wrapper">
			<div class="well well-sm" id="add-comment-success">
				<span class="text-info success-text-info">Your comment has successfully been added.</span>
			</div>
		</div>
		
		<!-- Success alert for when the user successfully deletes a post -->
		<div class="delete-post-success-wrapper">
			<div class="well well-sm" id="delete-post-success">
				<span class="text-info success-text-info">Your post has successfully been deleted.</span>
			</div>
		</div>

		<!-- Success alert for when the user successfully deletes a comment -->
		<div class="delete-comment-success-wrapper">
			<div class="well well-sm" id="delete-comment-success">
				<span class="text-info success-text-info">Your comment has successfully been deleted.</span>
			</div>
		</div>

		<!-- Warning alert for when a non logged in user trys to vote on something -->
		<div class="noUser-vote-warning-wrapper">
			<div class="well well-sm" id="noUser-vote-warning">
				<span class="text-warning success-text-warning">You must be logged in to do that!</span>
			</div>
		</div>

		<!-- Success alert for when a user reports a post/comment -->
		<div class="flag-post-success-wrapper">
			<div class="well well-sm" id="flag-podt-success">
				<span class="text-info success-text-info">Your abuse report has been sent.</span>
			</div>
		</div>
		<!-- END User Sussess/Error Messages -->

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
				          <a class="navbar-brand navbar-site-brand" href="<?php  echo base_url(); ?>home/welcome">Logo</a>
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
								            	<?php 
								            	if ($loginStatus == True){
								            	?>
								            		<li name="user_profile"><a href="<?php  echo base_url(); ?>user_profile/home">My Profile</a></li>
								            	<?php } ?>

								            	<?php

								            		if($loginStatus == True && $user_type == 'admin'){
								            	?>
								            		<!-- When an admin user successfully signs in show the admin tab -->
								            		<li name="admin"><a href="<?php  echo base_url(); ?>admin/overview">Admin</a></li>
								            	<?php } ?>
								          	</ul>
								        </div>
								    </div>

									<?php //TODO: remove all of these echos. ?>
									<?php 
									if( $loginStatus == False )
									{
								     echo '<div class="col-md-6 login-form-col">';
								        echo '<div class="navbar-login-wrapper">';
								          	//Login form. This will toggle into the hamburger menu
								          	echo '<form class="navbar-form log-in-form" ';
											echo 'action="' . base_url() . 'login/login_form" ';
											echo 'login/login_form" method="post" id="log-in-form" >';
								            	echo '<div class="form-group">';
								              		echo '<input type="text" name="email" ';
													echo 'placeholder="Email" class="form-control log-in-input">';

								              		echo '<div class="checkbox">';
									              		echo '<input class="remember-me-checkbox" type="checkbox"> Remember Me';
								              		echo '</div>';
								            	echo '</div>'; // form-group
								            	echo '<div class="form-group">';
								              		echo '<input type="password" placeholder="Password" ';
													echo 'class="form-control log-in-input" name="password">';
								              		echo '<a href="'. base_url() . 'account/forgot_password_form" ';
													echo 'data-toggle="modal" data-target="#forgotPassModal">Forgot Password?';
													echo '</a>';
								            	echo '</div>';
								            	echo '<button type="submit" class="btn btn-success log-in-button">Log in</button>';
								          	echo '</form>';
								        echo '</div>';
								    echo '</div>';
									}//end if
									else 
									{ ?>
								     <div class="col-md-6 login-form-col">
								        <div class="navbar-login-wrapper pull-right">
											<p class="user-name">Welcome, <span><?php echo $user_name; ?></span></p>
											<a href="<?php echo base_url(); ?>login/logout">
												<button type="button" class="btn btn-danger log-out-button">Log out</button>	
											</a>
										</div>
									</div>
									<?php } ?> 
							    </div><!-- /.row -->
							</div><!-- /.container -->
				        </div><!--/.navbar-collapse -->
				    </div>

				</div><!-- /.row -->
	      	</div><!-- /.container -->
	    </nav>


