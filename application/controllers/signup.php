<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Import parent controller.
*/
include_once( APPPATH . 'core/account.php' );


class Signup extends Account
{

	public function __construct()
	{
		parent::__construct();

		//TODO: Check if all of these loads are needed.
		$this->load->library('session');
		$this->load->library('input');
		
		$this->load->helper('url');

		$this->load->model('User');
	}


	/*
		Signup page with a signup form. With an optional status message.

		@param string $status a status message to display to the user at the form.
	*/
	function signup( $status = Null )
	{
		$data['title'] = 'Signup';
		if( $status == "failed" )
		{
			$data['message'] = "Error, you entered something in wrong!.";	
		}

		//Get the user's name from the parent class.
		$data['user_name'] = $this->user_name;
		$data['user_type'] = $this->User->get_user_type($this->session->userdata('id'));
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/signup', $data);
		$this->load->view('templates/footer', $data);
	}


	/*
		The function collects the user form data and passes it to
		the signup function in the User model, if it it fails it will
		show an error, otherwise the user will be redirected.
	*/
	function signup_form()
	{

		//Check the session cookie for if the user has already authenticated.
		if( $this->check_cookie_login() )
		{
			//The user has already authenticated, send them to their profile home.
			redirect('user_profile/home', 'location');
		}
		else
		{
			//Collect post data.
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//$passwordConfirm = $this->input->post('passwordConfirm');
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
			

			/*
				First try to insert the user, if success, get their id and redirect.
				If that fails because there is already a user with $email as their $email,
				then try to authenticate with $email and $password, if that fails, then redirect
				them to a failed login page.
			*/
			//if($passwordConfirm == $password){
				if( $this->User->insert_user($username, $password, $email, $first_name, $last_name) )
				{
					//Add email and password to the cookie.
					$user_id = $this->User->get_id( $email );
					$this->add_cookie_data( $email, $user_id );
					//$this->authenticate($email, $password);

					redirect('user_profile/home', 'location');
				}	
				else if( $this->authenticate($email, $password) ) 
				{
					redirect('user_profile/home', 'location');
				}
				else
				{	
					redirect('account/signup/failure', 'location');
				}
			//}else{
				//redirect('account/signup/failure', 'location');
			//}
				
			
		}
	}

	function user_exists(){
		$email = $this->input->post('email');

		if($this->User->user_exists($email)){
			return true;
		}else{
			//return false;
			return $this->output->set_status_header('400');
		}
	}
}

?>
	
