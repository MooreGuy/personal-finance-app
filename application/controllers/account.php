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

	/*
		Checks to see if the user is logged in, if not then it tries to log them in.
	*/
	function login_form()
	{
		if( $this->checkCookieLogin() )
		{
			echo 'logged in!';
		}
		else
		{
			//Grab the post data from the form.
			$email = $this->input->post('email');
			$password = $this->input->post( 'password' );

			//User is not already logged in, so ask the model to log us in.
			if( $this->User->login( $email, $password ) )
			{
				echo 'logged in!';
			}
			else
			{
				echo 'failed to login';
			}
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
		//Check to see if the email in the cookie is set, if it is, then the user logged in already.
		if( $this->session->userdata('email') != NULL )
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
