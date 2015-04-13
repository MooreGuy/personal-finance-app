<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');


/*
	Load parent controller
*/
include_once( APPPATH . 'core/account.php' );


class Community_board_user_guides extends Account
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

		//Get the user's name from the parent class.
		$data['user_name'] = $this->user_name;

		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/community_board_user_guides', $data );
		$this->load->view( 'templates/footer', $data );
	}


}
?>
