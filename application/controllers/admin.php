<?php

class Admin extends CI_Controller
{
	const ADMIN_COLUMNS =  3;
	const COLUMN_1 = 'Alerts';
	const COLUMN_2 = 'Messages';
	const COLUMN_3 =  'Profiles';

	public function dashboard( $page = 'overview' )
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

		$previewData['title'] = 'E tu, Brute?';
		$previewData['author'] = 'Julius Caesar';
		$previewData['post'] = $ipsum;

		//load the pages
		$this->load->view( 'templates/header', $data );

		$this->load->view( 'pages/admin/admin', $data );
		/*
		for( $i = 0; $i < self::ADMIN_COLUMNS; $i++ )
		{
			$this->load->view( 'templates/posts/preview.php', $previewData );
		}
		*/

		$this->load->view( 'templates/footer', $data );
	}
}

