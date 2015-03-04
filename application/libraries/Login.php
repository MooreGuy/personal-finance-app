<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Login
{

	/*
		Login the user in
		@param string $email the user's email
		@param string $password the user's password
		
		@return either true if the user successfully authenticated, or false if the authentication failed.
	*/	
	public function login( $email = null, $password = null )//I DON'T KNOW WHY DEFAULT ARGUMENTS
															//FIXES THIS AND NEED TO ASK TYLER
	{
		$CI = & get_instance();		

		$CI->load->model('User');

		//Check to make sure the user isn't already logged in

		$this->checkCookieLogin();

		if( checkCookieLogin() )
		{
			return True;
		}

		//Authenticate the user credentials, and get ID if it succeeds
		$user_id = authenticateUser( $email, $password );
		if( $user_id != NULL )
		{
			$cookieInfo = array
			(
					'email' => $email,
					'password' => $password
			);
	
			$CI->session->userdata($cookieInfo);

			//All authenticated, return true to show that it successfully completed.
			return True;
		}
		else
		{
			return False;
		}
	
	}

	/*
		Check the cookie for login.

		@return true if the cookie has a login sessiona and is a valid cookie, or otherwise false.
	*/
	public function checkCookieLogin()
	{
		//Load the session library from the CI instance.
		$CI = & get_instance();		
		$CI->load->library('session');
		
		
		//Check to see if the email in the cookie is set, if it is, then the user logged in already.
		if( $CI->session->userdata('email') != NULL )
		{
			return True;	
		}
		else
		{
			return False;
		}		
	}

	/*
		@param string $email user email address
		@param string $password user password
		
		@return The user ID if authentication succeeds otherwise NULL
	*/
	public function authenticateUser( $email, $password )
	{
		$CI = & get_instance();
		$CI->load->model('User');
		$CI->load->library('session');
		
		//Ask the user model to check if the user and password match an account.
		if( $user_id = $CI->User->authenticate( $email, $password ) )
		{
			return $user_id;
		}
		else
		{
			//Return null, the user didn't authenticate properly.
			return;
		}
	}

	/*
		Remove cookie data ?maybe from databse?
	*/	
	public function logout()
	{

	}
		
		
}

?>
