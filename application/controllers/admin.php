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


		//Set the title for the header.
		$data['title'] = ucfirst($page);	

		//load the pages
		$this->load->view( 'templates/header', $data );

		$this->load->view( 'pages/admin', $data );

		$this->load->view( 'templates/footer', $data );
	}
}

