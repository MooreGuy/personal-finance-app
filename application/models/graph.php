<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graph extends CI_Model {

	/**
	 * Get all expense types for a user, then find the average for eaach expense
	 * type in the database. Then return both the user's average and j
	 */
	function expenseTypeAverages($userID) {
		$this->load->model('User');
		$this->load->model('Expenses');

		//Get all of the user's expense types.
		$expenseTypes = $this->Expenses->get_user_expense_types($userID);

		//Get the user base average for each of the expenses types.
		$graphData = array();
		foreach($expenseTypes as $type) {
			//Get average for expense type.
			$expenseTypeAverage = $this->Expenses->get_average_by_type_id($type->id);
			$expenseTypeAverage = round($expenseTypeAverage,2);
			$graphData[$type->type] = $expenseTypeAverage;
		}

		//Return the graph data to be made into graphs on the client side.
		return json_encode($graphData);
	}
}
