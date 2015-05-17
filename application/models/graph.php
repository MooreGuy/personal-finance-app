<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graph extends CI_Model {
	function getUserExpenseTypeGraphs($userID) {
		$this->load->model('User');
		$this->load->model('Expenses');

		//Get all of the user's expense types.
		$expenseTypes = $this->Expenses->get_user_expense_types($userID);

		//Get the user base average for each of the expenses types.
		var_dump($expenseTypes);
		foreach($expenseTypes as $type) {
			echo '</br>';
			var_dump($type);
			//Get average for expense type.
			$expenseTypeAverage = $this->Expenses->get_average_by_type_id($type->id);
			$expenseTypeAverage = round($expenseTypeAverage,2);
			var_dump($expenseTypeAverage);
		}

		//Create the graphs for each expense type.
	}
}
