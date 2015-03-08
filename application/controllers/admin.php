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
}
