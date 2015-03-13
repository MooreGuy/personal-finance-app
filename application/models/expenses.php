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

	function insert_expense( $user_id, $cost, $recurring, $type, $comment,
									$country, $state, $city )
	{
		$sql = 'insert into expenses values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )';

		//Set the date 
		$this->load->helper('date');
		$timestamp = now();
		
		$query = $this->db->query( $sql, array( $user_id, $timestamp, $cost, $recurring, $type,
								$comment, $country, $state, $city ));	

		return $query-result();
	}

	/*
		Get all the types and their ids from the expense_types table.
		
		@return an array of all the types and their ids
	*/
	function get_types()
	{
		$sql = 'select id, type from expense_types;';
		
		$types = $this->db->query($sql);

		return $types->result_array();
	}

	/*
		Return all of the current expenses in an associative array grouped by their type in arrays.

		@return an associative array with the key of the expense type, holding an array of the expenses for that type.
	*/
	function get_current_expenses_grouped_for_user( $user_id )
	{
		//Query to get the expenses from the database for a specific type.
		$sql = select cost, interval, comment, location
					from expenses
					where user_id = ?
					and type_id = ?;';

		//Get an array of all the types and their ids.
		$expense_types = $this->get_types();

		//The array that all the expenses will be thrown into.
		$grouped_expenses;
		foreach( $expense_types as $type )
		{
			$query = $this->db->query( $sql, array( $user_id, $type->id );
			$grouped_expenses[$type->id] = $query->result_array();
		}

		return $expense_types;
	}
}
?>
