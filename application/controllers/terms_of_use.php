<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Terms_of_use extends CI_Controller {

	public function view($page = 'terms_of_use'){

	    
	    $data['title'] = ucfirst($page); // Capitalize the first letter

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
		
	}
}

/* End of file terms_of_use.php */
/* Location: ./application/controllers/terms_of_use.php */
