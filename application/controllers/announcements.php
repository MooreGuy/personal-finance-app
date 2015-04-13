<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Import parent class.
*/
include_once( APPPATH . 'core/account.php' );


class Announcements extends Account {

	public function home($page = 'announcements'){

	    
	    $data['title'] = ucfirst($page); // Capitalize the first letter

		$data['loginStatus'] = $this->checkLoginStatus();

		//Get the user's name from the parent class.
		$data['user_name'] = $this->user_name;

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
		
	}
}

/* End of file announcements.php */
/* Location: ./application/controllers/announcements.php */
