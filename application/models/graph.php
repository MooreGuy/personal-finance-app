<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graph extends CI_Model {
	function __construct()
	{
		parent::__construct();

		$this->load->model('User');
		$this->load->model('Expenses');
	}

	/**
	 * Get all expense types for a user, then find the average for eaach expense
	 * type in the database. Then return both the user's average and j
	 *
	 * @param $userID is the ID for the user that the graph is being crafted for.
	 * @param limit is the maximum number of graphs that will be retrieved.
	 */
	function expenseTypeTotals($userID, $limit) {

		//Get all of the user's expense types.
		$expenseTypes = $this->Expenses->get_user_expense_types($userID, $limit);

		//Get the user base average for each of the expenses types.
		$graphData = array();
		foreach($expenseTypes as $type) {
			//Get average for expense type.
			$expenseTypeAverage = $this->Expenses->get_average_by_type_id($type->id);
			$graphData[$type->type]['average'] = round($expenseTypeAverage,2);
			$graphData[$type->type]['users'] = $this->Expenses->userExpenseTypeTotal(
				$userID, $type->id);
		}

		//Return the graph data to be made into graphs on the client side.
		return $graphData;
	}
}
