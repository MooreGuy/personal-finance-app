<?php

class User extends CI_Model
{	
	var $account_creation_date = '';
	var $username = '';
	var $first_name = '';
	var $last_name = '';
	var $password = '';
	var $email = '';
	
	function __construct()
	{
		parent::__construct();

		//Define the name of the table to access for this model.
		define( 'USERTABLE', 'users');

		$this->load->library('encrypt');
	}

	/*
		Creates a new user from the parameters given and the current time.
		Encrypts the password of the user before storing it.
	
		@param $username String username alias of the user.
		@param $password String the unencrypted password to be set as the user's password.
		@param $email String email of the user.

		@return boolean true if successful creation, or false if the user already exists.
	*/
	function insert_user( $username, $password, $email, $first_name, $last_name )
	{
		if( $this->user_exists($email) == False )
		{	
			$this->load->helper('date');

			$this->username = $username;
			$this->password = $this->encrypt->encode($password);
			$this->email = $email;
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->account_creation_date = now();

			echo '</br>';
			echo '<pre>';
			echo var_dump($this);
			echo '</pre>';
			$this->db->insert( USERTABLE, $this);	
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
		
		@return either true if the user successfully authenticated, or false if the
			authentication failed.
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

		//Select the id of the user.
		$this->db->select( 'id' );

		//Where the email and password match the parameters passed to this function.
		$this->db->where_in( 'email', $email );
		$this->db->where_in( 'password', $password );
		
		//Now get the data from the USERTABLE
		$query = $this->db->get( USERTABLE);

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
		
		@param $email string email that is checked against the database to see if
		there is a user already.
		
		@return boolean true if there is a user already in the database
		with $email as its email, or false if there is no existing user with $email as its email.
 	*/
	function user_exists( $email )
	{
		//QUERY

		//select only the email and match it against the $email argument.
		$this->db->select('email');
		$this->db->where('email', $email);

		$query = $this->db->get(USERTABLE);
		//END QUERY

		//Get the number of rows from the query, and check if there is at least one.
		if( $query->num_rows() > 0 )
		{
			return True;	//Yes there is a user already in the database with this email.
		}
		else
		{
			return False;	//No there isn't a user already in the database with this email.
		}
		
	}		
		

}

?>
