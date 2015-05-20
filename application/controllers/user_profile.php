<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Load parent controller
*/
include_once( APPPATH . 'core/account.php' );


class User_profile extends Account {

	/*
		Load the homepage for the user.
	*/

	function __construct()
	{
		parent::__construct();

		$this->load->model('expenses');
		$this->load->model('User');
		
		$this->load->helper('url');
		
		$this->load->library('session');
	}


	/*
		Displays the homepage for the user.
	*/
	function home($page = 'user_profile'){
		
		//Require that the user be logged in before serving any pages.
		$this->requireLogin();
	    
	    $data['title'] = ucfirst($page); // Capitalize the first letter
		$data['loginStatus'] = $this->checkLoginStatus();

		//Get the user's name from the parent class.
		$data['user_name'] = $this->user_name;


		$data['user_data'] = $this->User->get_user_profile_data( $this->user_id );
		$data['user_type'] = $this->User->get_user_type($this->user_id);


		$data['expenses'] = $this->expenses->get_current_expenses_grouped_for_user( $this->user_id );

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/'.$page, $data);
	    $this->load->view('templates/footer', $data);

		$this->load->model('Graph');
		$this->Graph->expenseTypeAverages($this->user_id);
	}

	function add_category_form()
	{
		$title = $this->input->post('title');
		$amount = $this->input->post('amount');
		$occurance = $this->input->post('occurance');

		$comment = "something";

		$country = "something";
		$state = "something";
		$county = "something";
		$city = "something";

		$this->expenses->insert_expense( $this->user_id, $amount, $occurance,
		   	$title, $comment, $country, $state, $county, $city);

		redirect('user_profile/home', 'location');
	}

	

	//function create_category()
	//function remove_category()

	function checkPasswordForProfileUpdate(){
		$userCurrentPassword = $this->input->post('userCurrentPassword');
		$userId = $this->user_id;
		
		if($this->User->checkPassword($userCurrentPassword, $userId)){
			return true;
		}else{
			$this->output->set_status_header('400');
		}
	
	}
	
	function updateProfileInfo(){
		$userId = $this->user_id;
		$userFirstName = $this->input->post('userFirstName');
		$userLastName = $this->input->post('userLastName');
		$userEmail = $this->input->post('userEmail');
		$currentUserPassword = $this->input->post('currentUserPassword');

		$data = array(
			'first_name' => $userFirstName,
			'last_name' =>  $userLastName,
			'email' => $userEmail,
			'password' => $currentUserPassword
		);

		if($this->User->updateProfileInfo($data, $userId)){
			return true;
		}else{
			return $this->output->set_status_header($this->db->_error_message());
		}
	}
}

/* End of file user_profile.php */
/* Location: ./application/controllers/user_profile.php */
