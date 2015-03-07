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

	function get_current_by_id( $id )
	{
		$sql = 'select date_added, cost, recurring, type, comment, country, state, city
					from expenses
					where user_id = ?
					and current = true';

		$this->db->query($sql, array($id));
	}
	
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
}
?>
