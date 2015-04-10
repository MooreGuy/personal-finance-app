<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Load parent controller
*/
include_once( APPPATH . 'core/account.php' );


class Info extends Account {

	public function about_us(){

	    
	    $data['title'] = 'About Us';

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/about_us', $data);
	    $this->load->view('templates/footer', $data);
		
	}


	public function privacy_policy(){

		data['title'] = 'Privacy Policy';

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/privacy_policy', $data);
	    $this->load->view('templates/footer', $data);
		
	}
}

/* End of file info.php */
/* Location: ./application/controllers/info.php */
?>
