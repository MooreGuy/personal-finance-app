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

		function getAllUserPosts($category, $orderBy){
			switch($category){
				case 'transport':
					$this->db->select();
					$this->db->from('posts');
					switch ($orderBy) {
						case 'top': $this->db->order_by('upvotes_total', "desc"); 
							break;
						case 'new': $this->db->order_by('timestamp', "desc");
							break;
						default:
						break;
					}
					$this->db->where('category', $category);
					$this->db->where('parentId', 0);
					$query = $this->db->get();
					$posts = $query->result();
					return $posts;
					break;
				case 'food':
					$this->db->select();
					$this->db->from('posts');
					switch ($orderBy) {
						case 'top': $this->db->order_by('upvotes_total', "desc"); 
							break;
						case 'new': $this->db->order_by('timestamp', "desc");
							break;
						default:
						break;
					}
					$this->db->where('category', $category);
					$this->db->where('parentId', 0);
					$query = $this->db->get();
					$posts = $query->result();
					return $posts;
					break;
				case 'communications':
					$this->db->select();
					$this->db->from('posts');
					switch ($orderBy) {
						case 'top': $this->db->order_by('upvotes_total', "desc"); 
							break;
						case 'new': $this->db->order_by('timestamp', "desc");
							break;
						default:
						break;
					}
					$this->db->where('category', $category);
					$this->db->where('parentId', 0);
					$query = $this->db->get();
					$posts = $query->result();
					return $posts;
					break;
				case 'entertainment':
					$this->db->select();
					$this->db->from('posts');
					switch ($orderBy) {
						case 'top': $this->db->order_by('upvotes_total', "desc"); 
							break;
						case 'new': $this->db->order_by('timestamp', "desc");
							break;
						default:
						break;
					}
					$this->db->where('category', $category);
					$this->db->where('parentId', 0);
					$query = $this->db->get();
					$posts = $query->result();
					return $posts;
					break;
				case 'housing':
					$this->db->select();
					$this->db->from('posts');
					switch ($orderBy) {
						case 'top': $this->db->order_by('upvotes_total', "desc"); 
							break;
						case 'new': $this->db->order_by('timestamp', "desc");
							break;
						default:
						break;
					}
					$this->db->where('category', $category);
					$this->db->where('parentId', 0);
					$query = $this->db->get();
					$posts = $query->result();
					return $posts;
					break;
				case 'utilities':
					$this->db->select();
					$this->db->from('posts');
					switch ($orderBy) {
						case 'top': $this->db->order_by('upvotes_total', "desc"); 
							break;
						case 'new': $this->db->order_by('timestamp', "desc");
							break;
						default:
						break;
					}
					$this->db->where('category', $category);
					$this->db->where('parentId', 0);
					$query = $this->db->get();
					$posts = $query->result();
					return $posts;
					break;
				case 'travel':
					$this->db->select();
					$this->db->from('posts');
					switch ($orderBy) {
						case 'top': $this->db->order_by('upvotes_total', "desc"); 
							break;
						case 'new': $this->db->order_by('timestamp', "desc");
							break;
						default:
						break;
					}
					$this->db->where('category', $category);
					$this->db->where('parentId', 0);
					$query = $this->db->get();
					$posts = $query->result();
					return $posts;
					break;
				case 'general':
					$this->db->select();
					$this->db->from('posts');
					switch ($orderBy) {
						case 'top': $this->db->order_by('upvotes_total', "desc"); 
							break;
						case 'new': $this->db->order_by('timestamp', "desc");
							break;
						default:
						break;
					}
					$this->db->where('category', $category);
					$this->db->where('parentId', 0);
					$query = $this->db->get();
					$posts = $query->result();
					return $posts;
					break;
			}
		}

		function getAllPostsUserNames($category){
			$this->db->distinct();
			$this->db->select('users.username, users.id');
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

		function deletePosts($postId){
			$this->db->delete('posts', array('id' => $postId));
		}

		function updatePostVoteCount($postId, $voteCount){
			$data = array(
				'upvotes_total' => $voteCount
			);
			//$this->db->where('postId', $postId);
			$this->db->update('posts', $data, array('id' => $postId));
		}

		function getAllUserVotes($category){
			$this->db->select();
			$this->db->from('UserVote');
			$this->db->where('category', $category);
			$query = $this->db->get();
			$userVotes = $query->result();
			return $userVotes;
		}

		function updateUserVote($postId, $voteCSS, $userId, $category){
			$data = array(
				'postId' => $postId,
				'voteCSS' => $voteCSS,
				'userId' => $userId,
				'category' => $category
			);

			//Search to see if the user has already voted on this post. If not add a new row otherwise update
			$this->db->select();
			$this->db->from('UserVote');
			$this->db->where('postId', $postId);
			$this->db->where('userId', $userId);
			$query = $this->db->get();
			$userVoted = $query->result();

			if($userVoted){
				$this->db->update('UserVote', $data, array('postid' => $postId, 'userId' => $userId));
			}else{
				$this->db->insert('UserVote', $data);
			}
		}
	}
?>