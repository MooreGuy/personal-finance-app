<?php 
	/**
	* 
	*/
	class Comm_forums extends CI_Model
	{
		const POSTTABLE = 'posts';
		
		var $id = '';
		var $timestamp = '';
		var $title = '';
		var $content = '';
		var $userId = '';
		var $upvotes_total = '';
		var $parent = '';
		var $category = '';

		function addNewPost($userId, $category, $title, $content){
			
			$this->timestamp = 0;
			$this->title = $title;
			$this->content = $content;
			$this->userId = $userId;
			$this->upvotes_total = 0;
			$this->parentId = 0;
			$this->category = $category;
	
			$this->db->insert(self::POSTTABLE, $this);
		}
	}
?>