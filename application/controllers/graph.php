<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Graph extends Account
{
	function __construct()
	{	
		$this->load->model('expenses');
		$this->load->model('user');
	}

	function get_graph()
	{
		//echo json_encode(new Object());
		
		$myJSON = json_encode( array( 'type'=>'test')  );
		echo $myJSON;
	}

	function get_available_user_graphs()
	{
		$availableGraphs = $this->User->get_available_graphs( $this->user_id )

		$JSON = json_encode();
	}

}

?>
