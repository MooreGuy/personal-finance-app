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

		/*
			function add a new post into the posts table
			@parms: 
			userId - The user who is logged in and wrote the post
			category - The category the post falls under.
			title - The title of the post
			content - The content of the post
		*/
		function addNewPost($userId, $category, $title, $content){
			$data = array(
				'title' => $title,
				'content' => $content,
				'userId' => $userId,
				'upvotes_total' => 0,
				'parentId' => 0,
				'category' => $category
			);

			if($this->db->insert('posts', $data)){
				return true;
			}else{
				return false;
			}
		}

		/*
			function that edits a post
			@params:
			postId - The id of the post to be edited
			title - The title of the post
			content - The content of the post
		*/
		function editPost($postId, $title, $content){
			$data = array(
				'id' => $postId,
				'title' => $title,
				'content' => $content
			);

			$this->db->where('id', $postId);
			$this->db->update('posts', $data);
		}

		/*
			function edits a comment
			@params:
			postId - The id of the post(comment) thats being edited
			content - The new content of the post
		*/
		function editComment($postId, $content){
			$data = array(
				'id' => $postId,
				'content' => $content
			);

			$this->db->where('id', $postId);
			$this->db->update('posts', $data);
		}

		/*
			function add a new user comment
			@params:
			userId - The user id of the logged in user
			parentId - The id of the post the comment is for
			content - The content of the comment
			category - The category of the comment
		*/
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

		/*function getAllUserPosts($category, $orderBy){
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
		}*/

		function getAllPosts($category, $filter){
			//$this->db->distinct();
			$this->db->select('users.username, users.id, posts.id, posts.category, posts.upvotes_total, posts.userId, posts.content, posts.title, posts.parentId');
			$this->db->from('users');
			$this->db->join('posts', 'posts.userId = users.id');
			$this->db->where('parentId', 0);
			$this->db->where('category', $category);

			switch($filter){
				case 'top': $this->db->order_by('upvotes_total', 'desc');
					break;
				case 'new': $this->db->order_by('timestamp', 'desc');
					break;
			}
			
			$query = $this->db->get();
			if($query == NULL){
				$user_names = NULL;
			}else{
				$user_names = $query->result();
			}
			
			return $user_names;
		}

		/*
			function gets all of the comments
			@params:
			category -The category of the posts. Used to filter results
			@return:
			comment - All of the comments
		*/
		function getAllComments($category){
			//$this->db->distinct();
			$this->db->select('users.username, users.id, posts.id, posts.category, posts.upvotes_total, posts.userId, posts.content, posts.title, posts.parentId');
			$this->db->from('users');
			$this->db->join('posts', 'posts.userId = users.id');
			$this->db->where('parentId >', 0);
			$this->db->where('category', $category);
			$query = $this->db->get();
			$comments = $query->result();
			return $comments;
		}

		/*
			function deletes a post
			@params:
			postId - The id of the post to be delete
		*/
		function deletePosts($postId){
			$this->db->delete('posts', array('id' => $postId));
		}

		/*
			function updates the vote count of a post 
			@params:
			postVoteCount - The data for updating the vote count of a post
			userOldVote - How the user voted previously. Used to determine how many points effect the vote
		*/
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
				if($postVoteCount['voteCSS'] == "vote-positive" && ($userOldVote == NULL || $userOldVote == "vote-neutral-positive" || $userOldVote == "vote-neutral-negative" || $userOldVote == "vote-neutral")){
					$votes[0]->upvotes_total++; 

				}else if($postVoteCount['voteCSS'] == "vote-positive" && $userOldVote == "vote-negative"){
					$votes[0]->upvotes_total = $votes[0]->upvotes_total + 2;

				}else if($postVoteCount['voteCSS'] == "vote-negative" && $userOldVote == "vote-positive"){
					$votes[0]->upvotes_total = $votes[0]->upvotes_total - 2;

				}else if($postVoteCount['voteCSS'] == "vote-negative" && ($userOldVote == NULL || $userOldVote == "vote-neutral-positive" || $userOldVote == "vote-neutral-negative" || $userOldVote == "vote-neutral")){
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

		/*
			function updates the user vote and the post count
			@params:
			userVoteData - All of the data for the user vote
			postVoteCount - All of the data for the post vote count
		*/
		function updateUserVoting($userVoteData, $postVoteCount){
			$userOldVote = $this->updateUserVote($userVoteData);
			$this->updatePostVoteCount($postVoteCount, $userOldVote);
		}

		/*
			function gets all of the user votes 
			@params:
			category - The category of posts that the votes are for
			@return:
			userVotes - All of the user votes for the posts
		*/
		function getAllUserVotes($category){
			$this->db->select();
			$this->db->from('UserVote');
			$this->db->where('category', $category);
			$query = $this->db->get();
			$userVotes = $query->result();
			return $userVotes;
		}

		/*
			function updates the user vote on a post
			@params:
			userVoteData - The data for the user vote

		*/
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
			
				
				//return $userOldVote;
			
		}

		/*
			function inserts an alerts into the alerts table
			@params:
			alertData - All of the data for the alert
		*/
		function insertAlert($alertData){
			$this->db->insert('alerts', $alertData);
		}

		/*
			function inserts which post the user reported into UserReport
			This is used to 
			@params:
			userId - The id of the user logged in
			postId - The id of the post the user reported
		*/
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

		/*
			function gets all of the posts ids that are flagged by the user
			@params:
			userId - The userId of the user that is logged in
			@return:
			userReportedPosts
		*/
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

		/*
			function gets the count of all of the forum posts
			This is used for pagination
			@return:
			A count of the posts
			THIS FUNCTION IS NO LONGER IN USE: PLEASE KEEP IN 
		*/
		function getPostCount(){
			$this->db->select();
			$this->db->from('posts');
			$this->db->where('id', 0);
			return $this->db->count_all();
		}
	}
?>