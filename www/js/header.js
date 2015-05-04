$(document).ready(function(){

	//When the page has enough content to scroll ad the scroll bar else get rid of it
	/*if($("html").height() < $( window ).height()){
		$("html").addClass('html-no-bar');
	}
	else{
		$("html").removeClass('html-no-bar');
	}*/

	//Control for when the next button is clicked on the password reset modal
	$('.js-forgotPassNext').on('click', function(){
  		var step = $('.js-forgotPassNext').data('step');

  		switch(step){
  			case 1: 
  					var newStep = step + 1;
  					
  					//Change the data-step attribute to the next one up (2)
  					$('.js-forgotPassNext').attr("data-step", newStep);

  					//Change the title to the 2nd step of the process
  					$('#forgotPassModalLabel').text("Reset Password");

  					//Remove the previous steps form
  					$('.forgotPass.step1').remove();

  					//Add the 2nd steps form
  					$('.forgot-pass-input-group').append("<div class='forgotPass step2'> <div class='container'> <div class='row'> <div class='col-md-6 modal-col'> <p>Please enter the Reset code that was sent to your email, then enter a new password.</p> </div> </div> <div class='row'> <div class='col-md-3 modal-col'> <div class='form-group'> <label for='idCode'>Reset Code:</label><input type='text' id='idCode' class='form-control'> </div> <div class='form-group'><label for='newPass'>New Password:</label><input type='text' id='newPass' class='form-control'> </div> <div class='form-group'><label for='confirmNewPass'>Confirm Password:</label><input type='text' id='confirmNewPass' class='form-control'> </div></div></div></div></div>");

  				break;
  			case 2:

  				break;
  		}
  		
	});

	//Control for when the close button is clicked on the password reset modal
	$('.js-forgotPassClose').on("click", function(){
		//Reset the data steps back to one
		$('.js-forgotPassNext').attr("data-step", 1);

		//Remove whatever step they are on
		$('.forgot-pass-input-group').empty();

		//Add the first step form
		$('.forgot-pass-input-group').append("<div class='forgotPass step1'><div class='container'> <div class='row'><div class='col-md-6'>	<p>We will send a password reset email with further instructions on resetting your password.</p></div></div><div class='row'> <div class='col-md-3'> <div class='form-group' ><label for='forgotPassEmail'>Email:</label><input type='email' id='forgotPassEmail' class='form-control'> </div></div></div></div></div>");

		//Change the title of the modal
		$('#forgotPassModalLabel').text("Forgot Password");
	});

	//Check input for special characters
	$.validator.addMethod("FormRegex", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9_ \-\+\.\!\@\#\$\%\^\&\*\(\)\{\}\[\]\"\'\:\;\?\\\w\s\n]+$/i.test(value);
    }, "HTML characters are not allowed.");

	/*
		When the user clicks the add button to add a post submit the form, clear the inputs, close the modal
	*/
	$('.js-addNew-forumPost').on('click', function(){
		//Submit the form
		$('#addNewPostForm').submit();
	});
		
	//Validate the Add new forum post form
	$('#addNewPostForm').validate({
		rules:{
			addPostCategory: {
				required: true,
				FormRegex: true
			},
			addPostTitle: {
				required: true,
				minlength: 3,
				maxlength: 100,
				FormRegex: true
			},
			addPostBody: {
				required: true,
				minlength: 10,
				maxlength: 1000,
				FormRegex: true
			}
		},
		messages:{
			addPostCategory: {
				required: "Required",
			},
			addPostTitle: {
				required: "Required",
				minlength: "Your title must be at lease 3 characters long",
				maxlength: "Your title can not be more than 100 characters long"
			},
			addPostBody: {
				required: "Required",
				minlength: "The body must be more than 10 characters long",
				maxlength: "Your body can not be more than 1000 characters long"
			}
		},
		validClass: "success", 
		
		submitHandler: function(){

			//Get the category, title, content, and upvote count
			var cat = $('#addPostCategory option:selected').text();
			var title = $('#addPostTitle').val();
			var content = $("#addPostBody").val();
			
			$.ajax({
			    	type: 'post',
			    	url: "/community_board_forums/addNewPost",
			    	dataType: "text",
			    	data:{
			    		category: cat,
			    		title: title,
			    		content: content
			    	},
			    	success: function(){

			    		//Hide the modal
						$('#addForumPostModal').modal('hide');
						//Clear the form inputs
						$('#addNewPostForm')[0].reset();
						//Reset the validation
						$('.form-control').removeClass('error').removeClass('success');
						$('#addPostCategory').removeClass('error').removeClass('success');

						//Show and hide success message
						$('.add-post-success-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
			    	}
			});
		}	
	});

	//When the user add a new comment submit the form
	$('.js-addNew-Comment').on('click', function(){
		//Submit the form
		$('#addCommentForm').submit();
	});

	//Validate the add comment forum post form
	$('#addCommentForm').validate({
		rules: {
			addCommentBody: {
				required: true,
				minlength: 3,
				maxlength: 1000,
				FormRegex: true
			}
		},
		messages: {
			addCommentBody: {
				required: "Required",
				minlength: "Your comment needs to have at least 3 characters.",
				maxlength: "Your comment can not be more than 1000 characters long."
			}
			
		},
		validClass: "success",

		submitHandler: function(){
			var parentId = $('.commentOnTitle').data('parentId');
			var category = $('.commentOnTitle').data('category')
			var content = $('#addCommentBody').val();

			$.ajax({
			    	type: 'post',
			    	url: "/community_board_forums/addNewComment",
			    	dataType: "text",
			    	data:{
			    		parentId: parentId,
			    		category: category,
			    		content: content
			    	},
			    	success: function(){
			    		//Hide the modal
						$('#addCommentPostModal').modal('hide');
						//Clear the form inputs
						$('#addCommentForm')[0].reset();
						//Reset the validation
						$('.form-control').removeClass('error').removeClass('success');
						
						//Show and hide success message
						$('.add-comment-success-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
			    	}
			});
		}
	});

	//Validate the edit post form
	$('.js-editPost').on('click', function(){
		//Submit the form
		$('#editPostForm').submit();
	});

	//Validate the edit forum form
	$('#editPostForm').validate({
		rules: {
			editPostTitle: {
				required: true,
				minlength: 3,
				maxlength: 100,
				FormRegex: true
			},
			editPostBody: {
				required: true,
				minlength: 10,
				maxlength: 1000,
				FormRegex: true
			}

		},
		messages: {
			editPostTitle: {
				required: "Required",
				minlength: "Your post needs to have at least 3 characters.",
				maxlength: "Your post can not be more than 100 characters long."
			},
			editPostBody: {
				required: "Required",
				minlength: "Your post needs to have at least 10 characters.",
				maxlength: "Your post can not be more than 1000 characters long."
			}
			
		},
		validClass: "success",

		submitHandler: function(){
			var postId = $('#editPostTitle').attr('postId');
			var title = $('#editPostTitle').val();
			var content = $('#editPostBody').val();

			$.ajax({
			    	type: 'post',
			    	url: "/community_board_forums/editPost",
			    	data:{
			    		postId: postId,
			    		title: title,
			    		content: content
			    	},
			    	success: function(){
			    		$('.header-link-collapse[data-post="' + postId +'"]').text(title);
	
			    		$('.body-text[data-post="' + postId +'"]').text(content);
			    		//Hide the modal
						$('#editForumPostModal').modal('hide');
						//Clear the form inputs
						$('#editPostForm')[0].reset();
						//Reset the validation
						$('.form-control').removeClass('error').removeClass('success');
						//Show and hide success message
						$('.edit-post-success-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
			    	}
			});
		}
	});

	$('.js-deletePost, .js-deleteComment').on("click", function(){
		if($(this).is('.js-deletePost')){
			var postId = $('#deletePostTitle').attr('postId');

			$.ajax({
			    	type: 'post',
			    	url: "/community_board_forums/deletePost",
			    	data:{
			    		postId: postId
			    	},
			    	success: function(){
			    		//Hide the modal
						$('#deleteForumPostModal').modal('hide');

						//Remove the post from the view
						$('.row[data-post='+ postId +']').remove();
						
						//Show and hide success message
						$('.delete-post-success-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
			    	}
			});
		}else if('.js-deleteComment'){
			var commentId = $('#deleteCommentBody').attr('postId');

			$.ajax({
			    	type: 'post',
			    	url: "/community_board_forums/deletePost",
			    	data:{
			    		postId: commentId
			    	},
			    	success: function(){
			    		//Hide the modal
						$('#deleteForumCommentModal').modal('hide');

						//Remove the post from the view
						$('.row[data-post='+ commentId +']').remove();
						
						//Show and hide success message
						$('.delete-comment-success-wrapper').fadeIn(800).delay(1500).fadeOut(1000);


			    	}
			});
		}
		
	});

	//Validate the edit comment form
	$('.js-editComment').on('click', function(){
		//Submit the form
		$('#editCommentForm').submit();
	});

	//Validate the edit forum form
	$('#editCommentForm').validate({
		rules: {
			editCommentBody: {
				required: true,
				minlength: 10,
				maxlength: 1000,
				FormRegex: true
			}

		},
		messages: {
			editCommentBody: {
				required: "Required",
				minlength: "Your comment needs to have at least 10 characters.",
				maxlength: "Your comment can not be more than 1000 characters long."
			}
			
		},
		validClass: "success",

		submitHandler: function(){
			var postId = $('#editCommentBody').attr('postId');
			var content = $('#editCommentBody').val();
			console.log(postId);
			$.ajax({
			    	type: 'post',
			    	url: "/community_board_forums/editComment",
			    	data:{
			    		postId: postId,
			    		content: content
			    	},
			    	success: function(){
			    		
			    		$('.user-comment[data-post="' + postId +'"] > .comment').text(content);
			    		//Hide the modal
						$('#editForumCommentModal').modal('hide');
						//Clear the form inputs
						$('#editCommentForm')[0].reset();
						//Reset the validation
						$('.form-control').removeClass('error').removeClass('success');
						//Show and hide success message
						$('.edit-comment-success-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
			    	}
			});
		}
	});

	//Validate the flag post
	$('.js-flagForumPost').on('click', function(){
		//Submit the form
		$('#report-post-form').submit();
	});

	//Validate the edit forum form
	$('#report-post-form').validate({
		rules: {
			flagFroumPostCommentBody: {
				required: {
					depends: function(){
						return ($('#flagForumPost').val() == "Other");
					}
				},
				minlength: 10,
				maxlength: 300,
				FormRegex: true
			},
			flagForumPost: {
				required: true
			}

		},
		messages: {
			flagFroumPostCommentBody: {
				required: "Required",
				minlength: "Your comment needs to have at least 10 characters.",
				maxlength: "Your comment can not be more than 300 characters long."
			}
			
		},
		validClass: "success",

		submitHandler: function(){
			var postId = $('#flagForumPostCommentBody').attr('postId');
			var content = $('#flagForumPostCommentBody').val();
			var reason = $('#flagForumPost option:selected').text();
			console.log(postId);
			$.ajax({
			    	type: 'post',
			    	url: "/community_board_forums/insertAlert",
			    	data:{
			    		postId: postId,
			    		content: content,
			    		severity: 5,
			    		reason: reason
			    	},
			    	success: function(){
			    		//Hide the modal
						$('#flagForumPostModal').modal('hide');
						//Clear the form inputs
						$('#report-post-form')[0].reset();
						//Reset the validation
						$('.form-control').removeClass('error').removeClass('success');
						//Show and hide success message
						$('.flag-post-success-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
						//Set the flag to red
						$('.glyphicon-flag[data-post='+ postId + ']').addClass('glyphicon-flag-reported');

						updateUserReport(postId);
			    	}
			});
		}
	});

	function updateUserReport(postId){
		
		$.ajax({
			type: 'post',
	    	url: "/community_board_forums/updateUserReport",
	    	data:{
	    		postId: postId,
	    	},
	    	success: function(){
	    		
	    	}
		});
	}

	//When the close button on a modal is clicked clear the form and all validation messages
	$('.btn[data-dismiss="modal"]').on("click", function(){
		//Clear the form inputs
		$('form')[0].reset();
		$('.form-control').val('');
		//Reset the validation
		$('.form-control').removeClass('success').removeClass('error');
		$('label[class="error"]').empty();
		$('select[class="success"]').removeClass('error').removeClass('success');
	});	
});
