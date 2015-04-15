 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller
{
	protected $user_id;
	protected $user_name;

	public function __construct()
	{
		parent::__construct();

		//Required for getting user data.
		$this->load->model('User');

		//Required for getting the login status of a user.
		$this->load->library('session');

		//TODO: Check to make sure all of the following loads are necessary for this controller,
		//or if they should be done in children.
		$this->load->library('input');

		$this->load->helper('url');

		$this->load->model('User');

		$this->user_id = $this->session->userdata('id');
		$this->user_name = $this->User->get_user_name( $this->user_id );

	}
	

	/*
		Used to check if the user is logged in, and if they aren't then redirect them
		to the welcome page.
	*/
	function requireLogin()
	{
		if( $this->checkLoginStatus() == False )
		{
			redirect('/account/login', 'location');
		}
	}


	/*
		Check if the user has already been authenticated by looking at the session data for
		an email. The existence of an email means the user should have already been
		authenticated.

		@return boolean True if the user has already been authenticated, false if otherwise.
	*/
	function checkLoginStatus()
	{
		//Check if there is a email in the cookie, since it is added when a
		// user is authenticated.
		if( $this->session->userdata('email') == Null )
		{
			return False;
		}
		else
		{
			return True;
		}
	}


	/*
		Add the $email and $id arguments to the cookie.
		
		@param string $email the email of the user.
		@param integer $id the id of the user.
		
		@return boolean false if adding the data to the cookie fails, and true if it succeeds.
	*/
	function add_cookie_data( $email, $id )
	{
		//Set the email and id keys to $email and $id arguments.
		$login_data = array
		(
			'email' => $email,
			'id' => $id
		);

		//Add $login_data contents to the session cookie to enable cookie login with cookies.
		$this->session->set_userdata( $login_data );

		//TODO: Add check to make sure the user's browser has cookies enabled. Until then
		//always return True.
		return True;
	}


	/*
		Check the cookie for login.

		@return true if the cookie has a login sessiona and is a valid cookie, otherwise false.
	*/
	public function check_cookie_login()
	{
		//Check to see if the email in the cookie is set, if it is,
		//then the user logged in by setting the email.
		if( $this->session->userdata('email') != NULL )
		{
			return True;	
		}
		else
		{
			return False;
		}		
	}


	/*
		@param $email string the user's email to authenticate.
		@param $password string the password to authenticate the email with.
	
		@return boolean True if there was a successful login, or
			 return false if the login attempt failed.
	*/
	function authenticate( $email, $password )
	{
		//Call the authentication method in the model which checks
		//for an email password matching the one passed.
		$user_id = $this->User->authenticate_user( $email, $password );

		//If there was something returned then set the cookie to hold the email password
		//and user id. If it doesn't then return false.
		if( is_numeric($user_id) )
		{
	
			//Set the session cookie to the cookieInfo array.
			if( $this->add_cookie_data( $email, $user_id ) )
			{
				//Cookie data added. Return true to show that it successfully completed.
				return True;
			}

		}

		//Authentication failed, return false.
		return False;
	}

}
?>