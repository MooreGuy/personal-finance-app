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

		function editComment($postId, $content){
			$data = array(
				'id' => $postId,
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

		function updatePostVoteCount($postVoteCount, $userOldVote){
			//Get the votes for the post using upvotes_total
			//Based on the CSS add or detract from the upvotes_total then update

			$this->db->select("upvotes_total");
			$this->db->from("posts");
			$this->db->where('id', $postVoteCount['postId']);
			$getVotes = $this->db->get();
			$votes = $getVotes->result();



			/*switch ($voteCSS) {
				case 'vote-neutral-negative': 
					if($votes <= 0)
					break;
				
				default:
					# code...
					break;
			}*/
			//if(is_object($votes) === true){
				if($postVoteCount['voteCSS'] == "vote-positive" && ($userOldVote == NULL || $userOldVote == "vote-neutral-positive" || $userOldVote == "vote-neutral-negative")){
					$votes[0]->upvotes_total++; 

				}else if($postVoteCount['voteCSS'] == "vote-positive" && $userOldVote == "vote-negative"){
					$votes[0]->upvotes_total = $votes[0]->upvotes_total + 2;

				}else if($postVoteCount['voteCSS'] == "vote-negative" && $userOldVote == "vote-positive"){
					$votes[0]->upvotes_total = $votes[0]->upvotes_total - 2;

				}else if($postVoteCount['voteCSS'] == "vote-negative" && ($userOldVote == NULL || $userOldVote == "vote-neutral-positive" || $userOldVote == "vote-neutral-negative")){
					$votes[0]->upvotes_total--; 

				}else if($postVoteCount['voteCSS'] == "vote-neutral-negative"){
					$votes[0]->upvotes_total++; 

				}else if($postVoteCount['voteCSS'] == "vote-neutral-positive"){
					$votes[0]->upvotes_total--; 
					
				}

				$data = array(
					'upvotes_total' => $votes[0]->upvotes_total
				);
			//}else{
				
				//$data = array(
					//'upvotes_total' => 0
				//);
			//}
			//$this->db->where('postId', $postId);
			$this->db->update('posts', $data, array('id' => $postVoteCount['postId']));
		}

		function UpdateUserVoting($userVoteData, $postVoteCount){
			$userOldVote = $this->updateUserVote($userVoteData);
			$this->updatePostVoteCount($postVoteCount, $userOldVote);
		}

		function getAllUserVotes($category){
			$this->db->select();
			$this->db->from('UserVote');
			$this->db->where('category', $category);
			$query = $this->db->get();
			$userVotes = $query->result();

			if($userVotes == NULL){
				return NULL;
			}else{
				return $userVotes;
			}
			
		}

		function updateUserVote($userVoteData){

			//Search to see if the user has already voted on this post. If not add a new row otherwise update
			$this->db->select();
			$this->db->from('UserVote');
			$this->db->where('postId', $userVoteData['postId']);
			$this->db->where('userId', $userVoteData['userId']);
			$query = $this->db->get();
			$userVoted = $query->result();

			$userOldVote = NULL;

				if($userVoted == NULL){
					$userOldVote = NULL;
					$this->db->insert('UserVote', $userVoteData);
					
				}else{
					$userOldVote = $userVoted[0]->voteCSS;
					$this->db->update('UserVote', $userVoteData, array('postid' => $userVoteData['postId'], 'userId' => $userVoteData['userId'], 'category' => $userVoteData['category']));
				}
			
				
				return $userOldVote;
			
		}

		function insertAlert($alertData){
			$this->db->insert('alerts', $alertData);
		}

		function updateUserReport($userId, $postId){
			$this->db->select();
			$this->db->from('UserReport');
			$this->db->where('userId', $userId);
			$this->db->where('postId', $postId);
			$query = $this->db->get();
			$hasUserReported = $query->result();

			$data = array(
				'userId' => $userId,
				'postId' => $postId
			);

			if($hasUserReported == NULL){
				$this->db->insert('UserReport', $data);
			}
			
			
		}

		function getFlaggedPosts($userId){
			$this->db->select('postId');
			$this->db->from('UserReport');
			$this->db->where('userId', $userId);
			$query = $this->db->get();
			if($query != NULL){
				$userReportedPosts = $query->result();

				return $userReportedPosts;
			}else{
				return;
			}
			
		}
	}
?>