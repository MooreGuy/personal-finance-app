
<div class="container" >

	<div class="row title">
		<div class="col-md-12">	
			<h1 class="page-header">Community Forums</h3>	
		</div>

		<div class="col-md-12">
			<p>Welcome to the Community Forums. Here you will find user posts that you can comment on. </p>
		</div>
	</div> <!-- END row -->

	<div class="row graphs">
		<div class="col-md-12">	
			<!-- Community Graphs -->
			<h3 class>Community Data</h3>	

			<div id="graphNav">
				<!-- Owl Carousel Graphs -->
				<div class="owl-carousel">
	      			<div id="graph1" class="graph"></div>
	      			<div id="graph2" class="graph"></div>
	      			<div id="graph3" class="graph"></div>
	      			<div id="graph4" class="graph"></div>

	      			
	    		</div>
	    		
				<div class="owl-controls">
	  				<div class="owl-nav">

	  					<button type="button" class="btn graphLeftBtn">
	  						<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span>
	  					</button>
	  					<button type="button" class="btn graphRightBtn">
	  						<span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
	  					</button>
	  					
					</div>
	  			</div>
  			</div>
			
		</div><!-- END Col-->
	</div> <!-- END Graphs row -->

	<div class="row tags">
		<div class="col-md-12">	
			<!-- Categories list -->
			<div class="row">
				<div class="col-md-12">
					<h3 class="pull-left">Forums</h3>
				</div>
			</div>
			
			<ul class="nav nav-tabs" role="tablist">
			  <li role="presentation" class="active"><a href="#" class="transport">Transport</a></li>
			  <li role="presentation" class=""><a href="#" class="food">Food</a></li>
			  <li role="presentation" class=""><a href="#" class="communications">Communications</a></li>
			  <li role="presentation" class=""><a href="#" class="entertainment">Entertainment</a></li>
			  <li role="presentation" class=""><a href="#" class="housing">Housing</a></li>
			  <li role="presentation" class=""><a href="#" class="utilities">Utilities</a></li>
			  <li role="presentation" class=""><a href="#" class="travel">Travel</a></li>
			  <li role="presentation" class=""><a href="#" class="general">General</a></li>
			  <span class="pull-right post-filter-wrapper">
			  		<a class="" data-toggle="modal" data-target="#addForumPostModal">Add new post</a>
			  		<!--<label for="post-filter">Filter results by:</label>-->
			  		<select id="post-filter">
						<option value="1">Top</option>
						<option value="2">New</option>
						<option value="3">Most Commented</option>
					</select>
			  </span>
			  
			</ul>
		</div>

		<div class="col-md-12 tab-content" id="tabContent">

			<!-- Begin Transport Tab-->
			<div class="panel-group tab-pane active" aria-multiselectable="true" id="transport" role="tabpanel">

				<!-- Container for the posts -->
				<div class="container post-container">

					<!-- Each Row contains a post-->

					
					
				    <div class="row" data-post='1'>
						 <!-- Wrapper for the up/down vote box -->
						<div class="col-md-1 post-vote-wrapper">
							<div class="row up-vote-row">
								 <!-- The data-post should be the id of the post -->

								<div class="col-md-1 up-vote-wrapper" data-post='1'>
									<span class="glyphicon glyphicon-chevron-up vote-neutral"></span>
								</div>
							</div>

							<div class="row vote-count-row" data-post='1'>
								<div class="col-md-1 positive-count-wrapper">
									<span class="positive-vote-count">2145</span>
								</div>
							</div>

							<div class="row down-vote-row">
								<div class="col-md-1 down-vote-wrapper" data-post='1'>
									<span class="glyphicon glyphicon-chevron-down vote-neutral"></span>
								</div>
							</div>
						</div>

						<!-- Post Wrapper-->
						<div class="col-md-11 post-wrapper">
						  	<!-- Post Panel -->
							<div class="panel panel-default forums-panel">

						    	<div class="panel-heading" role="tab">
						      		<h4 class="panel-title">
						      			<!-- data-post of the link should be the id of the post in the DB-->
						        		<a class="header-link-collapse" aria-expanded="true" data-post="1">Bus ticket prices dropped!</a>
						        		<span class="post-author"> by Mister Sprinkles</span>
						        		<span>-<a href="#" class="report-abuse-link-post"> Report Abuse</a></span>
						        		<span class="glyphicon glyphicon-trash pull-right js-deletePost" aria-hidden="true"></span>
						        		

						        		<!-- Edit Post -->
						        		<a href="#" class="edit-post pull-right" data-toggle="modal" data-target="#editForumPostModal" data-post="1">Edit</a>
						      		</h4>
						    	</div>

						    	<!-- Add the id of the post as data-post on the panel-body -->
						    	<div class="panel-collapse closed-panel" role="tabpanel" data-post="1">
						      		<div class="panel-body" data-post="1">
						      			<p class="body-text">Soon buses will be powered by electricity.</p> 

						      			<div class="comment-control-wrapper" data-post="1">
						      				<div class="container">
						      					<div class="row">
						      						<div class="col-md-11 comment-control-col">
									      				<span class="glyphicon glyphicon-chevron-right pull-left" data-toggle="collapse" href="#commentSection1" aria-expanded="false" aria-controls="commentSection1" aria-hidden="true" data-post="1"></span>
									      				<a href="#" class="pull-left comment-link" data-toggle="modal" data-target="#addCommentPostModal" data-post="1">Comment</a>
									      				
									      			</div>
									      		</div>
									      	</div>
						      			</div>

						      			<div class="comment-wrapper">
						      				<div class="conatiner">
						      					<div class="row collapse" id="commentSection1">
						      						<!-- Wrapper for the up/down vote box-->
													<div class="col-md-1 post-comment-vote-wrapper">
														<div class="row up-vote-row">
															<!-- The data-post should be the id of the post -->
															<div class="col-md-1 up-vote-wrapper" data-post-comment='1'>
																<span class="glyphicon glyphicon-chevron-up vote-neutral comment-glyphicon"></span>
															</div>
														</div>

														<div class="row vote-count-row" data-post-comment='1'>
															<div class="col-md-1 positive-count-wrapper">
																<span class="positive-vote-count">2145</span>
															</div>
														</div>

														<div class="row down-vote-row">
															<div class="col-md-1 down-vote-wrapper" data-post-comment='1'>
																<span class="glyphicon glyphicon-chevron-down vote-neutral comment-glyphicon"></span>
															</div>
														</div>
													</div>

						      						<div class="col-md-9 user-comment">
						      							<label>Dr.Awkward</label>
						      							<p class="comment">This is my comment. Look at it!</p>
						      							
						      						</div>

						      						<div class="col-md-2">
						      							<span class="pull-right"><a href="#" class="report-abuse-link">Report Abuse</a></span>
						      						</div>
						      					</div><!-- END Row -->
						      				</div><!-- END Container-->
						      			</div><!-- END Wrapper -->
						      			
						      		</div><!-- END Panel Body -->

						    	</div>
						  	</div><!-- END Post Panel-->
						</div><!-- END Post Wrapper-->
					</div><!-- END Row-->


					<!-- Each Row contains a post-->
					<div class="row" data-post='2'>
						<!-- Wrapper for the up/down vote box-->
						<div class="col-md-1 post-vote-wrapper">

							<div class="row up-vote-row">
								<div class="col-md-1 up-vote-wrapper" data-post='2'>
									<span class="glyphicon glyphicon-chevron-up vote-neutral"></span>
								</div>
							</div>

							<div class="row vote-count-row" data-post='2'>
								<div class="col-md-1 positive-count-wrapper">
									<span class="positive-vote-count">213</span>
								</div>
							</div>

							<div class="row down-vote-row">
								<div class="col-md-1 down-vote-wrapper" data-post='2'>
									<span class="glyphicon glyphicon-chevron-down vote-neutral"></span>
								</div>
							</div>
						</div>

						<!-- Post Wrapper-->
						<div class="col-md-11 post-wrapper">
							<!-- Post Panel -->
							<div class="panel panel-default forums-panel">

						    	<div class="panel-heading" role="tab">
						      		<h4 class="panel-title">
						      			<!-- data-post of the link should be the id of the post in the DB-->
						        		<a class="header-link-collapse" aria-expanded="true" data-post="2">How riding my bike to work saved me hundreds on gas last year!</a>

						        		<span class="badge pull-right">3</span>

						        		<a href="#" class="edit-post pull-right" data-toggle="modal" data-target="#editForumPostModal" data-post="2">Edit</a>

						        		
						      		</h4>
						    	</div>

						    	<!-- Add the id of the post ass a data-post in the body-->
						    	<div class="panel-collapse closed-panel" role="tabpanel" data-post="2">
						      		<div class="panel-body" data-post="2">Gas is expensive. Ride your bike to work instead</div>
						    	</div>
						  	</div><!-- END Post Panel-->
						</div><!-- END Post Wrapper-->
					</div><!-- END Row-->

				</div><!-- END Container-->

				<!-- Container for the navigation -->
				<div class="container">
					<div class="row">
						<nav class="post-nav">

							  	<ul class="pagination pagination-bottom">
							    	<li>
								      	<a href="#" aria-label="Previous">
								        	<span aria-hidden="true">&laquo;</span>
								      	</a>
							    	</li>
							    	<li><a href="#">1</a></li>
							    	<li><a href="#">2</a></li>
							    	<li><a href="#">3</a></li>
							    	<li><a href="#">4</a></li>
							    	<li><a href="#">5</a></li>
							    	<li>
							      		<a href="#" aria-label="Next">
							        		<span aria-hidden="true">&raquo;</span>
							      		</a>
							    	</li>
							  	</ul>
						</nav>
					</div>
				</div>
			</div><!-- END Panel Group-->
			
		</div><!-- END Tab Content-->
	</div> <!-- END Tags row -->

</div><!-- END container-->

<!-- owl.carousel.min.js -->
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<!-- community_board_forums.js -->
<script type="text/javascript" src="/js/community_board_forums.js"></script>
<!-- community_board_forums_post_controls.js -->
<script type="text/javascript" src="/js/community_board_forums_post_controls.js"></script>




