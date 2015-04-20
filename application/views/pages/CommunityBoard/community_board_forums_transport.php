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
								echo "</div>";
							}
							

							      			
						}
					}
						
					
					?>
				 

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