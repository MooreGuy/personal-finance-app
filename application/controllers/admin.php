<?php

class Admin extends CI_Controller
{

	/*
		Overview of all the alerts on the site for the admin to view in one table.
	*/
	public function overview( $display = 'overview' )
	{	
		//Set the title for the header.
		$data['title'] = 'Admin Dashboard Overview';	

		//Load the models required to display the data. So just alerts.
		$this->load->model( 'alertsmodel' );

		//Retrieve data from the database.
		$data['alerts'] = $this->alertsmodel->getLastAlerts( 1 );	
		
		//load the pages
		$this->load->view( 'templates/header', $data );

		$this->load->view( 'pages/admin', $data );

		$this->load->view( 'templates/footer', $data );
	}
}
