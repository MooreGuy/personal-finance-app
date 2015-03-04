<?php

class User extends CI_Model
{
	
	var $id = '';
	var $account_creation_date = '';
	var $username = '';
	var $first_name = '';
	var $last_name = '';
	var $password = '';
	var $email = '';
	
	function __construct()
	{
		parent::__construct();
		define( "USERTABLE", "users");
		$this->load->library('encrypt');
	}

	function insert_user( $id, $username, $password, $email )
	{
		if( user_exists == False )
		{	
			$this->load->helper('date');

			$this->id = $this->input->post('id');
			$this->username = $this->input->post('username');
			$this->password = $this->input->post('password');
			$this->email = $this->input->post('email');
			$this->first_name = $this->input->post('first_name');
			$this->last_name = $this->input->post('last_name');
			$this->account_creation_date = now();

			$this->db->insert('USERTABLE');	
		}
		else
		{
			//User exists, so return false.
			return False;
		}

		//Return true if use was successful in creation.
		return True;
	}
	
	/*
		Login the user in
		@param string $email the user's email
		@param string $password the user's password
		
		@return either true if the user successfully authenticated, or false if the authentication failed.
	*/	
	function login( $email, $password )
	{		
		//Check to make sure the user isn't already logged in
		if( checkCookieLogin() )
		{
			return True;
		}

		//Encrypt the password.
		$password = $this->encrypt->encode( $password );

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

	function authenticate_user( $email, $password )
	{

		$this->db->select( 'id' );
		$this->db->where_in( 'email', $email );
		$this->db->where_in( 'password', $password );
		
		$query = $this->db->get( 'USERTABLE' );

		if( $query && $query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
			return False;
		}

	}

	function user_exists( $email )
	{
		$this->db->select('email');
		$this->db->where('email', $email);
		$this->db->get('USERTABLE');

		if( $query )
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
