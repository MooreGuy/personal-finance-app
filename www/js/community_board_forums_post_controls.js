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
		//var voteCount = parseInt($('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text());
		var voteCount = document.getCookie("vote" + postId);

		var currentUserId = $('#tabContent').data("currentuserid");

		if($(this).is('.glyphicon-chevron-up')){
			
			if(typeof currentUserId !== 'undefined' && currentUserId != 0){
				
				//Remove any neg class the bottom vote button has and set it back to neutral
				if($('.down-vote-wrapper[data-post=\"'+postId+'\"] > .glyphicon').children().hasClass('vote-negative')){
					$('.down-vote-wrapper[data-post=\"'+postId+'\"] > .glyphicon').children().removeClass('vote-negative').addClass('vote-neutral');

					//Also set the vote count back to normal
					if(document.getCookie("vote" + postId) > 0){
						$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(voteCount);
						document.setCookie("vote" + postId, voteCount);
					}
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

				    	success: function(){
				    		
				    	}
					});
				}

				//If the up vote button is neutral give it a positive and if it is positive give it a neutral
				if($(this).hasClass('vote-neutral')){
					$(this).removeClass('vote-neutral').addClass('vote-positive');
					//Set the count of the post to +1
					//console.log(voteCount);
					if(document.getCookie("vote" + postId) >= 0){
						
						$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(++voteCount);
						document.setCookie("vote" + postId, voteCount);
					}
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

					if(document.getCookie("vote" + postId) >= 0){

						$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(--voteCount);
						document.setCookie("vote" + postId, --voteCount);
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
			}else{
				//Show and hide warning message
				if($('.noUser-vote-warning-wrapper').is(":not(:visible)")){
					$('.noUser-vote-warning-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
				}
				
			}
		}else if($(this).is('.glyphicon-chevron-down')){
			if(typeof currentUserId !== 'undefined' && currentUserId != ''){
				//Remove any pos class the bottom vote button has and set it back to neutral
				if($('.up-vote-wrapper[data-post=\"'+postId+'\"] > .glyphicon').children().hasClass('vote-positive')){
					$('.up-vote-wrapper[data-post=\"'+postId+'\"] > .glyphicon').children().removeClass('vote-positive').addClass('vote-neutral');

					//Also set the vote count back to normal
					if(document.getCookie("vote" + postId) > 0){
						$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(voteCount);
						document.setCookie("vote" + postId, voteCount);
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
					if(document.getCookie("vote" + postId) > 0){
						$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(--voteCount);
						document.setCookie("vote" + postId, voteCount);
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
					if(document.getCookie("vote" + postId) > 0){
						$('.vote-count-row[data-post=\"'+postId+'\"] > div > span').text(voteCount);
						document.setCookie("vote" + postId, voteCount);
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
			}else{
				//Show and hide warning message
				if($('.noUser-vote-warning-wrapper').is(":not(:visible)")){
					$('.noUser-vote-warning-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
				}
			}
		}
	});

	/*
		When the edit post link is clicked grab the post info and display it in the input fields in the editModal
	*/
	$('.edit-postModal, .edit-commentModal').on("click", function(){
		

		if($(this).is('.edit-postModal')){
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
		}else if($(this).is('.edit-commentModal')){
			//Get the id of the post the user wants to edit
			var commentId = $('.edit-commentModal').data("post");
			//get the comment body
			var commentBody = $('.user-comment > p').text();
			$('#editCommentBody').val(commentBody);
			//Put the id in the comment
			$('#editCommentBody').attr("postId", commentId);
		}
		
	});

	/*
		When the delete post link is clicked grab the post info and display it in the delete modal
	*/
	$('.js-delete-postModal, .js-delete-commentModal').on("click", function(){
		if($(this).is('.js-delete-postModal')){
			//Get the id of the post the user wants to delete
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
		}else if($(this).is('.js-delete-commentModal')){
			//Get the id of the comment the user wants to delete
			var commentId = $('.delete-commentModal').data("post");
			//get the comment body
			var commentBody = $('.user-comment > p').text();
			
			//Put the id in the comment
			$('#deleteCommentBody').attr("postId", commentId);
			//Put the comment in the body
			$('#deleteCommentBody').text(commentBody);
		}
		
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
		var currentUserId = $('#tabContent').data("currentuserid");
		if(typeof currentUserId !== 'undefined' && currentUserId != ''){
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
		}else{
			//Show and hide warning message
			if($('.noUser-vote-warning-wrapper').is(":not(:visible)")){
				$('.noUser-vote-warning-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
			}
		}
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

	/*********************************************************
gets the value of a cookie
**********************************************************/
document.getCookie = function(sName)
{
    sName = sName.toLowerCase();
    var oCrumbles = document.cookie.split(';');
    for(var i=0; i<oCrumbles.length;i++)
    {
        var oPair= oCrumbles[i].split('=');
        var sKey = decodeURIComponent(oPair[0].trim().toLowerCase());
        var sValue = oPair.length>1?oPair[1]:'';
        if(sKey == sName)
            return decodeURIComponent(sValue);
    }
    return '';
}
/*********************************************************
sets the value of a cookie
**********************************************************/
document.setCookie = function(sName,sValue)
{
    var oDate = new Date();
    oDate.setYear(oDate.getFullYear()+1);
    var sCookie = encodeURIComponent(sName) + '=' + encodeURIComponent(sValue) + ';expires=' + oDate.toGMTString() + ';path=/';
    document.cookie= sCookie;
}
/*********************************************************
removes the value of a cookie
**********************************************************/
document.clearCookie = function(sName)
{
    setCookie(sName,'');
}
});