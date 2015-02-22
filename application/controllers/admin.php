<?php

class Admin extends CI_Controller
{

	public function dashboard( $page = 'admin' )
	{
	
		//Load the model.
		$this->load->model( 'alertsmodel' );

		/*
			Keeping database calls out of this until we decide on how
			we want to store database connection info.

			//call the model's function to get alerts.
			$data['alerts'] = $this->alertsmodel->getLastTwoAlerts();	
		*/

		$ipsum = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum';

		$data['title'] = ucfirst($page);	
		$data['numAlerts'] = '3';

		//load the pages
		$this->load->view( 'templates/header', $data );

		$this->load->view( 'pages/admin', $data );

		$this->load->view( 'templates/footer', $data );
	}
}

