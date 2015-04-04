<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoggedInPage.php extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		//Required for getting user data.
		$this->load->model('User');

		//Required for getting the login status of a user.
		$this->load->library('session');
	}


	/*
		Used to check if the user is logged in, and if they aren't then redirect them
		to the welcome page.
	*/
	function requireLogin()
	{
		if( $this->checkLoginStatus() == False )
		{
			redirect('/account/login', 'location');
		}
	}


	/*
		Check if the user has already been authenticated by looking at the session data for
		an email. The existence of an email means the user should have already been
		authenticated.

		@return boolean True if the user has already been authenticated, false if otherwise.
	*/
	function checkLoginStatus()
	{
		//Check if there is a email in the cookie, since it is added when a
		// user is authenticated.
		if( $this->session->userdata('email') == Null )
		{
			return False;
		}
		else
		{
			return True;
		}
	}
}
?>
