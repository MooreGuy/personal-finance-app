<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Load parent controller
*/
include_once( APPPATH . 'core/account.php' );


class Community_board_forums extends Account
{
	function __construct()
	{
		parent::__construct();
	
		$this->load->library('session');
	}


	public function forums( $tags = 'none' )
	{
		$data['title'] = 'Forums';
		$data['loginStatus'] = $this->checkLoginStatus();

		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/community_board_forums', $data );
		$this->load->view( 'templates/footer', $data );
	}

}

?>
