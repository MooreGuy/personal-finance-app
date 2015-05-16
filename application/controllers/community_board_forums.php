<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once( APPPATH . 'core/account.php' );

/*
 *
 */
class Community_board_forums extends Account
{
	const NUMBEROFPOSTS = 10;

	function __construct(){
		parent::__construct();
	
		$this->load->library('session');
		//$this->load->model('User');
		$this->load->model('Comm_forums');
	}

	/*
		function On load for the community forums page

	*/
	function forums( $tags = 'none', $offset = 0 )
	{

		$data['loginStatus'] = $this->checkLoginStatus();

		//Get the user's name from the parent class
		$data['userId'] = $this->session->userdata('id');
		$data['user_name'] = $this->User->get_user_name( $this->session->userdata('id') );
		$data['user_type'] = $this->User->get_user_type($this->session->userdata('id'));

		/*
		//Get all user posts for transport
		$data['all_posts'] = $this->Comm_forums->getAllPosts('transport', 'top');
		//$data['all_comments'] = $this->Comm_forums->getAllUserComments('transport');
		$data['all_comments'] = $this->Comm_forums->getAllComments('transport');
		 */

		$data['all_posts'] = $this->Comm_forums->getPosts('transport', 'top', $offset,
		 self::NUMBEROFPOSTS);
		$data['all_comments'] = $this->Comm_forums->getAllComments('transport');

		//Get the usernames for the posts and comments
		//$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('transport');
		//$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('transport');

		//Get all of the user votes
		$data['userVotes'] = $this->Comm_forums->getAllUserVotes('transport');

		//Get any posts the user has reported on
		$data['userReport'] = $this->Comm_forums->getFlaggedPosts($data['userId']);

		$this->load->library('pagination');
		$this->load->helper('url');
		$config = array();
		$config["base_url"] = base_url() . '/community_board_forums/forums';
		$config['total_rows'] = $this->Comm_forums->getPostCount();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;

		// twitter bootstrap markup 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>'; 
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>'; 
		$config['cur_tag_open'] = '<li class="active"><span>'; 
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>'; 
		$config['prev_tag_open'] = '<li>'; 
		$config['prev_tag_close'] = '</li>'; 
		$config['next_tag_open'] = '<li>'; 
		$config['next_tag_close'] = '</li>'; 
		$config['first_link'] = '&laquo;'; 
		$config['prev_link'] = '&lsaquo;'; 
		$config['last_link'] = '&raquo;'; 
		$config['next_link'] = '&rsaquo;'; 
		$config['first_tag_open'] = '<li>'; 
		$config['first_tag_close'] = '</li>'; 
		$config['last_tag_open'] = '<li>'; 
		$config['last_tag_close'] = '</li>'; 


		$this->pagination->initialize($config); 
		// pass the parameters for per_page, page number, order by, sort, etc here 

		// generate links 
		$data['links'] = $this->pagination->create_links(); 

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
		$data['userReport'] = $this->Comm_forums->getFlaggedPosts($data['userId']);
		


		$orderBy = $this->input->get('orderBy');

		//Switch through the various tab names and show the corrisponding views
		switch($tabName){
			case "transport": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllPosts('transport', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllPosts('transport', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				//$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('transport');
				//$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('transport');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('transport');

				$data['all_comments'] = $this->Comm_forums->getAllComments('transport');
				
				$this->load->view( 'pages/CommunityBoard/community_board_forums_transport', $data);
				break;
			case "food": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllPosts('food', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllPosts('food', 'new');
						break;
					
					default:
						break;
				} 

				//Get the usernames for the posts and comments
				//$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('food');
				//$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('food');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('food');
				
				$data['all_comments'] = $this->Comm_forums->getAllComments('food');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_food', $data);
				break;
			case "communications": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllPosts('communications', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllPosts('communications', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				//$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('communications');
				//$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('communications');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('communications');
			
				$data['all_comments'] = $this->Comm_forums->getAllComments('communications');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_communications', $data);
				break;
			case "entertainment": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllPosts('entertainment', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllPosts('entertainment', 'new');
						break;
					
					default:
						break;
				}


				//Get the usernames for the posts and comments
				//$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('entertainment');
				//$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('entertainment');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllVotes('entertainment');
				$data['all_comments'] = $this->Comm_forums->getAllComments('entertainment');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_entertainment', $data);
				break;
			case "housing": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllPosts('housing', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllPosts('housing', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				//$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('housing');
				//$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('housing');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('housing');

				$data['all_comments'] = $this->Comm_forums->getAllComments('housing');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_housing', $data);
				break;
			case "utilities": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllPosts('utilities', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllPosts('utilities', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				//$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('utilities');
				//$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllComments('utilities');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('utilities');

				$data['all_comments'] = $this->Comm_forums->getAllComments('utilities');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_utilities', $data);
				break;
			case "travel": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllPosts('travel', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllPosts('travel', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				//$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('travel');
				//$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('travel');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('travel');

				$data['all_comments'] = $this->Comm_forums->getAllComments('travel');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_travel', $data);
				break;
			case "general": 
				switch ($orderBy) {
					case 'top': $data['all_posts'] = $this->Comm_forums->getAllPosts('general', 'top');
						break;
					case 'new': $data['all_posts'] = $this->Comm_forums->getAllPosts('general', 'new');
						break;
					
					default:
						break;
				}

				//Get the usernames for the posts and comments
				//$data['getAllPostsUserNames'] = $this->Comm_forums->getAllPostsUserNames('general');
				//$data['getAllCommentsUserNames'] = $this->Comm_forums->getAllCommentsUserNames('general');

				//Get all of the user votes
				$data['userVotes'] = $this->Comm_forums->getAllUserVotes('general');

				$data['all_comments'] = $this->Comm_forums->getAllComments('general');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_general', $data);
				break;

			//let the default be the error
			default:
				break;
		}
	}

	/*
		This function adds a new post to the posts table
		
	*/
	function addNewPost(){
		//need category, title, content, 
		$userId = $this->session->userdata('id');
		$category = $this->input->post('category');
		$title = $this->input->post('title');
		$content = $this->input->post('content');

		//Add the new data
		$this->Comm_forums->addNewPost($userId, $category, $title, $content);
	}

	/*
		This function adds a new comment to the posts table
	*/
	function addNewComment(){
		//need parentId, content
		$userId = $this->session->userdata('id');
		$parentId = $this->input->post('parentId');
		$content = $this->input->post('content');
		$category = $this->input->post('category');

		$this->Comm_forums->addNewComment($userId, $parentId, $content, $category);
	}

	//This function will edit a user post
	function editPost(){
		//need postId, title, content
		$postId = $this->input->post('postId');
		$title = $this->input->post('title');
		$content = $this->input->post('content');

		$this->Comm_forums->editPost($postId, $title, $content);
	}

	//This function will edit a users comment
	function editComment(){
		//need postId, content
		$postId = $this->input->post('postId');
		$content = $this->input->post('content');

		$this->Comm_forums->editComment($postId, $content);
	}

	//This function will delete a users post
	function deletePost(){
		//need postId, title, content
		$postId = $this->input->post('postId');

		$this->Comm_forums->deletePosts($postId);
	}

	/*function updatePostVoteCount(){
		$postId = $this->input->post('postId');
		

		$this->Comm_forums->updatePostVoteCount($postId, $voteCount);
	}*/

	//This function will update the vote count for a post
	//function updatePostVoteCount($postId, $voteCSS){
		//$this->Comm_forums->updatePostVoteCount($postId, $voteCSS);
	//}

	//This function will update how the user voted on a post and will update the post vote
	function updateUserVote(){
		$userId = $this->session->userdata('id');
		$postId = $this->input->post('postId');
		$voteCSS = $this->input->post('voteCSS');
		$category = $this->input->post('category');
		//$voteType = $this->input->post('voteType');
		//$this->postVoteCount($postId, $voteCSS);
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

	//This function will insert an alert into the admin alerts table for when a user flags a post
	function insertAlert(){
		//$this->load->model( 'alertsmodel' );
		$this->load->helper('date');
			//Format the time with the datestring.
			$datestring = "%Y-%m-%d %h:%i:%s";
			//Get the current time to use for the mdate function. Although it defaults to the current time.
			$time = time();

		$content = $this->input->post('content');
		$userId = $this->session->userdata('id');
		$severity = $this->input->post('severity');
		$title = $this->input->post('reason');
		$postId = $this->input->post('postId');

		$alertData = array(
			'timestamp' => mdate($datestring, $time),
			'content' => $content,
			'userId' => $userId,
			'severity' => $severity,
			'title' => $title,
			'postId' => $postId
		);

		$this->Comm_forums->insertAlert($alertData);
	}

	

	//This function gets the userposts when the user has used the filter dropdown
	function postFilter(){
		$category = $this->input->post('category');
		$orderBy = $this->input->post('order');

		$this->Comm_forums->getAllUserPosts($category, $orderBy);
	}

	//This function will update the user report table for when a user flags a post
	function updateUserReport(){
		$userId = $this->session->userdata('id');
		$postId = $this->input->post('postId');

		$this->Comm_forums->updateUserReport($userId, $postId);
	}
}

?>
