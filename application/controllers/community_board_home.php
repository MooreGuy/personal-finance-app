<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Community_board_home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
		$this->load->library('session');
	}
	
	public function home($page = 'community_board_home'){

	    

	    $data['title'] = ucfirst($page); // Capitalize the first letter
		$data['loginStatus'] = $this->checkLoginStatus();

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
	}


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
}

/* End of file community_board_home.php */
/* Location: ./application/controllers/community_board_home.php */
