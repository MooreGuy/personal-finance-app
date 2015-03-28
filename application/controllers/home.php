<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function welcome($page = 'home'){

	    
	    $data['title'] = ucfirst($page); // Capitalize the first letter
		$data['loginStatus'] = $this->checkLoginStatus();

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
		
	}

	/*
		Check if the user has already been authenticated by looking at the session data for
		an email. The existence of an email means the user should have already been
		authenticated.

		@return boolean True if the user has already been authenticated, false if otherwise.
	*/
	function checkLoginStatus()
	{
		$this->load->library('session');
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

/* End of file home.php */
/* Location: ./application/controllers/home.php */
