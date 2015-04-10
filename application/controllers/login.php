<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//TODO: Sanitize input forms completely.
//TODO: Test login form authentication, after login form is working perfectly.

/*
	Load parent controller
*/
include_once( APPPATH . 'core/account.php' );


class Login extends Account
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->library('input');
		
		$this->load->helper('url');

		$this->load->model('User');
	}

	/*
		Loads a login page with an optional status.

		@param string $status a status message to display to the user at the form.
	*/	
	function login( $status = Null )
	{
		$data['title'] = 'Login';
		
		if( $status == "failed" )
		{
			$data['message'] = 'Error, invalid username or password';
		}

		$this->load->view('templates/header', $data);
		$this->load->view('pages/login', $data);
		$this->load->view('templates/footer', $data);
	}


	/*
		Checks the user session cookie for a login, if there is none then
		the controller will store the post data from the signin form, and
		call its login function. If the login attempt fails then it will
		display an error, if it succeeds then it will redirect to a homepage.
	*/
	function login_form()
	{
		//Check the session cookie for a username.
		if( $this->check_cookie_login() )
		{
			//The user has already authenticated, send them to their profile home.
			redirect('user_profile/home', 'location');
		}
		else
		{
			//Grab the post data from the form.
			$email = $this->input->post('email');
			$password = $this->input->post( 'password' );

			$this->load->helper('url');
			//Call the login function to attempt a login.
			if( $this->authenticate( $email, $password ) )
			{
				redirect('user_profile/home', 'location');
			}
			else
			{
				redirect('account/signup/failed', 'location');
			}

		}
	}		
	

}

?>
