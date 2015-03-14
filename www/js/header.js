$(document).ready(function(){

	/*
	  	When the login button is clicked check that the user login is correct
	  	-If the login is incorrect display error validation message
	  	-If the login is correct remove the login form and button and display the logged in user state
	 */
	$('.navbar-login-wrapper').on("click", ".log-in-button",function(){

		//Check that the user login is correct

		//If log in is incorrect show error validation

		//If log in is correct remove the form and replace it with the user name and the log out link
		//-Remove the form
		$('.log-in-form').remove();
		//-Display the user name and the log out link
		$('.navbar-login-wrapper').addClass('pull-right');
		$('.navbar-login-wrapper').append('<p class="user-name">Welcome, <span>Mister Sprinkles</span></p> <button type="button" class="btn btn-danger log-out-button">Log out</button>');
	});

	/*
		When the user clicks the log out link:
		-Log the user out of the site and remove the user name and log out link
		-Show the log in form
	*/
	$('.navbar-login-wrapper').on("click", ".log-out-button",function(){
		//Log out the user

		//Remove the user name and log out link
		$('.user-name').remove();
		$('.log-out-button').remove();

		//Show the log in form
		$('.navbar-login-wrapper').removeClass('pull-right');
		$('.navbar-login-wrapper').append('<form class="navbar-form log-in-form"> <div class="form-group"> <input type="text" placeholder="Email" class="form-control log-in-input"> <div class="checkbox"> <input class="remember-me-checkbox" type="checkbox"> Remember Me </div></div> <div class="form-group"> <input type="password" placeholder="Password" class="form-control log-in-input"> <a href="#">Forgot Password?</a></div> <button type="button" class="btn btn-success log-in-button">Log in</button></form>');
	});

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
});