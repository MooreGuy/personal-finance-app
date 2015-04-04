<?php

/*
 *
 */
class Community_board_forums extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	
		$this->load->library('session');
	}


	public function forums( $tags = 'none' )
	{
		$data['title'] = 'Forums';
		$data['loginStatus'] = $this->checkLoginStatus();

		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/community_board_forums', $data );
		$this->load->view( 'templates/footer', $data );
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
