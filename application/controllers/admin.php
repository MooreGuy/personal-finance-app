<?php

class Admin extends CI_Controller
{

	/*
		Dashboard page to show admin data and options. The display
		parameter decides how and what gets displayed in the admin
		panel. Overview will show a small ammount of everything, where
		selecting a specific data type will show only that type.
	*/
	public function dashboard( $display = 'overview' )
	{	
		//Load the model.
		switch( $display )
		{
			case 'overview':
				$this->load->model( 'alertsmodel' );
				$this->load->model( 'notificationsmodel' );
				$this->load->model( 'forummodel' );
				break;
			case 'alerts':	
				$this->load->model( 'alertsmodel' );
				break;
			case 'notifications':
				$this->load->model( 'notificationsmodel' );
				break;
			case 'forum:
				$this->load->model( 'forummodel' );
				break;
			default:
				show_404();
				break;
		}

		$data['alerts'] = $this->alertsmodel->getLastAlerts( 3 );	
		

		//Set the title for the header.
		$data['title'] = 'Admin Dashboard';	

		//load the pages
		$this->load->view( 'templates/header', $data );

		$this->load->view( 'pages/admin', $data );

		$this->load->view( 'templates/footer', $data );
	}
}

