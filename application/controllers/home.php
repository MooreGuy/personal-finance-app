<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function welcome($page = 'home'){

	    
	    $data['title'] = ucfirst($page); // Capitalize the first letter

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
		
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
