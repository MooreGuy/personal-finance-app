<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

include_once( APPPATH . 'core/account.php' );

/*
 *
 */
class Community_board_forums extends Account
{
	function __construct(){
		parent::__construct();
	
		$this->load->library('session');
		//$this->load->model('User');
		$this->load->model('Comm_forums');
	}

	function forums( $tags = 'none' )
	{		
		$data['loginStatus'] = $this->checkLoginStatus();

		//Get the user's name from the parent class
		$data['userId'] = $this->session->userdata('id');
		$data['user_name'] = $this->User->get_user_name( $this->session->userdata('id') );
		$data['user_type'] = $this->User->get_user_type($this->session->userdata('id'));

		//Get all user posts for transport
		$data['all_posts'] = $this->Comm_forums->getAllUserPosts('transport', 'top');
		$data['all_comments'] = $this->Comm_forums->getAllUserComments('transport');

		//Get the usernames for the posts and comments
		$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('transport');
		$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('transport');

		//Get all of the user votes
		$data['userVotes'] = $this->Comm_forums->getAllUserVotes('transport');
		

		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/community_board_forums', $data);
		$this->load->view( 'templates/footer', $data);

	}

	//This function is called when a tab link is clicked on the forums page. It switches the active class of the tab and displays the relavent tab view
	function loadCatTabs( ){
		
		//Grab the name of the tab
		$tabName = $this->input->get('tab');

		$data['loginStatus'] = $this->checkLoginStatus();

		//Get the user's name from the parent class.
		$data['userId'] = $this->session->userdata('id');
		$data['user_name'] = $this->User->get_user_name( $this->user_id );
		$data['user_type'] = $this->User->get_user_type($this->session->userdata('id'));

		


		$orderBy = $this->input->get('orderBy');

		//Switch through the various tab names and show the corrisponding views
		switch($tabName){
			case "transport": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('transport', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('transport', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('transport');
				$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('transport');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('transport');

				$data['all_comments'] = $this->Comm_forums->getAllUserComments('transport');
				
				$this->load->view( 'pages/CommunityBoard/community_board_forums_transport', $data);
				break;
			case "food": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('food', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('food', 'new');
						break;
					
					default:
						break;
				} 

				//Get the usernames for the posts and comments
				$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('food');
				$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('food');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('food');
				
				$data['all_comments'] = $this->Comm_forums->getAllUserComments('food');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_food', $data);
				break;
			case "communications": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('communications', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('communications', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('communications');
				$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('communications');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('communications');
			
				$data['all_comments'] = $this->Comm_forums->getAllUserComments('communications');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_communications', $data);
				break;
			case "entertainment": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('entertainment', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('entertainment', 'new');
						break;
					
					default:
						break;
				}


				//Get the usernames for the posts and comments
				$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('entertainment');
				$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('entertainment');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('entertainment');
				$data['all_comments'] = $this->Comm_forums->getAllUserComments('entertainment');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_entertainment', $data);
				break;
			case "housing": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('housing', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('housing', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('housing');
				$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('housing');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('housing');

				$data['all_comments'] = $this->Comm_forums->getAllUserComments('housing');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_housing', $data);
				break;
			case "utilities": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('utilities', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('utilities', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('utilities');
				$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('utilities');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('utilities');

				$data['all_comments'] = $this->Comm_forums->getAllUserComments('utilities');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_utilities', $data);
				break;
			case "travel": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('travel', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('travel', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('travel');
				$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('travel');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('travel');

				$data['all_comments'] = $this->Comm_forums->getAllUserComments('travel');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_travel', $data);
				break;
			case "general": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('general', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllUserPosts('general', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('general');
				$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('general');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('general');

				$data['all_comments'] = $this->Comm_forums->getAllUserComments('general');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_general', $data);
				break;

			//let the default be the error
			default:
				break;
		}
	}

	function addNewPost(){
		//need category, title, content, 
		$userId = $this->session->userdata('id');
		$category = $this->input->post('category');
		$title = $this->input->post('title');
		$content = $this->input->post('content');

		//Try to add the new data
		$this->Comm_forums->addNewPost($userId, $category, $title, $content);
	}

	function addNewComment(){
		//need parentId, content
		$userId = $this->session->userdata('id');
		$parentId = $this->input->post('parentId');
		$content = $this->input->post('content');
		$category = $this->input->post('category');

		$this->Comm_forums->addNewComment($userId, $parentId, $content, $category);
	}

	function editPost(){
		//need postId, title, content
		$postId = $this->input->post('postId');
		$title = $this->input->post('title');
		$content = $this->input->post('content');

		$this->Comm_forums->editPost($postId, $title, $content);
	}

	function editComment(){
		//need postId, content
		$postId = $this->input->post('postId');
		$content = $this->input->post('content');

		$this->Comm_forums->editComment($postId, $content);
	}

	function deletePost(){
		//need postId, title, content
		$postId = $this->input->post('postId');

		$this->Comm_forums->deletePosts($postId);
	}

	/*function updatePostVoteCount(){
		$postId = $this->input->post('postId');
		

		$this->Comm_forums->updatePostVoteCount($postId, $voteCount);
	}*/

	function updatePostVoteCount($postId, $voteCSS){
		$this->Comm_forums->updatePostVoteCount($postId, $voteCSS);
	}

	function updateUserVote(){
		$userId = $this->session->userdata('id');
		$postId = $this->input->post('postId');
		$voteCSS = $this->input->post('voteCSS');
		$category = $this->input->post('category');
		//$voteType = $this->input->post('voteType');
		//$this->updatePostVoteCount($postId, $voteCSS);
		//$this->Comm_forums->updateUserVote($postId, $voteCSS, $userId, $category);

		$userVoteData = array(
			'postId' => $postId,
			'voteCSS' => $voteCSS,
			'userId' => $userId,
			'category' => $category
		);

		$postVoteCount = array(
			'postId' => $postId,
			'voteCSS' => $voteCSS
		);

		if($userId != 0){
			$this->Comm_forums->updateUserVoting($userVoteData, $postVoteCount);
		}
		
		
	}

	

	function postFilter(){
		$category = $this->input->post('category');
		$orderBy = $this->input->post('order');

		$this->Comm_forums->getAllUserPosts($category, $orderBy);
	}
}

?>
