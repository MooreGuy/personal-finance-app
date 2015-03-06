<?php

class Sessions extends CI_Model
{

	var $session_id = '';
	var $ip_address = '';
	var $user_agent = '';
	var $last_activity = '';
	var $user_data = '';
	var $authenticated = '';
	
	function __construct()
	{
		//Call the Model constructor.
		parent::__construct();
	}

	function insert_session( $session_id, $ip_address, $user_agent, $last_activity, $user_data  )
	{
		$this->session_id = $session_id;	
		$this->ip_address = $ip_address;
		$this->user_agent = $user_agent;
		$this->last_activity = $last_activity;
		$this->user_data = $user_data;
	}

}

?>
