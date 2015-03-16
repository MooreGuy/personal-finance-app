<?php
	class Locations extends CI_Model
	{
		$country = '';
		$state = '';
		$city = '';
		
		/*
			Insert a new location into the database.
		*/
		function insert_location( $country, $state, $city )
		{
			$sql = 'insert into locations values( ?, ?, ? )';

			$this->db->query( $sql, array() );
		}
		
		/*
			Get a location and return it based on $id argument.
		*/
		function get_location_by_id( $id )
		{
			$sql = 'select from locations country, city, state
						where id = ?';
			$this->db->query( $sql, array() );
		}
	
		/*
			Get a location and return it based on the Country, State, and City.
		*/
		function get_location_id( $country, $state, $city )
		{
			$sql = 'select from locations id
						where country = ?
						and state = ?
						and city = ?';

			$query = $this->db->query( $sql, array() );
		}
		
	}
?>
