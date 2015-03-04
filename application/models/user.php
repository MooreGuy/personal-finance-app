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

	/*
		Creates a new user from the parameters given and the current time.
		Encrypts the password of the user before storing it.
	
		@param $id integer identifying the user //REMOVE THIS
		@param $username String username alias of the user.
		@param $password String the unencrypted password to be set as the user's password.
		@param $email String email of the user.

		@return boolean true if successful creation, or false if the user already exists.
	*/
	function insert_user( $id, $username, $password, $email )
	{
		if( user_exists($email) == False )
		{	
			$this->load->helper('date');

			$this->id = $id;
			$this->username = $username;
			$this->password = $this->encrypt->encode($password);
			$this->email = $email;
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->account_creation_date = now();

			$this->db->insert('USERTABLE', $this);	
		}
		else
		{
			//User exists, so return false.
			return False;
		}

		//Return true if user creation was successful.
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
		//Encrypt the password.
		$password = $this->encrypt->encode( $password );

		//Authenticate the user credentials, and get ID if it succeeds
		$user_id = authenticateUser( $email, $password );


	}

	/*
		Recieves an email string and a password string and checks
		the database for any matching items. Then, returns the 
		id if success or NULL if there were no matches.
	
		@param string $email of the account to be authenticated.
		@param string $password is the password of the account to be matched.

		@return Null if authentication fails, or the user_id if successful.
	*/
	function authenticate_user( $email, $password )
	{

		//QUERY
		//Select the id from the table.
		$this->db->select( 'id' );

		//Where the email and password match the parameters passed to this function.
		$this->db->where_in( 'email', $email );
		$this->db->where_in( 'password', $password );
		
		//Now get the data from the USERTABLE
		$query = $this->db->get( 'USERTABLE' );
		//END QUERY

		if( $query && $query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
			return NULL;
		}

	}

	/*
		Checks to make sure that a account with a given email doesn't already exist.
		
		@param $email string email that is checked against the database to see if there is a user already.
	*/
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
