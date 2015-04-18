<?php 
	/**
	* 
	*/
	class Comm_forums extends CI_Model
	{
		
		var $id = '';
		var $timestamp = '';
		var $title = '';
		var $content = '';
		var $userId = '';
		var $upvotes_total = '';
		var $parentId = '';
		var $category = '';

		function addNewPost($userId, $category, $title, $content){
			
			/*$this->load->helper('date');
			//Format the time with the datestring.
			$datestring = "%Y-%m-%d %h:%i:%s";
			//Get the current time to use for the mdate function. Although it defaults to the current time.
			$time = time();
			$timestamp = mdate($datestring, $time);*/

			$data = array(
				'title' => $title,
				'content' => $content,
				'userId' => $userId,
				'upvotes_total' => 0,
				'parentId' => 0,
				'category' => $category
			);

			$this->db->insert('posts', $data); 
		}
	}
?>