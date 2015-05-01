$(document).ready(function(){
	
	
	

	/*
		Close and open a panel body when the header is clicked. 
	*/
	$('.header-link-collapse').on("click", function(){
		//id of the post
		var postId = $(this).data("post");

		//If the panel has an open class remove it and replace it with the closed-panel class
		if($('.panel-body[data-post=\"' + postId + '\"]').hasClass('open')){
			$('.panel-body[data-post=\"' + postId + '\"]').addClass('closed-panel').removeClass('open');

		//If the panel is closed remove it and replace it with the open class
		}else if($('.panel-body[data-post=\"' + postId + '\"]').hasClass('closed-panel')){
			$('.panel-body[data-post=\"' + postId + '\"]').removeClass('closed-panel').addClass('open');
		}
	});
	

	/*
		When the up vote button is clicked remove any previous selection the
		bottom vote button had and add the appropriate color class depending
		on what was there previously
	*/
	$('.glyphicon').on("click", ".glyphicon-chevron-up, .glyphicon-chevron-down", function(){
		//Get the category the vote is for.
		var category = $('.tab-pane').attr('id');

		//Get the Id of the post the vote is for
		var postId = $(this).parent().parent().data('post');

		//Get the count of the vote and add or decrease the count depending on the class
		var voteCount = parseInt($('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text());
		

		if($(this).is('.glyphicon-chevron-up')){

			//Remove any neg class the bottom vote button has and set it back to neutral
			if($('.down-vote-wrapper[data-post=\"'+postId+'\"] > .glyphicon').children().hasClass('vote-negative')){
				$('.down-vote-wrapper[data-post=\"'+postId+'\"] > .glyphicon').children().removeClass('vote-negative').addClass('vote-neutral');

				//Also set the vote count back to normal
				$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(++voteCount + 1);
				
				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-positive',
		    			category: category,
		    			//voteCount: voteCount + 1
		    			//voteType: "up"
		    		},

			    	error: function(){
			    		
			    	}
				});
			}

			//If the up vote button is neutral give it a positive and if it is positive give it a neutral
			if($(this).hasClass('vote-neutral')){
				$(this).removeClass('vote-neutral').addClass('vote-positive');
				//Set the count of the post to +1
				//console.log(voteCount);
				$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(++voteCount);

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-positive',
		    			category: category,
		    			//voteCount: voteCount
		    			//voteType: "up"
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
			}else{
				$(this).removeClass('vote-positive').addClass('vote-neutral');

				if(voteCount > 0){
					$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(--voteCount);
				}

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-neutral-positive',
		    			category: category,
		    			//voteCount: voteCount
		    			//voteType: "neutral"
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
			}
		}else if($(this).is('.glyphicon-chevron-down')){
			//Remove any pos class the bottom vote button has and set it back to neutral
			if($('.up-vote-wrapper[data-post=\"'+postId+'\"] > .glyphicon').children().hasClass('vote-positive')){
				$('.up-vote-wrapper[data-post=\"'+postId+'\"] > .glyphicon').children().removeClass('vote-positive').addClass('vote-neutral');

				//Also set the vote count back to normal
				if(voteCount > 0){
					$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(--voteCount);
				}

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-negative',
		    			category: category,
		    			//voteCount: voteCount
		    			//voteType: "down"
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
			}

			//If the down vote button is neutral give it a negative and if it is negative give it a neutral
			if($(this).hasClass('vote-neutral')){
				$(this).removeClass('vote-neutral').addClass('vote-negative');

				//Set the count of the post to -1
				if(voteCount > 0){
					$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(--voteCount);
				}

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-negative',
	    				category: category,
	    				//voteCount: voteCount
	    				//voteType: "down"
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
				
			}else{
				$(this).removeClass('vote-negative').addClass('vote-neutral');
				//Set the count of the post to +1
				if(voteCount > 0){
					$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(++voteCount);
				}

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-neutral-negative',
	    				category: category,
	    				//voteCount: voteCount
	    				//voteType: "down"
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
				
			}
		}
	});

	/*$('.glyphicon-chevron-up').on("click", function(){
		//Get the category the vote is for.
		var category = $('.tab-pane').attr('id');

		//Check to see if it is a comment or a post and get the id
		if($(this).parent().attr('data-post')){
			var type = "post";
		}
		else if($(this).parent().attr('data-post-comment')){
			var type = "comment";
		}

		if(type == "post"){
			

			//Remove any neg class the bottom vote button has and set it back to neutral
			if($('.down-vote-wrapper[data-post=\"'+postId+'\"]').children().hasClass('vote-negative')){
				$('.down-vote-wrapper[data-post=\"'+postId+'\"]').children().removeClass('vote-negative').addClass('vote-neutral');

				//Also set the vote count back to normal

				$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(++voteCount + 1);
				
				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-neutral',
		    			category: category,
		    			voteCount: voteCount + 1
		    		},

			    	error: function(){
			    		
			    	}
				});
				
			}

			//If the up vote button is neutral give it a positive and if it is positive give it a neutral
			if($(this).hasClass('vote-neutral')){
				$(this).removeClass('vote-neutral').addClass('vote-positive');
				//Set the count of the post to +1
				$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(++voteCount);

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-positive',
		    			category: category,
		    			voteCount: voteCount
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
			}else{
				$(this).removeClass('vote-positive').addClass('vote-neutral');
				//Set the count of the post to -1

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-neutral',
		    			category: category,
		    			voteCount: voteCount
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
			}
		} else if(type == "comment"){
			//Get the category the vote is for.
			var category = $('.tab-pane').attr('id');

			//Get the Id of the post the vote is for
			var postCommentId = $(this).parent().data('post-comment');

			//Get the count of the vote and add or decrease the count depending on the class
			var voteCount = parseInt($('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text());

			//Remove any neg class the bottom vote button has and set it back to neutral
			if($('.down-vote-wrapper[data-post-comment=\"'+postCommentId+'\"]').children().hasClass('vote-negative')){
				$('.down-vote-wrapper[data-post-comment=\"'+postCommentId+'\"]').children().removeClass('vote-negative').addClass('vote-neutral');

				//Also set the vote count back to normal
			
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(++voteCount+1);

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postCommentId,
		    			voteCSS: 'vote-neutral',
		    			category: category,
		    			voteCount: voteCount + 1
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
				
			}

			//If the up vote button is neutral give it a positive and if it is positive give it a neutral
			if($(this).hasClass('vote-neutral')){
				$(this).removeClass('vote-neutral').addClass('vote-positive');
				//Set the count of the post to +1
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(++voteCount);

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postCommentId,
		    			voteCSS: 'vote-positive',
		    			category: category,
		    			voteCount: voteCount
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
			}else{
				$(this).removeClass('vote-positive').addClass('vote-neutral');
				//Set the count of the post to -1
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(--voteCount);


				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postCommentId,
		    			voteCSS: 'vote-neutral',
		    			category: category,
		    			voteCount: voteCount
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
			}
		}
	});


	/*
		When the down vote button is clicked remove any previous selection the
		up vote button had and add the appropriate color class depending
		on what was there previously
	
	$('.glyphicon-chevron-down').on("click", function(){
		//Get the category the vote is for.
		var category = $('.tab-pane').attr('id');

		//Check to see if it is a comment or a post and get the id
		if($(this).parent().attr('data-post')){
			var type = "post";
		}
		else if($(this).parent().attr('data-post-comment')){
			var type = "comment";
		}

		if(type == "post"){
			//Get the Id of the post the vote is for
			var postId = $(this).parent().data('post');

			//Get the count of the vote and add or decrease the count depending on the addClass`
			var voteCount = parseInt($('.vote-count-row[data-post=\"'+postId+'\"]').children().text());

			//Remove any pos class the bottom vote button has and set it back to neutral
			if($('.up-vote-wrapper[data-post=\"'+postId+'\"]').children().hasClass('vote-positive')){
				$('.up-vote-wrapper[data-post=\"'+postId+'\"]').children().removeClass('vote-positive').addClass('vote-neutral');

				//Also set the vote count back to normal
				$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(--voteCount);
				$.ajax({
					type: "post",
					url: "/community_board_forums/updatePostVoteCount",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCount: voteCount - 1
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-neutral',
		    			category: category
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
			}

			//If the down vote button is neutral give it a negative and if it is negative give it a neutral
			if($(this).hasClass('vote-neutral')){
				$(this).removeClass('vote-neutral').addClass('vote-negative');

				//Set the count of the post to -1
				if(voteCount > 0){
					$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(--voteCount);
					$.ajax({
						type: "post",
						url: "/community_board_forums/updatePostVoteCount",
			    		dataType: "text",
			    		data:{
			    			postId: postId,
			    			voteCount: voteCount
			    		},

				    	success: function(){
				    		
				    	}
					});
				}

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-negative',
	    				category: category
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
				
			}else{
				$(this).removeClass('vote-negative').addClass('vote-neutral');
				//Set the count of the post to +1
				if(voteCount != 0){
					$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(++voteCount);
					$.ajax({
						type: "post",
						url: "/community_board_forums/updatePostVoteCount",
			    		dataType: "text",
			    		data:{
			    			postId: postId,
			    			voteCount: voteCount
			    		},

				    	success: function(){
				    		
				    	}
					});
				}

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postId,
		    			voteCSS: 'vote-neutral',
	    				category: category
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
			}
		}else if(type == "comment"){
			//Get the category the vote is for.
			var category = $('.tab-pane').attr('id');

			//Get the Id of the post the vote is for
			var postCommentId = $(this).parent().data('post-comment');

			//Get the count of the vote and add or decrease the count depending on the class
			var voteCount = parseInt($('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text());

			//Remove any neg class the bottom vote button has and set it back to neutral
			if($('.up-vote-wrapper[data-post-comment=\"'+postCommentId+'\"]').children().hasClass('vote-positive')){
				$('.up-vote-wrapper[data-post-comment=\"'+postCommentId+'\"]').children().removeClass('vote-positive').addClass('vote-neutral');

				//Also set the vote count back to normal
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(--voteCount);
				$.ajax({
					type: "post",
					url: "/community_board_forums/updatePostVoteCount",
		    		dataType: "text",
		    		data:{
		    			postId: postCommentId,
		    			voteCount: voteCount - 1
		    		},

			    	success: function(){
			    		
			    	}
				});

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postCommentId,
		    			voteCSS: 'vote-neutral',
		    			category: category
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
			}

			//If the up vote button is neutral give it a positive and if it is positive give it a neutral
			if($(this).hasClass('vote-neutral')){
				$(this).removeClass('vote-neutral').addClass('vote-negative');
				//Set the count of the post to -1
				
				if(voteCount != 0){
					$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(--voteCount);
					$.ajax({
						type: "post",
						url: "/community_board_forums/updatePostVoteCount",
			    		dataType: "text",
			    		data:{
			    			postId: postCommentId,
			    			voteCount: voteCount
			    		},

				    	success: function(){
				    		
				    	}
					});
				}

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postCommentId,
		    			voteCSS: 'vote-negative',
		    			category: category
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
				
			}else{
				$(this).removeClass('vote-negative').addClass('vote-neutral');
				//Set the count of the post to +1
				
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(++voteCount);
				$.ajax({
					type: "post",
					url: "/community_board_forums/updatePostVoteCount",
		    		dataType: "text",
		    		data:{
		    			postId: postCommentId,
		    			voteCount: voteCount
		    		},

			    	success: function(){
			    		
			    	}
				});

				$.ajax({
					type: "post",
					url: "/community_board_forums/updateUserVote",
		    		dataType: "text",
		    		data:{
		    			postId: postCommentId,
		    			voteCSS: 'vote-neutral',
		    			category: category
		    		},

			    	error: function(){
			    		alert("Opps. Something went wrong.");
			    	}
				});
				
			}
		}
	});*/

	/*
		When the edit post link is clicked grab the post info and display it in the input fields in the editModal
	*/
	$('.edit-postModal').on("click", function(){

		//Get the id of the post the user wants to edit
		var postId = $(this).data("post");

		//Get the title of the post
		var postTitle = $('.header-link-collapse[data-post=\"'+postId+'\"]').text();

		//Get the body of the post
		var postBody = $('.panel-body[data-post=\"'+postId+'\"] > .body-text').text();

		//Put the id in the title
		$('#editPostTitle').attr("postId", postId);

		//Put the title into the modal for editing
		$('#editPostTitle').val(postTitle);

		//Put the content into the body
		$('#editPostBody').val(postBody);
	});

	/*
		When the delete post link is clicked grab the post info and display it in the delete modal
	*/
	$('.js-delete-postModal').on("click", function(){
		//Get the id of the post the user wants to edit
		var postId = $(this).data("post");

		//Get the title of the post
		var postTitle = $('.header-link-collapse[data-post=\"'+postId+'\"]').text();

		//Get the body of the post
		var postBody = $('.panel-body[data-post=\"'+postId+'\"] > .body-text').text();

		//Put the id in the title
		$('#deletePostTitle').attr("postId", postId);

		//Put the title into the modal for editing
		$('#deletePostTitle').text(postTitle);

		//Put the content into the body
		$('#deletePostBody').text(postBody);
	});

	/*
		When the comment glyphicon is clicked rotate the glyphocon 
	*/
	$('.glyphicon-chevron-right').on("click", function(e){
		//Id of the post
		var postId = $(this).data("post");

		e.stopPropagation(); 
		//If the glyphicon is pointing down remove the rotate class and collapse the panel body
		if($(this).hasClass("glyphicon-chevron-right-rotate")){

			//Remove the rotate which will point the glyphicon back to the right
			$(this).removeClass("glyphicon-chevron-right-rotate");

			//Make the body of the panel collapse
			$('.collapse[data-post=\"' + postId+'\"]').removeClass('in');
		}else{

			//Add the rotate to get the glyphicon to point down
			$(this).addClass("glyphicon-chevron-right-rotate glyphicon-chevron-right-transition");

			//Open up the panel body
			$('.collapse[data-post=\"' + postId+'\"]').addClass('in');
		}
	});

	/*
		When the add comment modal pops up fill in the comment on title with the title of the post
	*/
	$('.comment-link').on("click", function(){
		//Id of the post
		var postId = $(this).data("post");

		//Get the title of the post
		var postTitle = $('.header-link-collapse[data-post=\"'+postId+'\"]').text();

		//Get the category of the post
		var category = $('.tab-pane').attr('id');

		//Put it in the modal
		$('.commentOnTitle').text(postTitle);
		$('.commentOnTitle').data('parentId', postId);
		$('.commentOnTitle').data('category', category);
	});

	$('#post-filter').change(function(){
		//Get the category of the post
		var category = $('.tab-pane').attr('id');
		var order = $('#post-filter option:selected').text().toLowerCase();

		$.ajax({
			type: "get",
			url: "/community_board_forums/loadCatTabs?tab="+category+"&orderBy="+order+"",
    		dataType: "html",

	    	success: function(data){
	    	$('#tabContent').html(data);

	    	}
		});
	});
});