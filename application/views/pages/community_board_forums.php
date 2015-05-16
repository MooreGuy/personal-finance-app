
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
			  			echo "<a class='add-post-link' data-toggle='modal' data-target='#addForumPostModal'>Add post</a>";
			  		}?>
			  		
			  		<!--<label for="post-filter">Filter results by:</label>-->
			  		<select id="post-filter">
			  			<option value="1" disabled>Filter by:</option>
						<option value="2" selected>Top</option>
						<option value="3">New</option>
						<!--<option value="4">Most Commented</option>-->
					</select>
			  </span>
			  
			</ul>
		</div>

		<?php
			echo "<div class='col-md-12 tab-content' id='tabContent' data-currentUserId=" . $userId . ">";
		?>

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

										$voted = False;

										if($userVotes != NULL){
											foreach ($userVotes as $key => $votes) {
												//If the user thats logged in has voted on a post show what they voted
												if($votes->userId == $userId && $votes->postId == $post->id){																				
													echo "<div class='row up-vote-row'>";
														echo "<div class='col-md-1 up-vote-wrapper' data-post=" . $post->id . ">";
															echo "<div class='glyphicon'>";
																if($votes->voteCSS == 'vote-positive'){											
																	echo "<span class='glyphicon glyphicon-chevron-up " . $votes->voteCSS ."'></span>";
																}else{
																	echo "<span class='glyphicon glyphicon-chevron-up vote-neutral'></span>";
																}
															echo "</div>";
														echo "</div>";
													echo "</div>";

													echo "<div class='row vote-count-row' data-post=" . $post->id . ">";
														echo "<div class='col-md-1 positive-count-wrapper'>";
															if($post->upvotes_total >= 0){
																echo "<span class='positive-vote-count'>" . $post->upvotes_total . "</span>";
																													
															}else{
																echo "<span class='positive-vote-count'>0</span>";
															}
															$name = "vote" . $post->id;
															setcookie($name, $post->upvotes_total);
														echo "</div>";
													echo "</div>";

													echo "<div class='row down-vote-row'>";
														echo "<div class='col-md-1 down-vote-wrapper' data-post=" . $post->id . ">";
															echo "<div class='glyphicon'>";
																if($votes->voteCSS == 'vote-negative'){															
																	echo "<span class='glyphicon glyphicon-chevron-down " . $votes->voteCSS . "'></span>";
																}else{
																	echo "<span class='glyphicon glyphicon-chevron-down vote-neutral'></span>";
																}
															echo "</div>";
														echo "</div>";
													echo "</div>";

													$voted = True;
												}								
											}
										}

										if((empty($userVotes) || isset($userVotes[0])) && $voted == False){
											echo "<div class='row up-vote-row'>";
												echo "<div class='col-md-1 up-vote-wrapper' data-post=" . $post->id . ">";	
													echo "<div class='glyphicon'>";																								
														echo "<span class='glyphicon glyphicon-chevron-up vote-neutral'></span>";
													echo "</div>";
												echo "</div>";
											echo "</div>";

											echo "<div class='row vote-count-row' data-post=" . $post->id . ">";
												echo "<div class='col-md-1 positive-count-wrapper'>";
												if($post->upvotes_total >= 0){
													echo "<span class='positive-vote-count'>" . $post->upvotes_total . "</span>";
													
												}else{
													echo "<span class='positive-vote-count'>0</span>";
												}
													$name = "vote" . $post->id;
													setcookie($name, $post->upvotes_total);
												echo "</div>";
											echo "</div>";

											echo "<div class='row down-vote-row'>";
												echo "<div class='col-md-1 down-vote-wrapper' data-post=" . $post->id . ">";
													echo "<div class='glyphicon'>";
														echo "<span class='glyphicon glyphicon-chevron-down vote-neutral'></span>";	
													echo "</div>";												
												echo "</div>";
											echo "</div>";
										}
									echo "</div>";

									echo "<div class='col-md-11 post-wrapper'>";
										echo "<div class='panel panel-default forums-panel'>";
											echo "<div class='panel-heading' role='tab'>";
												echo "<h4 class='panel-title'>";
								    				echo "<a class='header-link-collapse' aria-expanded='true' data-post=". $post->id .">" . $post->title . "</a>";

								    				//foreach ($getAllPostsUserNames as $keys => $post_users) {
								    					//if($post_users->id == $post->userId){
								    						echo "<span class='post-author'> by " . $post->username . "</span>";
								    					//}
								    				//}
								      				

								      				if($loginStatus == True){
								      					$reported = false;
								      					if($userReport != NULL){
									      					foreach($userReport as $key => $report){
									      						if($post->id == $report->postId){
									      							echo "<span> - <span class='glyphicon glyphicon-flag glyphicon-flag-reported report-abuse-link-post' data-post='" . $post->id . "'></span></span>";
									      							$reported = true;
									      						}
									      					}
									      				}

								      					if($reported == false){
								      						echo "<span> - <a class='report-abuse-link-post'><span class='glyphicon glyphicon-flag' data-toggle='modal' data-target='#flagForumPostModal' data-post='" . $post->id . "'></span> </a></span>";
								      					}
								      						
								      					
								      					
								      				}
								        			
								        		
								        			if($post->userId == $userId){
								        				echo "<span class='glyphicon glyphicon-trash pull-right js-delete-postModal' data-toggle='modal' data-target='#deleteForumPostModal' aria-hidden='true' data-post='" . $post->id . "'></span>";
								        				echo "<a href='#' class='edit-post pull-right edit-postModal' data-toggle='modal' data-target='#editForumPostModal' data-post='" . $post->id . "'>Edit</a>";
								        			}
							      				echo "</h4>";
							    			echo "</div>";

							    			echo "<div class='panel-collapse ' role='tabpanel' data-post=" . $post->id . ">";
							    				echo "<div class='panel-body closed-panel' data-post=" . $post->id . ">";
							      					echo "<p class='body-text ' data-post=" . $post->id . ">" . nl2br($post->content) . "</p> ";
							      						
										      		echo "</div>";

										      		echo "<div class='comment-control-wrapper' data-post=" . $post->id . ">";
						      							echo "<div class='container'>";
						      								echo "<div class='row'>";
						      									echo "<div class='col-md-11 comment-control-col'>";
						      										echo "<span class='glyphicon glyphicon-chevron-right pull-left' data-toggle='collapse' href='#commentSection" . $post->id . "' aria-expanded='false' aria-controls='commentSection" . $post->id . "' aria-hidden='true' data-post=". $post->id ."></span>";
						      										
						      										if($loginStatus == True){
						      											echo "<a href='#' class='pull-left comment-link' data-toggle='modal' data-target='#addCommentPostModal' data-post=" . $post->id . ">Comment</a>";
						      										}else{
						      											echo "<a class='pull-left comment-link' data-post=" . $post->id . ">Comment</a>";
						      										}
						      										
									      						echo "</div>";
									      					echo "</div>";
									      				echo "</div>";
									      			echo "</div>";

									      			echo "<div class='comment-wrapper'>";	
					      							echo "<div class='conatiner'>";

					      								
					      											echo "<div class='collapse' id='commentSection" . $post->id . "' data-post='" . $post->id . "'>";
					      												
					      													
					      													$commented = False; //Check to see if a comment was posted
					      													
					      													foreach ($all_comments as $key => $comment) {
					
					      														 									
						      													if($comment->parentId == $post->id ){
						      														
						      														$commented = True;


						      														echo "<div class='row' data-post=" . $comment->id .">";
									      												echo "<div class='col-md-1 post-comment-vote-wrapper'>";

									      													$voted = False;

									      													foreach ($userVotes as $key => $votes) {
								      															if($votes->userId == $userId && $votes->postId == $comment->id){
								      																echo "<div class='row up-vote-row'>";
																										echo "<div class='col-md-1 up-vote-wrapper' data-post='" . $comment->id . "'>";
																											echo "<div class='glyphicon'>";
																												if($votes->voteCSS == 'vote-positive'){
																													echo "<span class='glyphicon glyphicon-chevron-up " . $votes->voteCSS . " comment-glyphicon'></span>";
																												}else{
																													echo "<span class='glyphicon glyphicon-chevron-up vote-neutral comment-glyphicon'></span>";
																												}
																											echo "</div>";
																										echo "</div>";
																									echo "</div>";

																									echo "<div class='row vote-count-row' data-post='" . $comment->id . "'>";
																										echo "<div class='col-md-1 positive-count-wrapper'>";
																										if($comment->upvotes_total > 0){
																											echo "<span class='positive-vote-count'>" . $comment->upvotes_total . "</span>";
																											

																										}else{
																											echo "<span class='positive-vote-count'>0</span>";
																										}
																										$name = "vote" . $comment->id;
																											setcookie($name, $comment->upvotes_total);
																										echo "</div>";
																									echo "</div>";

																									echo "<div class='row down-vote-row'>";
																										echo "<div class='col-md-1 down-vote-wrapper' data-post='" . $comment->id . "'>";
																											echo "<div class='glyphicon'>";
																												if($votes->voteCSS == 'vote-negative'){
																													echo "<span class='glyphicon glyphicon-chevron-down " . $votes->voteCSS ." comment-glyphicon'></span>";
																												}else{
																													echo "<span class='glyphicon glyphicon-chevron-down vote-neutral comment-glyphicon'></span>";
																												}
																											echo "</div>";
																										echo "</div>";
																									echo "</div>";

																									$voted = True;
										      													}
								      														}


									      													if((empty($userVotes) || isset($userVotes[0])) && $voted == False){
																								echo "<div class='row up-vote-row'>";
																									echo "<div class='col-md-1 up-vote-wrapper' data-post=" . $comment->id . ">";
																										echo "<div class='glyphicon'>";																									
																											echo "<span class='glyphicon glyphicon-chevron-up vote-neutral comment-glyphicon'></span>";
																										echo "</div>";
																									echo "</div>";
																								echo "</div>";

																								echo "<div class='row vote-count-row' data-post=" . $comment->id . ">";
																									echo "<div class='col-md-1 positive-count-wrapper'>";
																									if($comment->upvotes_total < 0){
																										echo "<span class='positive-vote-count'>0</span>";
																										
																									}else{
																										echo "<span class='positive-vote-count'>" . $comment->upvotes_total . "</span>";
																									}
																										$name = "vote" . $comment->id;
																										setcookie($name, $comment->upvotes_total);
																									echo "</div>";
																								echo "</div>";

																								echo "<div class='row down-vote-row'>";
																									echo "<div class='col-md-1 down-vote-wrapper' data-post=" . $comment->id . ">";
																										echo "<div class='glyphicon'>";
																											echo "<span class='glyphicon glyphicon-chevron-down vote-neutral comment-glyphicon'></span>";													
																										echo "</div>";
																									echo "</div>";
																								echo "</div>";
																							}
									      													
																						echo "</div>";

									      												echo "<div class='col-md-11 user-comment' data-post=" . $comment->id .">";
									      													//foreach ($getAllCommentsUserNames as $keys => $post_users) {

									      														//if($post_users->id == $comment->userId){
									      															echo "<label>" . $comment->username . "</label>";
									      															if($loginStatus == True){
									      																$reported = false;
																				      					if($userReport != NULL){
																					      					foreach($userReport as $key => $report){
																					      						if($comment->id == $report->postId){
																					      							echo "<span> - <span class='glyphicon report-abuse-link-post glyphicon-flag glyphicon-flag-reported' data-post='" . $comment->id . "'></span></span>";
																					      							$reported = true;
																					      						}
																					      					}
																					      				}

																				      					if($reported == false){
																				      						echo "<span> - <a class='report-abuse-link-post'><span class='glyphicon glyphicon-flag' data-toggle='modal' data-target='#flagForumPostModal' data-post='" . $comment->id . "'></span> </a></span>";
																				      					}
											      														//echo "<span> - <a class='report-abuse-link-post'><span class='glyphicon glyphicon-flag' data-toggle='modal' data-target='#flagForumPostModal' data-post='" . $comment->id . "></span> </a></span>";
											      														
											      														if($comment->userId == $userId){
								        																	echo "<span class='glyphicon glyphicon-trash pull-right js-delete-commentModal' data-toggle='modal' data-target='#deleteForumCommentModal' aria-hidden='true' data-post='" . $comment->id . "'></span>";
								        																	echo "<a href='#' class='edit-comment pull-right edit-commentModal' data-toggle='modal' data-target='#editForumCommentModal' data-post='" . $comment->id . "'>Edit</a>";
								        																}
											      													}
									      														//}
									      													//}
									      													
									      													echo "<p class='comment'>" . nl2br($comment->content) . "</p>";
									      												echo "</div>";

									      												
									      													
									      												
									      											echo "</div>";
									      											
									      										}

								      											
								      										}

								      										if((empty($all_comments) || isset($all_comments[0])) && $commented == False){
								      											echo "<div class='container no-comments-container'>";
																						echo "<div class='row'>";
																							echo "<div class='col-md-11 no-comments-col'>";
																								echo "<div class='well well-sm no-comments-wrapper'>";
																									echo "<span class='text-info' id='no-comments-message'>There are no comments! Click the comment link to add a new comment. </span>";	
																								echo "</div>";
																							echo "</div>";
																						echo "</div>";
																					echo "</div>";

																					$commented = True;
								      										}
							      										
					      											echo "</div>";
					      														      								
					      								
					      							echo "</div>";
					      						echo "</div>";	
							      				echo "</div>";

							      				

						      				echo "</div>";
						   				echo "</div>";
						  			echo "</div>";
								
							}

							//Pagination links.
							echo $links;
							$x++;
						}
					} else {
						echo "<div class='container no-posts-container'>";
							echo "<div class='row'>";
								echo "<div class='col-md-12'>";
									echo "<div class='well well-sm no-posts-wrapper'>";
										if($loginStatus == False){
											echo "<span class='text-info' id='no-posts-message'>There are no posts! Log in to add a new post. </span>";
										}else{
											echo "<span class='text-info' id='no-posts-message'>There are no posts! Click the button in the upper right to add a new post. </span>";
										}
										
									echo "</div>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
					}
					?>
				</div>

				<?php
					if(!empty($all_posts)){
				?>
				<!-- Container for the navigation -->
				<div class="container">
					<div class="row">
						<nav class="post-nav">

							  	<?php 
							  		//echo $links;
							  	?>
							    	<?php /*
							    		$i = 1;
							    		foreach ($all_posts as $key => $value) {
							    			if($i > 10){
							    				echo "<ul class='pagination pagination-bottom'>";
							    					echo "<li>";
								      					echo "<a href='#' aria-label='Previous'>";
								        					echo "<span aria-hidden='true'>&laquo;</span>";
								      					echo "</a>";
							    					echo "</li>";
							    			}
							    			//Every 10 posts incrament the pagination by 1
							    			if($i % 10 == 0){
							    				echo "<li><a href='#''>" . $i . "</a></li>";
							    			}

							    			if($i > 10){
								    				echo "<li>";
								      					echo "<a href='#' aria-label='Next'>";
								        					echo "<span aria-hidden='true'>&raquo;</span>";
								      					echo "</a>";
								    				echo "</li>";
								  				echo "</ul>";
							    			}

							    			$i++;
							    		}*/
							    	?>
							    	
							    
							    	
						</nav>
					</div>
				</div>
				<?php } ?>
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



