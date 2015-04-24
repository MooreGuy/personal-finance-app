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
			$this->load->helper('date');
			//Format the time with the datestring.
			$datestring = "%Y-%m-%d %h:%i:%s";
			//Get the current time to use for the mdate function. Although it defaults to the current time.
			$time = time();
			
			$data = array(
				'timestamp' => mdate($datestring, $time),
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

		function getAllPostsUserNames($category){
			$this->db->select('username');
			$this->db->from('users');
			$this->db->join('posts', 'posts.userId = users.id');
			$this->db->where('parentId', 0);
			$this->db->where('category', $category);
			$query = $this->db->get();
			$user_names = $query->result();
			return $user_names;
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

		function getAllCommentsUserNames($category){
			$this->db->distinct();
			$this->db->select('users.username, users.id');
			$this->db->from('users');
			$this->db->join('posts', 'posts.userId = users.id');
			$this->db->where('parentId >', 0);
			$this->db->where('category', $category);
			$query = $this->db->get();
			$user_names = $query->result();
			return $user_names;
		}
	}
?>