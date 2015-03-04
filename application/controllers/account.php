<?php

class Account extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('login');		
		$this->load->library('session');

		$this->load->model('User');
	}

	function login_form()
	{

		$email = $this->input->post('email');
		$password = $this->input->post( 'password' );
		echo 'hello';
		if( $this->User->login( $email, $password ) )
		{
			echo 'logged in!';
		}

		else
		{
			echo 'failed to login';
		}
	}		
	
	function signup_form()
	{

		if( $this->User->signup() )
		{
			echo 'success!';
		}
		
		else
		{
			echo 'failure';
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
}

?>
