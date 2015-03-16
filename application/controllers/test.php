<?php

class Test extends CI_Controller
{
	function addExpense()
	{
		$this->load->view('templates/header');
		$this->load->view('test/userProfileTestForm');
		$this->load->view('templates/footer');	
	}
	
	function add_expense_form()
	{
		$type = $this->input->post('type');	
		$cost = $this->input->post('cost');	
		$interval = $this->input->post('interval');	
		$type = $this->input->post('type');	
		$comment = $this->input->post('comment');	
		$location = $this->input->post('location');
	}
}

?>
