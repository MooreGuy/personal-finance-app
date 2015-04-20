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

		//Get the user's name from the parent class.
		$data['user_name'] = $this->user_name;
		$data['userId'] = $this->session->userdata('id');

		//Get all user posts for transport
		$data['all_posts'] = $this->Comm_forums->getAllUserPosts('transport');

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
		$data['user_name'] = $this->user_name;
		$data['userId'] = $this->session->userdata('id');

		//Switch through the various tab names and show the corrisponding views
		switch($tabName){
			case "transport": 
				$data['all_posts'] = $this->Comm_forums->getAllUserPosts('transport');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_transport', $data);
				break;
			case "food": 
				$data['all_posts'] = $this->Comm_forums->getAllUserPosts('food');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_food', $data);
				break;
			case "communications": 
				$data['all_posts'] = $this->Comm_forums->getAllUserPosts('communications');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_communications', $data);
				break;
			case "entertainment": 
				$data['all_posts'] = $this->Comm_forums->getAllUserPosts('entertainment');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_entertainment', $data);
				break;
			case "housing": 
				$data['all_posts'] = $this->Comm_forums->getAllUserPosts('housing');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_housing', $data);
				break;
			case "utilities": 
				$data['all_posts'] = $this->Comm_forums->getAllUserPosts('utilities');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_utilities', $data);
				break;
			case "travel": 
				$data['all_posts'] = $this->Comm_forums->getAllUserPosts('travel');
				$this->load->view( 'pages/CommunityBoard/community_board_forums_travel', $data);
				break;
			case "general": 
				$data['all_posts'] = $this->Comm_forums->getAllUserPosts('general');
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

		$tabName = strtolower($category);
		//Try to add the new data
		$this->Comm_forums->addNewPost($userId, $category, $title, $content);
	}

	function addNewComment(){
		//need parentId, content
		$parentId = $this->input->post('parentId');
		$content = $this->input->post('content');

		//echo json_encode($data);
	}

	function editPost(){
		//need postId, title, content
		$postId = $this->input->post('postId');
		$title = $this->input->post('title');
		$content = $this->input->post('content');

		$this->Comm_forums->editPost($postId, $title, $content);

		/*$data = array(
			'postId' => $postId,
			'title' => $title,
			'content' => $content
		);

		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/community_board_forums', $data);
		$this->load->view( 'templates/footer', $data);*/
	}
}

?>
