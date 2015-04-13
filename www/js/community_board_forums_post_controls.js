$(document).ready(function(){
	
	
	

	/*
		Close and open a panel body when the header is clicked. 
	*/
	$('.header-link-collapse').on("click", function(){
		//id of the post
		var postId = $(this).data("post");

		//If the panel has an open class remove it and replace it with the closed-panel class
		if($('.panel-collapse[data-post=\"' + postId + '\"]').hasClass('open')){
			$('.panel-collapse[data-post=\"' + postId + '\"]').addClass('closed-panel').removeClass('open');

		//If the panel is closed remove it and replace it with the open class
		}else if($('.panel-collapse[data-post=\"' + postId + '\"]').hasClass('closed-panel')){
			$('.panel-collapse[data-post=\"' + postId + '\"]').removeClass('closed-panel').addClass('open');
		}
	});
	

	/*
		When the up vote button is clicked remove any previous selection the
		bottom vote button had and add the appropriate color class depending
		on what was there previously
	*/
	$('.glyphicon-chevron-up').on("click", function(){
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

			//Get the count of the vote and add or decrease the count depending on the class
			var voteCount = parseInt($('.vote-count-row[data-post=\"'+postId+'\"]').children().text());

			//Remove any neg class the bottom vote button has and set it back to neutral
			if($('.down-vote-wrapper[data-post=\"'+postId+'\"]').children().hasClass('vote-negative')){
				$('.down-vote-wrapper[data-post=\"'+postId+'\"]').children().removeClass('vote-negative').addClass('vote-neutral');

				//Also set the vote count back to normal
				$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(++voteCount);
			}

			//If the up vote button is neutral give it a positive and if it is positive give it a neutral
			if($(this).hasClass('vote-neutral')){
				$(this).removeClass('vote-neutral').addClass('vote-positive');
				//Set the count of the post to +1
				$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(++voteCount);
			}else{
				$(this).removeClass('vote-positive').addClass('vote-neutral');
				//Set the count of the post to -1
				$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(--voteCount);
			}
		} else if(type == "comment"){
			//Get the Id of the post the vote is for
			var postCommentId = $(this).parent().data('post-comment');

			//Get the count of the vote and add or decrease the count depending on the class
			var voteCount = parseInt($('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text());

			//Remove any neg class the bottom vote button has and set it back to neutral
			if($('.down-vote-wrapper[data-post-comment=\"'+postCommentId+'\"]').children().hasClass('vote-negative')){
				$('.down-vote-wrapper[data-post-comment=\"'+postCommentId+'\"]').children().removeClass('vote-negative').addClass('vote-neutral');

				//Also set the vote count back to normal
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(++voteCount);
			}

			//If the up vote button is neutral give it a positive and if it is positive give it a neutral
			if($(this).hasClass('vote-neutral')){
				$(this).removeClass('vote-neutral').addClass('vote-positive');
				//Set the count of the post to +1
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(++voteCount);
			}else{
				$(this).removeClass('vote-positive').addClass('vote-neutral');
				//Set the count of the post to -1
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(--voteCount);
			}
		}
	});


	/*
		When the down vote button is clicked remove any previous selection the
		up vote button had and add the appropriate color class depending
		on what was there previously
	*/
	$('.glyphicon-chevron-down').on("click", function(){
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

			//Get the count of the vote and add or decrease the count depending on the class
			var voteCount = parseInt($('.vote-count-row[data-post=\"'+postId+'\"]').children().text());

			//Remove any pos class the bottom vote button has and set it back to neutral
			if($('.up-vote-wrapper[data-post=\"'+postId+'\"]').children().hasClass('vote-positive')){
				$('.up-vote-wrapper[data-post=\"'+postId+'\"]').children().removeClass('vote-positive').addClass('vote-neutral');

				//Also set the vote count back to normal
				$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(--voteCount);
			}

			//If the down vote button is neutral give it a positive and if it is positive give it a neutral
			if($(this).hasClass('vote-neutral')){
				$(this).removeClass('vote-neutral').addClass('vote-negative');
				//Set the count of the post to -1
				$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(--voteCount);
			}else{
				$(this).removeClass('vote-negative').addClass('vote-neutral');
				//Set the count of the post to +1
				$('.vote-count-row[data-post=\"'+postId+'\"]').children().text(++voteCount);
			}
		}else if(type == "comment"){
			//Get the Id of the post the vote is for
			var postCommentId = $(this).parent().data('post-comment');

			//Get the count of the vote and add or decrease the count depending on the class
			var voteCount = parseInt($('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text());

			//Remove any neg class the bottom vote button has and set it back to neutral
			if($('.up-vote-wrapper[data-post-comment=\"'+postCommentId+'\"]').children().hasClass('vote-positive')){
				$('.up-vote-wrapper[data-post-comment=\"'+postCommentId+'\"]').children().removeClass('vote-positive').addClass('vote-neutral');

				//Also set the vote count back to normal
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(--voteCount);
			}

			//If the up vote button is neutral give it a positive and if it is positive give it a neutral
			if($(this).hasClass('vote-neutral')){
				$(this).removeClass('vote-neutral').addClass('vote-negative');
				//Set the count of the post to +1
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(--voteCount);
			}else{
				$(this).removeClass('vote-negative').addClass('vote-neutral');
				//Set the count of the post to -1
				$('.vote-count-row[data-post-comment=\"'+postCommentId+'\"]').children().text(++voteCount);
			}
		}
		});

	/*
		When the edit post link is clicked grap the post info and display it in the input fields in the editModal
	*/
	$('.edit-post').on("click", function(){

		//Get the id of the post the user wants to edit
		var postId = $(this).data("post");

		//Get the title of the post
		var postTitle = $('.header-link-collapse[data-post=\"'+postId+'\"]').text();

		//Get the body of the post
		var postBody = $('.panel-body[data-post=\"'+postId+'\"] > .body-text').text();

		//Put the title into the modal for editing
		$('#editPostTitle').val(postTitle);

		//Put the content into the body
		$('#editPostBody').val(postBody);
	});

	/*
		When the comment glyphicon is clicked rotate the glyphocon 
	*/
	$('.glyphicon-chevron-right').on("click", function(){
		//Id of the post
		var postId = $(this).data("post");

		//If the glyphicon is pointing down remove the rotate class and collapse the panel body
		if($(this).hasClass("glyphicon-chevron-right-rotate")){

			//Remove the rotate which will point the glyphicon back to the right
			$(this).removeClass("glyphicon-chevron-right-rotate");

			//Make the body of the panel collapse
			$('.panel-collapse[data-post=\"' + postId + '\"]').addClass('closed-panel').removeClass('open');
		}else{

			//Add the rotate to get the glyphicon to point down
			$(this).addClass("glyphicon-chevron-right-rotate glyphicon-chevron-right-transition");

			//Open up the panel body
			$('.panel-collapse[data-post=\"' + postId + '\"]').removeClass('closed-panel').addClass('open');
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

		//Put it in the modal
		$('.commentOnTitle').text(postTitle);
	});
});