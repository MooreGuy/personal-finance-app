<?php

class Login extends CI_Library
{

	/*
		Login the user in
	*/
	public function login( $username, $password )
	{
		$CI = & get_instance();		

		$CI->load->model('User');
		$CI->load->model('Session');

		//Check to make sure the user isn't already logged in
		if( checkCookieLogin() )
		{
			return True;
		}

		//Authenticate the user, and get ID if it succeeds
		$user_id = $CI->User->authenticate()

		//Then add it to the session cookie

		
		
	}

	/*
		Check the cookie for login.
	*/
	public function checkCookieLogin()
	{
		$CI = & get_instance();
		
		$CI->load->library('session');
		
		
		//Check to see if the email in the cookie is set, if it is, then the user logged in already.
		if( isset($CI->session->userdata('email')) )
		{
			return True;	
		}
		else
		{
			return False;
		}		
	}

	/*
		Remove cookie data ?maybe from databse?
	*/	
	function logout()
	{

	}
		
		
}

?>
