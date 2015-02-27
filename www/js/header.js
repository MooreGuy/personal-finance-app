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
		$('.navbar-login-wrapper').append('<p class="user-name">Welcome, <span>Blade Dyer</span></p> <button type="button" class="btn btn-danger log-out-button">Log out</button>');
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
		$('.navbar-login-wrapper').append('<form class="navbar-form log-in-form"> <div class="form-group"> <input type="text" placeholder="Email" class="form-control log-in-input"> <div class="checkbox"> <input class="remember-me-checkbox" type="checkbox"> Remember Me </div></div> <div class="form-group"> <input type="password" placeholder="Password" class="form-control log-in-input"> <a href="#">Forgot Password?</a></div> <button type="button" class="btn btn-success log-in-button">Log in</button></form>');
	});
});