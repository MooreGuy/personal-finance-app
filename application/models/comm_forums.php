<?php 
	/**
	* 
	*/
	class Comm_forums extends CI_Model
	{
		const POSTTABLE = 'post';
		
		var $id = '';
		var $timestamp = '';
		var $title = '';
		var $content = '';
		var $userId = '';
		var $upvotes_total = '';
		var $parent = ''
		var $category = '';

		function addNewPost($username, $category, $title, $content){
			$this->username = $username;
			$this->category = $category;
			$this->title = $title;
			$this->content = $content;

			$this->db->insert(self::POSTTABLE, $this);
		}
	}
?>