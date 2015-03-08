<?php

class User extends CI_Model
{	
	const USERSTABLE = 'users';

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
			$this->password = $this->encrypt->encode($password);	//encrypt the password
			$this->email = $email;
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->account_creation_date = now();

			$this->db->insert( self::USERSTABLE, $this);	
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

		//Where the email and password match this function's arguments from the table defined
		//by the constant USERSTABLE.
		$sql = 'select id from ' . self::USERSTABLE . ' where email = ? and password = ?';
		echo $sql;
		
		//Send the querry to the database to the table defined as USERSTABLE
		$query = $this->db->query( $sql, array( $email, $this->encrypt->decode($password) ) );

		//END QUERY

		if( $query->num_rows() > 0 )
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
		with $email as its email, or false if there is no existing user with $email as its email
 	*/
	function user_exists( $email )
	{
		//QUERY

		//select only the email and match it against the $email argument.
		$this->db->select('email');
		$this->db->where('email', $email);

		$query = $this->db->get( self::USERSTABLE );
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
