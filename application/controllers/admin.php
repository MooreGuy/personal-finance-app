<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Load parent controller
*/
include_once( APPPATH . 'core/account.php' );


class Admin extends Account
{
	function __construct()
	{
		parent::__construct();
	
		$this->load->library('session');
	}

	/*
		Overview of all the alerts on the site for the admin to view in one table.
	*/
	public function overview( $display = 'overview' )
	{			
		//Require that the user be logged in before serving any pages.
		$this->requireLogin();

		$data['loginStatus'] = $this->checkLoginStatus();

		//Get the user's name from the parent class.
		$data['user_name'] = $this->user_name;

		//Set the title for the header.
		$data['title'] = 'Admin Dashboard Overview';	
		//Load the header
		$this->load->view( 'templates/header', $data );


		//Load the models required to display the data. So just alerts.
		$this->load->model( 'alertsmodel' );

		/*
			Retrieve data from database, if there is something to
			display, then load the admin page, otherwise display
			a warning.
		*/
		$data['alerts'] = $this->alertsmodel->getLastAlerts( 20 );	
		if( $data['alerts'] != NULL )
		{
			$this->load->view( 'pages/admin', $data );
		}
		else
		{
			$this->load->view( 'pages/adminNoAlerts', $data );
		}
		
		//Finish the page with the footer.	
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
