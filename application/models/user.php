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

			$this->username = $username;
			$this->password = $this->encrypt->encode($password);	//encrypt the password
			$this->email = $email;
			$this->first_name = $first_name;
			$this->last_name = $last_name;

			$this->load->helper('date');
			//Format the time with the datestring.
			$datestring = "%Y-%m-%d %h:%i:%s";
			//Get the current time to use for the mdate function. Although it defaults to the current time.
			$time = time();
			$this->account_creation_date = mdate($datestring, $time);

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
		Receives an email string and a password string and checks
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
		$sql = "SELECT id, password FROM " . self::USERSTABLE . " WHERE email = ?;";
		
		//Send the querry to the database to the table defined as USERSTABLE
		$query = $this->db->query( $sql, array($email) );
		//END QUERY

		//Get the user from the query.
		$first_row = $query->first_row();	
		
		//Decode the password in the database and compare it to the form password $password.
		if( $this->encrypt->decode($first_row->password) == $password )
		{
			//Return the id of the user.
			return $first_row->id;
		}

		return Null;

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
	

	/*
		Query the database for a user with the given email and return their user id.
	
		@param string $email is the email of the user.

		@return integer the id of the user.	
	*/
	function get_id( $email )
	{
		/* get the id of the given user using their email */
		$sql = 'select id from '. self::USERSTABLE . ' where email = ?';

		$query = $this->db->query( $sql, array('email' => $email) );
		
		//Only get the first row.
		$first_row = $query->first_row();

		//Return the id of the first row.
		return $first_row->id;
	}


	/*
		Get all user data for a particular user..
	
		@parameter integer $id is the id of the user to get the data for.
	
		@return array all the user data.
	*/
	function get_user_profile_data( $id )
	{
		//Select every column.
		$sql = 'select first_name, last_name, email, username, account_creation_date, password from ' . self::USERSTABLE . ' where id = ? ;';
		
		$query = $this->db->query( $sql, array($id) );

		//Decode the password so we can get its length.
		$data = $query->result_array();
		$decryptedPassword = $this->encrypt->decode($data[0]['password']);
		
		//Replace the password with asterisks.
		$data[0]['password'] = str_repeat( '*', strlen($decryptedPassword) );

		return $data;
	}


	/*
		Gets the users first and last names and combines them into one seperated by a space.

		@return string of the first and last name seperated by a space.
	*/
	function get_user_name( $user_id )
	{

		$sql = 'select first_name, last_name from ' . self::USERSTABLE . ' where id = ?';

		$query = $this->db->query( $sql, array($user_id) );

		//Check to make sure the database returned something, if nothing return null.
		if( $query->num_rows() > 0 )
		{
			$query_result = $query->result();
			
			return $query_result[0]->first_name . " " . $query_result[0]->last_name;
		}
		else
		{
			return NULL;
		}
	}

	/*
		Gets the type of the user

		@return string of the type of user
	*/
	function get_user_type($user_id){
		$this->db->select('privelege_level');
		$query = $this->db->get_where('users', array('id' => $user_id));

		if( $query->num_rows() > 0 )
		{
			$query_result = $query->result();
			
			return $query_result[0]->privelege_level;
		}
		else
		{
			return NULL;
		}
	}

}

?>
