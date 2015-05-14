$(document).ready(function() {
	//Add the active class to the navbar on page load
	$('.navbar-nav > li[name="user_profile"]').addClass('active');

	$('.category-affix').affix();
	

	$('#editUserProfileData').on('click', function(){
		//Get the users first name
		var userFirstName = $('#usersFirstName').text();

		//Get the users last name
		var userLastName = $('#usersLastName').text();

		//Get the users email
		var userEmail = $('#email').text();

		//Get the users username
		var userUsername = $('#username').text();

		//Put userFirstName into the modal input field
		$('#editUserFirstName').val(userFirstName);

		//Put userLastName into the modal input field
		$('#editUserLastName').val(userLastName);

		//Put useremail into the modal input field
		$('#editUserEmail').val(userEmail);

		//Put userUsername into the modal input field
		$('#editUserUsername').val(userUsername);
	});

	// at least one number, one lowercase and one uppercase letter
    // at least eight characters
	$.validator.addMethod("passwordFormRegex", function(value, element) {
        return this.optional(element) || /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/i.test(value);
    }, "Your password must have at least: One number, One lowercase letter, One uppercase letter, and be eight characters long");

    //Check input for special characters
	$.validator.addMethod("FormRegex", function(value, element) {
        return this.optional(element) || /^[a-zA-Z 0-9\-\+\.\!\@\#\$\%\^\&\*\(\)\{\}\[\]\"\'\:\;\?\\"]+$/i.test(value);
    }, "HTML characters are not allowed.");

	$('.editUserProfileInfo').on("click", function(){

		$('#editUserProfile-modal-form').submit();
	});

	$('#editUserProfile-modal-form').validate({
		rules:{
			editUserFirstName: {
				required: true,
				FormRegex: true,
				maxlength: 64,
				minlength: 1
			},
			editUserLastName: {
				required: true,
				FormRegex: true,
				maxlength: 64
			},
			editUserEmail: {
				required: true,
				FormRegex: true,
				maxlength: 128,
				email: true
			},
			editUserUsername: {
				required: true,
				FormRegex: true,
				maxlength: 64
			},
			editUserPassword: {
				passwordFormRegex: true,
				maxlength: 256,
				minlength: 8
			},
			currentUserPassword: {
				required: true,
				maxlength: 256
				minlength: 8
			}

		},
		messages:{
			editUserFirstName: {
				required: "Required.",
				maxlength: "Up to 64 characters allowed."
			},
			editUserLastName: {
				required: "Required.",
				maxlength: "Up to 64 characters allowed."
			},
			editUserEmail: {
				required: "Required.",
				maxlength:  "Up to 128 characters allowed.",
				email: "This must be a valid email."
			},
			editUserUsername: {
				required: "Required.",
				maxlength: "Up to 64 characters allowed."
			},
			editUserPassword: {
				maxlength: "Up to 256 characters allowed.",
				minlength: "Must be at least eight characters."
			},
			currentUserPassword: {
				required: "Required.",
				maxlength:  "Up to 256 characters allowed.",
				minlength: "Must be at least eight characters."
			}
		},
		validClass: "success", 
		
		submitHandler: function(){
			
			//Get the current password
			var userCurrentPassword = $('#currentUserPassword').val();

			//Check to see if the current password matches users current password
			checkPasswordMatch(userCurrentPassword);
			
			
		}	
	});

	function checkPasswordMatch(userCurrentPassword){
		$.ajax({
		    	type: 'post',
		    	url: "/user_profile/checkPasswordForProfileUpdate",
		    	dataType: "text",
		    	data:{
		    		userCurrentPassword: userCurrentPassword
		    	},

		    	success: function(){
		    		//If passwords match then update the user profile info
		    		enterNewProfileInfo();
		    	},

		    	error: function(xhr, status, error){
		    		//If passwords dont match then throw an error
		    		$('#currentUserPassword-error').text("The password you have enetered is incorrect");
		    		$('#currentUserPassword-error').addClass('error-show');
		    		$('#currentUserPassword').removeClass('success').addClass('error');
		    	}
		});
	}

	function enterNewProfileInfo(){
		//Get the first name
		var userFirstName = $('#editUserFirstName').val();
		//Get the last name
		var userLastName = $('#editUserLastName').val();
		//Get the email
		var userEmail = $('#editUserEmail').val();
		//Get the new password
		var currentUserPassword = $('#currentUserPassword').val();

		$.ajax({
		    	type: 'post',
		    	url: "/user_profile/updateProfileInfo",
		    	dataType: "text",
		    	data:{
		    		userFirstName: userFirstName,
		    		userLastName: userLastName,
		    		userEmail: userEmail,
		    		currentUserPassword: currentUserPassword
		    	},
		    	success: function(){
		    		//Hide the modal
					$('#editUserProfileModal').modal('hide');
					//Clear the form inputs
					$('#editUserProfile-modal-form')[0].reset();
					//Reset the validation
					$('.form-control').removeClass('error').removeClass('success');
					
					//Show and hide success message
					$('.update-profile-success-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
		    	},

		    	error: function(xhr, status, error){
		    		//Hide the modal
					$('#editUserProfileModal').modal('hide');
					//Clear the form inputs
					$('#editUserProfile-modal-form')[0].reset();
					//Reset the validation
					$('.form-control').removeClass('error').removeClass('success');

					//Show and hide error message
					$('.update-profile-error-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
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