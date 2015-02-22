<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Announcements extends CI_Controller {

	public function home($page = 'announcements'){

	    
	    $data['title'] = ucfirst($page); // Capitalize the first letter

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
		
	}
}

/* End of file announcements.php */
/* Location: ./application/controllers/announcements.php */
