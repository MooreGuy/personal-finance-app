<?php

class Account extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('login');	
		$this->load->model('User');
	}

	function login_form()
	{
		/*if( $this->User->insert() )
		{
			echo 'success!';
		}
		
		else
		{
			echo 'failure';
		}
		*/
		echo 'hello';
	}		
}

?>
