<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_profile extends CI_Controller {

	/*
		Load the homepage for the user.
	*/

	function __construct()
	{
		parent::__construct();

		$this->load->model('expenses');
	}


	function home($page = 'user_profile'){
	    
	    $data['title'] = ucfirst($page); // Capitalize the first letter

		$data['expenses'] = $this->Expenses->get_all_current();

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);
		
	}

	//function create_category()
	//function remove_category()
	
}

/* End of file user_profile.php */
/* Location: ./application/controllers/user_profile.php */
