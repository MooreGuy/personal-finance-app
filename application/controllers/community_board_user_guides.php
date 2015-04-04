<?php

/*
 *
 */
class Community_board_user_guides extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	
		$this->load->library('session');
	}


	public function guides( $tags = 'none' )
	{
		$data['title'] = 'Forums';
		$data['loginStatus'] = $this->checkLoginStatus();

		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/community_board_user_guides', $data );
		$this->load->view( 'templates/footer', $data );
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
