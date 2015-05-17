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
				maxlength: 256,
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
		var newUserPassword = $('#editUserPassword').val();
		//Get the current password
		var currentUserPassword = $('#currentUserPassword').val();

		$.ajax({
		    	type: 'post',
		    	url: "/user_profile/updateProfileInfo",
		    	dataType: "text",
		    	data:{
		    		userFirstName: userFirstName,
		    		userLastName: userLastName,
		    		userEmail: userEmail,
		    		newUserPassword: newUserPassword,
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

					//  hide error message
					$('.update-profile-error-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
		    	}
		});
	}

	$('.addCatAndExpenses').on("click", function(){
		
		var data = [];
		//Get the category
		var category = $('#category-title').val();
		data.push({'type': category});
		//data['category'] = category;
		
		$('.expense-container').find('.addCatExpenseForm').each(function(){
			//Get the title, amount, occurence
			var count = $(this).attr('id');
			data.push({'title': $('input[name=title' + count + ']').val(), 'amount': $('input[name=amount' + count + ']').val(), 'interv': $('select[name=occurence' + count + '] > option:selected').text()});
			
			//data['amount'+count] = $('input[name=amount' + count + ']').val();
			//data['occurence'+count]= $('select[name=occurence' + count + '] > option:selected').text();
			count++;
		});
		console.log(data);
		addCatAndExpenses(data);
	});

	function addCatAndExpenses(data){
		$.ajax({
	    	type: 'post',
	    	url: "/user_profile/addCatAndExpences",
	    	dataType: "text",
	    	data: {data:data},

	    	success: function(){
	    		//If passwords match then update the user profile info
	    		//enterNewProfileInfo();
	    		//Hide the modal
					$('#addCatModal').modal('hide');
					//Clear the form inputs
					//$('#editUserProfile-modal-form')[0].reset();
					//Reset the validation
					$('.form-control').removeClass('error').removeClass('success');
					
					//Show and hide success message
					$('.update-expenses-success-wrapper').fadeIn(800).delay(1500).fadeOut(1000);
	    	}
	});
	}

	function submitNewCategory(count){
		var title = "title" + count.toString();
		var amount = "amount" + count.toString();
		var occurence = "occurence" + count.toString();
		
		$('#' + count).submit();

		$('#' + count).validate({
			rules:{
				title: {
					required: true,
					FormRegex: true,
					maxlength: 64
				},
				amount:{
					digits: true,
					maxlength: 8,
					required: true,
					FormRegex: true
				},
				occurence: {
					required: true
				}
			},
			messages:{
				title: {
					required: "Required",
					maxlength: "64 character max-length"
				},
				amount:{
					digits: "Must be a number",
					maxlength: "8 character max-length",
					required: "Required"
				},
				occurence: {
					required: "Required"
				}
			},
			validClass: "success",

			submitHandler: function(){
				alert("validate");
			}	
		});
	}

	

	$('.addExpenseToForm').on("click", function(){
		//Get the number of expense input rows
		var expenseCount = $('.expenseWrapper').length + 1;

		//Add an input row with data-expense = num of expense input rows + 1

		var addExpenseForm = $('#addExpenseTemplate').html();
		//$(".addExpenseToForm").addClass('hidden');
		$('.newExpenseForCat').prepend(addExpenseForm);
		//Insert expence id everywhere
		$('.expense-container').find('.expenseWrapper[data-expense=""]').attr('data-expense', expenseCount);
		$('.expense-container').find('input[data-expense=""]').attr('data-expense', expenseCount);
		//$('.expense-container').find('input[data-expense=""]').attr('data-expense', expenseCount);
		//$('.expense-container').find('div[data-expense=""]').attr('data-expense', expenseCount);
		$('.expense-container').find('span[data-expense=""]').attr('data-expense', expenseCount);
		$('.expense-container').find('select[data-expense=""]').attr('data-expense', expenseCount);
		$('.expense-container').find('form[id=""]').attr('id', expenseCount);

		//$('.expense-container').find('label[for="title"]').attr('for', "title" + expenseCount);
		$('.expense-container').find('input[name=title]').attr('id', "title" + expenseCount).attr('name', "title" + expenseCount);
		//$('.expense-container').find('label[for="amount"]').attr('for', "amount" + expenseCount);
		$('.expense-container').find('input[name=amount]').attr('id', "amount" + expenseCount).attr('name', "amount" + expenseCount);
		//$('.expense-container').find('label[for="occurence"]').attr('for', "occurence" + expenseCount);
		$('.expense-container').find('select[data-expense='+ expenseCount +']').attr('id', "occurence" + expenseCount).attr('name', "occurence" + expenseCount);

		if(expenseCount >= 7){
			$('.newExpenseForCat').css({'overflow-y': 'scroll', 'max-height': '340px'});
		}
		//console.log(expenseCount);
	});

	$('.newExpenseForCat').on("click", ".deleteExpenseFromCat", function(){
		//Get the id of the expense to remove
		var expenseId = $(this).data('expense');
		//console.log(expenseId);
		//Remove the expense from the list
		$('.expenseWrapper[data-expense=' + expenseId + ']').remove();

		//Get the count of inputs. If less than 7 remove scroll
		var expenseCount = $('input[name=title]').length;

		if(expenseCount <= 7){
			$('.newExpenseForCat').css({'overflow-y': ''});
		}
	});

	//When the close button on a modal is clicked clear the form and all validation messages
	$('.btn[data-dismiss="modal"]').on("click",function(){
		//Clear the form inputs
		$('form')[0].reset();
		$('.form-control').val('');
		//Reset the validation
		$('.form-control').removeClass('success').removeClass('error');
		$('label[class="error"]').empty();
		$('select[class="success"]').removeClass('error').removeClass('success');

		if($(this).hasClass('closeAddCat')){
			$('.expenseWrapper').remove();
		}
	});
});

