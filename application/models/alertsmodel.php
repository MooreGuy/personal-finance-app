<?php

class AlertsModel extends CI_Model
{

	
	var $title = '';
	var $content = '';
	var $date = '';
	var $author = '';

	function __construct()
	{
		//This calls the constructor of the Model.
		parent::__construct();
	}

	/*
		Get the last two alerts.
	*/
	function getLastAlerts( $number )
	{
		//Query and if it has no rows then return nothing.
		$query = $this->db->get('alerts', $number);
		if( $query && $query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
			return;
		}
	}

	/*
		Insert one alert into the database
	*/
	function insertAlert()
	{
		$this->title = $this->input->post('title');
		$this->content = $this->input->post('content');
		$this->author = $this->input->post('author');
		$this->date = time(); 
	
		$this->db->insert( 'alerts', $this );
	}

}

?>
