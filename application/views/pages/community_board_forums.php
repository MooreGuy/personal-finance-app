
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

			  		<?php if($loginStatus == True){
			  			echo "<a class='' data-toggle='modal' data-target='#addForumPostModal'>Add new post</a>";
			  		}?>
			  		
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

					
					<?php 
					if(!empty($all_posts)){
						$x = 0; //counter for comment sections
						foreach( $all_posts as $key => $post ){
							if ($post->parentId == 0) {
								echo "<div class='row' data-post=" . $post->id .">";
									echo "<div class='col-md-1 post-vote-wrapper'>";
										echo "<div class='row up-vote-row'>";
											echo "<div class='col-md-1 up-vote-wrapper' data-post=" . $post->id . ">";
												echo "<span class='glyphicon glyphicon-chevron-up vote-neutral'></span>";
											echo "</div>";
										echo "</div>";

										echo "<div class='row vote-count-row' data-post=" . $post->id . ">";
											echo "<div class='col-md-1 positive-count-wrapper'>";
												echo "<span class='positive-vote-count'>" . $post->upvotes_total . "</span>";
											echo "</div>";
										echo "</div>";

										echo "<div class='row down-vote-row'>";
											echo "<div class='col-md-1 down-vote-wrapper' data-post=" . $post->id . ">";
												echo "<span class='glyphicon glyphicon-chevron-down vote-neutral'></span>";
											echo "</div>";
										echo "</div>";
									echo "</div>";

									echo "<div class='col-md-11 post-wrapper'>";
										echo "<div class='panel panel-default forums-panel'>";
											echo "<div class='panel-heading' role='tab'>";
												echo "<h4 class='panel-title'>";
								    				echo "<a class='header-link-collapse' aria-expanded='true' data-post=". $post->id .">" . $post->title . "</a>";
								      				echo "<span class='post-author'> by GET AUTHOR</span>";
								      				echo "<span>-<a href='#'' class='report-abuse-link-post'><span class='glyphicon glyphicon-flag'></span> </a></span>";
								        			echo "<span class='glyphicon glyphicon-trash pull-right js-deletePost' aria-hidden='true'></span>";
								        		
								        			if($post->userId == $userId){
								        				echo "<a href='#' class='edit-post pull-right' data-toggle='modal' data-target='#editForumPostModal' data-post='1'>Edit</a>";
								        			}
							      				echo "</h4>";
							    			echo "</div>";

							    			echo "<div class='panel-collapse closed-panel' role='tabpanel' data-post=" . $post->id . ">";
							    				echo "<div class='panel-body' data-post=" . $post->id . ">";
							      					echo "<p class='body-text'>" . $post->content . "</p> ";
							      						echo "<div class='comment-control-wrapper' data-post=" . $post->id . ">";
							      							echo "<div class='container'>";
							      								echo "<div class='row'>";
							      									echo "<div class='col-md-11 comment-control-col'>";
							      										echo "<span class='glyphicon glyphicon-chevron-right pull-left' data-toggle='collapse' href='#commentSection" . $x . "' aria-expanded='false' aria-controls='commentSection" . $post->id . "' aria-hidden='true' data-post=". $post->id ."></span>";
							      										echo "<a href='#' class='pull-left comment-link' data-toggle='modal' data-target='#addCommentPostModal' data-post=" . $post->id . ">Comment</a>";
										      						echo "</div>";
										      					echo "</div>";
										      				echo "</div>";
										      			echo "</div>";
										      		echo "</div>";
							      				echo "</div>";

							      				echo "<div class='comment-wrapper'>";	
					      							echo "<div class='conatiner'>";
					      								echo "<div class='row collapse' id='commentSection" . $x . "'>";
					      									echo "<div class='col-md-1 post-comment-vote-wrapper'>";
					      										
					      										echo "<div class='row up-vote-row'>";
																	echo "<div class='col-md-1 up-vote-wrapper' data-post-comment='GET COMMENT ID'>";
																		echo "<span class='glyphicon glyphicon-chevron-up vote-neutral comment-glyphicon'></span>";
																	echo "</div>";
																echo "</div>";

																echo "<div class='row vote-count-row' data-post-comment='GET COMMENT ID'>";
																	echo "<div class='col-md-1 positive-count-wrapper'>";
																	//GET VOTE COUNT
																		echo "<span class='positive-vote-count'>5</span>";
																	echo "</div>";
																echo "</div>";

																echo "<div class='row down-vote-row'>";
																	echo "<div class='col-md-1 down-vote-wrapper' data-post-comment='GET COMMENT ID'>";
																		echo "<span class='glyphicon glyphicon-chevron-down vote-neutral comment-glyphicon'></span>";
																	echo "</div>";
																echo "</div>";
															echo "</div>";

					      									echo "<div class='col-md-9 user-comment'>";
					      										echo "<label>GET COMMENT USERNAME</label>";

					      										echo "<p class='comment'>GET COMMENT CONTENT</p>";
					      							
					      									echo "</div>";

					      									echo "<div class='col-md-2'>";
					      										echo "<span class='pull-right'><a href='#'' class='report-abuse-link'><span class='glyphicon glyphicon-flag'></span></a></span>";
					      									echo "</div>";
					      								echo "</div>";
					      							echo "</div>";
					      						echo "</div>";			      	
						      				echo "</div>";
						   				echo "</div>";
						  			echo "</div>";
								
							}
							

						 $x++;	      			
						}
					}
					?>
				</div>

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




