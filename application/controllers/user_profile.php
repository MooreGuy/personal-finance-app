<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_profile extends CI_Controller {

	public function home($page = 'user_profile'){

	    
	    $data['title'] = ucfirst($page); // Capitalize the first letter

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
		
	}
}

/* End of file user_profile.php */
/* Location: ./application/controllers/user_profile.php */
