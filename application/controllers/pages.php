<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */