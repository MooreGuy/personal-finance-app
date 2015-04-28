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

										foreach ($userVotes as $key => $votes) {
											//If the user thats logged in has voted on a post show what they voted
											if($votes->userId == $userId && $votes->postId == $post->id){																				
												echo "<div class='row up-vote-row'>";
													echo "<div class='col-md-1 up-vote-wrapper' data-post=" . $post->id . ">";

														if($votes->voteCSS == 'vote-positive'){											
															echo "<span class='glyphicon glyphicon-chevron-up " . $votes->voteCSS ."'></span>";
														}else{
															echo "<span class='glyphicon glyphicon-chevron-up vote-neutral'></span>";
														}

													echo "</div>";
												echo "</div>";

												echo "<div class='row vote-count-row' data-post=" . $post->id . ">";
													echo "<div class='col-md-1 positive-count-wrapper'>";
														echo "<span class='positive-vote-count'>" . $post->upvotes_total . "</span>";
													echo "</div>";
												echo "</div>";

												echo "<div class='row down-vote-row'>";
													echo "<div class='col-md-1 down-vote-wrapper' data-post=" . $post->id . ">";
														
														if($votes->voteCSS == 'vote-negative'){															
															echo "<span class='glyphicon glyphicon-chevron-down " . $votes->voteCSS . "'></span>";
														}else{
															echo "<span class='glyphicon glyphicon-chevron-down vote-neutral'></span>";
														}
													echo "</div>";
												echo "</div>";

												$voted = True;
											}								
										}

										if((empty($userVotes) || isset($userVotes[0])) && $voted == False){
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
										}
									echo "</div>";

									echo "<div class='col-md-11 post-wrapper'>";
										echo "<div class='panel panel-default forums-panel'>";
											echo "<div class='panel-heading' role='tab'>";
												echo "<h4 class='panel-title'>";
								    				echo "<a class='header-link-collapse' aria-expanded='true' data-post=". $post->id .">" . $post->title . "</a>";

								    				foreach ($getAllPostsUserNames as $keys => $post_users) {
								    					if($post_users->id == $post->userId){
								    						echo "<span class='post-author'> by " . $post_users->username . "</span>";
								    					}
								    				}
								      				

								      				if($loginStatus == True){
								      					echo "<span> - <a href='#'' class='report-abuse-link-post'><span class='glyphicon glyphicon-flag'></span> </a></span>";
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
						      										echo "<a href='#' class='pull-left comment-link' data-toggle='modal' data-target='#addCommentPostModal' data-post=" . $post->id . ">Comment</a>";
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


						      														echo "<div class='row'>";
									      												echo "<div class='col-md-1 post-comment-vote-wrapper'>";

									      													$voted = False;

									      													foreach ($userVotes as $key => $votes) {
								      															if($votes->userId == $userId && $votes->postId == $comment->id){
								      																echo "<div class='row up-vote-row'>";
																										echo "<div class='col-md-1 up-vote-wrapper' data-post-comment='" . $comment->id . "'>";

																											if($votes->voteCSS == 'vote-positive'){
																												echo "<span class='glyphicon glyphicon-chevron-up " . $votes->voteCSS . " comment-glyphicon'></span>";
																											}else{
																												echo "<span class='glyphicon glyphicon-chevron-up vote-neutral comment-glyphicon'></span>";
																											}
																										echo "</div>";
																									echo "</div>";

																									echo "<div class='row vote-count-row' data-post-comment='" . $comment->id . "'>";
																										echo "<div class='col-md-1 positive-count-wrapper'>";
																											echo "<span class='positive-vote-count'>" . $comment->upvotes_total . "</span>";
																										echo "</div>";
																									echo "</div>";

																									echo "<div class='row down-vote-row'>";
																										echo "<div class='col-md-1 down-vote-wrapper' data-post-comment='" . $comment->id . "'>";

																											if($votes->voteCSS == 'vote-negative'){
																												echo "<span class='glyphicon glyphicon-chevron-down " . $votes->voteCSS ." comment-glyphicon'></span>";
																											}else{
																												echo "<span class='glyphicon glyphicon-chevron-down vote-neutral comment-glyphicon'></span>";
																											}
																										echo "</div>";
																									echo "</div>";

																									$voted = True;
										      													}
								      														}


									      													if((empty($userVotes) || isset($userVotes[0])) && $voted == False){
																								echo "<div class='row up-vote-row'>";
																									echo "<div class='col-md-1 up-vote-wrapper' data-post-comment=" . $comment->id . ">";																									
																											echo "<span class='glyphicon glyphicon-chevron-up vote-neutral comment-glyphicon'></span>";
																									echo "</div>";
																								echo "</div>";

																								echo "<div class='row vote-count-row' data-post-comment=" . $comment->id . ">";
																									echo "<div class='col-md-1 positive-count-wrapper'>";
																										echo "<span class='positive-vote-count'>" . $comment->upvotes_total . "</span>";
																									echo "</div>";
																								echo "</div>";

																								echo "<div class='row down-vote-row'>";
																									echo "<div class='col-md-1 down-vote-wrapper' data-post-comment=" . $comment->id . ">";
																										echo "<span class='glyphicon glyphicon-chevron-down vote-neutral comment-glyphicon'></span>";													
																									echo "</div>";
																								echo "</div>";
																							}
									      													
																						echo "</div>";

									      												echo "<div class='col-md-11 user-comment'>";
									      													foreach ($getAllCommentsUserNames as $keys => $post_users) {

									      														if($post_users->id == $comment->userId){
									      															echo "<label>" . $post_users->username . "</label>";
									      															if($loginStatus == True){
											      														echo "<span class=''> - <a href='#'' class='report-abuse-link'><span class='glyphicon glyphicon-flag'></span></a></span>";
											      													}
									      														}
									      													}
									      													
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

<!-- community_board_forums_post_controls.js -->
<script type="text/javascript" src="/js/community_board_forums_post_controls.js"></script>