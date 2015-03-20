<?php
	
class Expense_types extends CI_Model
{
	$id = '';
	$type = '';
	$comment = '';

	function insert_type( $type )
	{
		$sql = 'insert into expense_types values( type, comment )
	}
	
	function get_type( $id )
	{
		$sql = 'select type, comment from expense_types
					where id = ?';
	}
}

?>
