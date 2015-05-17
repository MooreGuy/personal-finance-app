<?php

class Expenses extends CI_Model
{
	var $id = '';
	var $user_id = '';
	var $date_added = '';
	var $current = '';
	var $cost = '';
	var $recurring = '';
	var $type = '';
	var $comment = '';
	var $country = '';
	var $state = '';
	var $city = '';

	/*
		Returns all of the expenses a particular user has that are current.

		@param integer $id the particular user that is related to the expenses.
	
		@return 
	*/
	function get_current_by_id( $id )
	{
		$sql = 'select date_added, cost, recurring, type, comment, country, state, city
					from expenses
					where user_id = ?
					and current = true';

		$this->db->query($sql, array($id));
	}
	
	/*
		Returns all expenses that are current.
	*/
	function get_all_current()	
	{
		$sql = 'select cost, recurring, type, comment, country, state, city
					from expenses
					where current = true'; 

		$query = $this->db->query($sql);
		
		return $query->result();

		
	}

	/**
	 *Insert an expense, its type and location into the databse if they do
	 *not already exist.
	 */
	function insert_expense( $user_id, $cost, $interv, $title, $type )
	{
		$type_id = '';
		//If the expense type doesn't exist, then create it.
		if( ($type_id = $this->get_expense_type_id($type)) == NULL )
		{
			$type_id = $this->create_expense_type($type);
		}

		//TODO: Finish location get or create methods

		$sql = 'insert into expenses values( NULL, ?, ?, ?, ?, ?, ?, ?, ? )';

		//Set the date 
		$this->load->helper('date');
		$timestamp = now();
	
		$query = $this->db->query( $sql, array($timestamp, 1, $cost,
		   	$interv, $type_id, 0, $user_id, $title) );	
	}

	/**
	 * Create an expense type and return its id.
	 */
	function create_expense_type( $type )
	{
		$sql = 'insert into expense_types values( NULL, ?, ?)';

		$this->db->query( $sql, array($type, 0) );
		

		return $this->db->insert_id();
	}

	/**
	 * Search for the expense by the title parameter, and return the id of expense
	 * if it is found. If the expense wasn't found, then return null.
	 *
	 * @param string type is the type of the expense.
	 */
	function get_expense_type_id( $type )
	{
		$sql = 'SELECT id FROM expense_types WHERE type = ?;';

		$query = $this->db->query( $sql, array($type) );

		//$id = 'type: ' . $type . '<pre>' . var_dump($query->result_array()) . '</pre>';
		//show_error($id);
		if( $query == NUll || $query->num_rows() < 1)
		{
			return NULL;
		}
		else
		{
			//I would prefer this. return $query->result_array()[0]['id'];
			$result = $query->result();
			$result = $result[0];
			return $result->id;
		}
	}
	

	/*
		Get all the types and their ids from the expense_types table.
		
		@return an array of all the types and their ids
	*/
	function get_all_types()
	{
		$sql = 'select id, type from expense_types;';
		
		$types = $this->db->query($sql);

		return $types->result();
	}
	
	/*
		Get all the expense types for a particular user.
		
		@return an array of all the expense types that a particular user has.
	*/
	function get_user_expense_types( $user_id )
	{
		$sql = 'select expense_types.type, expense_types.id from expenses
					inner join expense_types
					on expenses.type_id = expense_types.id
					where expenses.user_id = ?
					group by expense_types.type';

		$query = $this->db->query( $sql, array($user_id) );
		
		return $query->result();
	}

	/*
		Return all of the current expenses in an associative array grouped
	   	by their type in arrays.

		@return an associative array with the key of the expense type,
	   	holding an array of the expenses for that type.
	*/
	function get_current_expenses_grouped_for_user( $user_id )
	{
		//Query to get the expenses from the database for a specific type.
		$sql = 'select expense_types.type, expense_types.total_cost, expenses.cost,
				expenses.interv, expenses.title
					from expenses
					left join expense_types
					on expense_types.id = expenses.type_id
					where user_id = ?
					and type_id = ?';

		//Get an array of all the types and their ids.
		$expense_types = $this->get_user_expense_types( $user_id );

		//The array that all the expenses will be thrown into.
		$grouped_expenses = Null;
		foreach( $expense_types as $type )
		{
			$query = $this->db->query( $sql, array($user_id, $type->id) );

			$grouped_expenses[$type->type] = $query->result();

				
		}

		return $grouped_expenses;
	}

	function addCat($data){
		$expenseTypeData = array(
			'type' => $data[0]['category']
		);

		$totalCatCost = 0;

		foreach ($data as $key => $value) {
			if($value == 'cost'){
				switch($data[$key]['interv']){
					case 'Weekly': 
						$totalCatCost += $value * 52;
						break;
					case 'Daily':
						$totalCatCost += $value * 365;
						break;
					case 'Bi-weekly':
						$totalCatCost += $value * 26;
						break;
					case 'Monthly':
						$totalCatCost += $value * 12;
						break;
					case 'Yearly':
						$totalCatCost += $value * 1;
						break;
				}
				
			}
		}

			$sql = 'insert into expense_types values(?,?,?)';
			$query = $this->db->query($sql, array($expenseTypeData, $totalCatCost));
		
	}

	function addCatAndExpences($data, $userId){
		
		}
	}

?>
