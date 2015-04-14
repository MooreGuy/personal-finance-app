<?php

/*
 *
 */
class Community_board_forums extends CI_Controller
{

	function forums( $tags = 'none' )
	{		
		$this->load->view( 'templates/header' );
		$this->load->view( 'pages/community_board_forums');
		$this->load->view( 'templates/footer');

	}

	//This function is called when a tab link is clicked on the forums page. It switches the active class of the tab and displays the relavent tab view
	function loadCatTabs( ){
		
		//Grab the name of the tab
		$tabName = $this->input->get('tab');

		//Switch through the various tab names and show the corrisponding views
		switch($tabName){
			case "transport": $this->load->view( 'pages/CommunityBoard/community_board_forums_transport');
				break;
			case "food": $this->load->view( 'pages/CommunityBoard/community_board_forums_food');
				break;
			case "communications": $this->load->view( 'pages/CommunityBoard/community_board_forums_communications');
				break;
			case "entertainment": $this->load->view( 'pages/CommunityBoard/community_board_forums_entertainment');
				break;
			case "housing": $this->load->view( 'pages/CommunityBoard/community_board_forums_housing');
				break;
			case "utilities": $this->load->view( 'pages/CommunityBoard/community_board_forums_utilities');
				break;
			case "travel": $this->load->view( 'pages/CommunityBoard/community_board_forums_travel');
				break;
			case "general": $this->load->view( 'pages/CommunityBoard/community_board_forums_general');
				break;

			//let the default be the error
			default:
				break;
		}
	}

	function addNewPost(){
		//need category, title, content, 
		$data = array(
			'category' => $this->input->post('category'),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
		);

		echo json_encode($data);
	}

	function addNewComment(){
		//need parentId, content
		$data = array(
			'parentId' => $this->input->post('parentId'),
			'content' => $this->input->post('content')
		);

		echo json_encode($data);
	}

	function editPost(){
		//need postId, title, content, 
		$data = array(
			'postId' => $this->input->post('postId'),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
		);

		echo json_encode($data);
	}
	
}
