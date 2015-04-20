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

		function editPost($postId, $title, $content){
			$data = array(
				'id' => $postId,
				'title' => $title,
				'content' => $content
			);

			$this->db->where('id', $postId);
			$this->db->update('posts', $data);
		}

		function getAllUserPosts($category){
			switch($category){
				case 'transport':
					$this->db->where('category', $category);
					$query =  $this->db->get('posts');
					$posts = $query->result();
					return $posts;
					break;
				case 'food':
					$this->db->where('category', $category);
					$query =  $this->db->get('posts');
					$posts = $query->result();
					return $posts;
					break;
				case 'communications':
					$this->db->where('category', $category);
					$query =  $this->db->get('posts');
					$posts = $query->result();
					return $posts;
					break;
				case 'entertainment':
					$this->db->where('category', $category);
					$query =  $this->db->get('posts');
					$posts = $query->result();
					return $posts;
					break;
				case 'housing':
					$this->db->where('category', $category);
					$query =  $this->db->get('posts');
					$posts = $query->result();
					return $posts;
					break;
				case 'utilities':
					$this->db->where('category', $category);
					$query =  $this->db->get('posts');
					$posts = $query->result();
					return $posts;
					break;
				case 'travel':
					$this->db->where('category', $category);
					$query =  $this->db->get('posts');
					$posts = $query->result();
					return $posts;
					break;
				case 'general':
					$this->db->where('category', $category);
					$query =  $this->db->get('posts');
					$posts = $query->result();
					return $posts;
					break;
			}
		}
	}
?>