<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Community_board_home extends CI_Controller {

	public function home($page = 'community_board_home'){

	    

	    $data['title'] = ucfirst($page); // Capitalize the first letter

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
	}
}

/* End of file community_board_home.php */
/* Location: ./application/controllers/community_board_home.php */