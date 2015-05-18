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
		$this->Graph->getUserExpenseTypeGraphs($this->user_id);
	}

	/*function add_category_form()
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
	}*/

	

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
		$newUserPassword = $this->input->post('newUserPassword');
		$currentUserPassword = $this->input->post('currentUserPassword');

		$data = array(
			'first_name' => $userFirstName,
			'last_name' =>  $userLastName,
			'email' => $userEmail,
			'password' => $newUserPassword
		);



		if($this->User->updateProfileInfo($data, $userId, $currentUserPassword)){
			return true;
		}else{
			return $this->output->set_status_header('400');
		}
	}

	function addCatAndExpences(){

		$data = $this->input->post('data');

		$userId = $this->user_id;
		$type = $data[0]['type'];
		$totalCatCost = 0;
		$title = '';
		$amount = '';
		$interv = '';



		foreach ($data as $key => $value) {
			if(sizeof($data) > 1){
				$title = $value['title'];
				$amount = $value['amount'];
				$interv = $value['interv'];
			}
			

			switch($interv){
				case 'Weekly': 
					$totalCatCost += $amount * 52;
					break;
				case 'Daily':
					$totalCatCost += $amount * 365;
					break;
				case 'Bi-weekly':
					$totalCatCost += $amount * 26;
					break;
				case 'Monthly':
					$totalCatCost += $amount * 12;
					break;
				case 'Yearly':
					$totalCatCost += $amount * 1;
					break;
				default:
					break;
			}

			$this->expenses->insert_expense( $userId, $amount, $interv, $title, $type);
			
		}	
		
			/*$data['title'] = ucfirst('user_profile'); // Capitalize the first letter
		$data['loginStatus'] = $this->checkLoginStatus();

		//Get the user's name from the parent class.
		$data['user_name'] = $this->user_name;


		$data['user_data'] = $this->User->get_user_profile_data( $this->user_id );

		$data['expenses'] = $this->expenses->get_current_expenses_grouped_for_user( $this->user_id );
			$this->load->view('pages/user_profile', $data);*/
		
		
	}

	function deleteCat(){
		$catId = $this->input->post('catId');

		$this->expenses->deleteCat($catId);
		$this->expenses->deleteExpenses($catId);
	}
}

/* End of file user_profile.php */
/* Location: ./application/controllers/user_profile.php */
