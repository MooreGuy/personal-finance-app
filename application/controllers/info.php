<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Load parent controller
*/
include_once( APPPATH . 'core/account.php' );


class Info extends Account
{

	function about_us()
	{

	    
	    $data['title'] = 'About Us';

		//Get the user's name from the parent class.
		$data['user_name'] = $this->user_name;
		$data['loginStatus'] = $this->checkLoginStatus();

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/about_us');
	    $this->load->view('templates/footer');
		
	}


	function privacy_policy()
	{
		$data['title'] = 'Privacy Policy';

		//Get the user's name from the parent class.
		$data['user_name'] = $this->user_name;
		$data['loginStatus'] = $this->checkLoginStatus();

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/privacy_policy');
	    $this->load->view('templates/footer');		
	}

	function contact_us()
	{
		
	    $data['title'] = 'Contact Us';
		$data['user_name'] = $this->user_name;
		$data['loginStatus'] = $this->checkLoginStatus();

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/about_us');
	    $this->load->view('templates/footer');
	}

	function terms_of_use()
	{
		$data['title'] = 'Terms Of Use';
		$data['user_name'] = $this->user_name;
		$data['loginStatus'] = $this->checkLoginStatus();

		$this->load->view('templates/header', $data);
		$this->load->view('pages/terms_of_use');
		$this->load->view('templates/footer');
	}

}

/* End of file info.php */
/* Location: ./application/controllers/info.php */
?>
