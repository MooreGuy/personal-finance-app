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

		function editPost($postId, $title, $content){
			$data = array(
				'id' => $postId,
				'title' => $title,
				'content' => $content
			);

			$this->db->where('id', $postId);
			$this->db->update('posts', $data);
		}

		function addNewComment($userId, $parentId, $content, $category){
			$data = array(
				'title' => NULL,
				'content' => $content,
				'userId' => $userId,
				'upvotes_total' => 0,
				'parentId' => $parentId,
				'category' => $category
			);

			$this->db->insert('posts', $data); 
		}

		function getAllUserPosts($category){
			switch($category){
				case 'transport':
					$query = $this->db->get_where('posts', array('category' => $category, 'parentId' => 0));
					$posts = $query->result();
					return $posts;
					break;
				case 'food':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId' => 0));
					$posts = $query->result();
					return $posts;
					break;
				case 'communications':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId' => 0));
					$posts = $query->result();
					return $posts;
					break;
				case 'entertainment':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId' => 0));
					$posts = $query->result();
					return $posts;
					break;
				case 'housing':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId' => 0));
					$posts = $query->result();
					return $posts;
					break;
				case 'utilities':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId' => 0));
					$posts = $query->result();
					return $posts;
					break;
				case 'travel':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId' => 0));
					$posts = $query->result();
					return $posts;
					break;
				case 'general':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId' => 0));
					$posts = $query->result();
					return $posts;
					break;
			}
		}

		function getAllUserComments($category){
			switch($category){
				case 'transport':
					$query = $this->db->get_where('posts', array('category' => $category, 'parentId >' => 0));
					$comments = $query->result();
					return $comments;
					break;
				case 'food':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId >' => 0));
					$comments = $query->result();
					return $comments;
					break;
				case 'communications':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId >' => 0));
					$comments = $query->result();
					return $comments;
					break;
				case 'entertainment':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId >' => 0));
					$comments = $query->result();
					return $comments;
					break;
				case 'housing':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId >' => 0));
					$comments = $query->result();
					return $comments;
					break;
				case 'utilities':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId >' => 0));
					$comments = $query->result();
					return $comments;
					break;
				case 'travel':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId >' => 0));
					$comments = $query->result();
					return $comments;
					break;
				case 'general':
					$query =  $this->db->get_where('posts', array('category' => $category, 'parentId >' => 0));
					$comments = $query->result();
					return $comments;
					break;
			}
		}
	}
?>