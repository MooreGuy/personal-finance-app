<?php

class Account extends CI_Controller
{

	public function __construct()
	{
		$this->load->library('sessions');
		$this->load->library('login');
	}

	function login_form()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$remember = $this->input->post('remember');		

		login
	}
	
	/* 
		Check to make sure the user has cookies enabled so they can be logged in.
	*/
	public function checkForCookiesEnabled( )
	{

		//Grab the session key and if it is false then ask the user to enable cookies.
		$sessionID = $this->session->userdata('session_id');
		if( $sessionID == False )
		{
			//Send warning.
			echo 'Cookies are not enabled.';
		}
	}
			
}
