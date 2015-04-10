<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Load parent controller
*/
include_once( APPPATH . 'core/account.php' );


class Community_board_home extends Account {

	function __construct()
	{
		parent::__construct();
	
		$this->load->library('session');
	}
	
	public function home($page = 'community_board_home'){

	    

	    $data['title'] = ucfirst($page); // Capitalize the first letter
		$data['loginStatus'] = $this->checkLoginStatus();

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
	}


}

/* End of file community_board_home.php */
/* Location: ./application/controllers/community_board_home.php */
