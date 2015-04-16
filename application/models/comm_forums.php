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
			$data = array(
				'date_added' => "",
				'title' => $title,
				'content' => $content,
				'userId' => $userId,
				'upvotes_total' => "",
				'parentId' => "",
				'category' => $category
			);
			//$this->userId = $userId;
			//$this->category = $category;
			//$this->title = $title;
			//$this->content = $content;

			$this->db->insert('posts', $data);
		}
	}
?>