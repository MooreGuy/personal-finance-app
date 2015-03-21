<?php

/*
 *
 */
class Community_board_forums extends CI_Controller
{
	public function forums( $tags = 'none' )
	{
		$data['title'] = 'Forums';
		$data['transportClass'] = 'active';
		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/community_board_forums', $data );
		$this->load->view( 'pages/community_board_forums_transport');
		$this->load->view( 'templates/footer', $data );
	}

	//This function is called when a tab link is clicked on the forums page. It switches the active class of the tab and displays the relavent tab view
	public function loadCatTabs( ){
		//Grab the name of the tab
		$tabName = $this->input->get('tab');

		//Switch through the various tab names and show the corrisponding views
		switch($tabName){
			case "transport":
				$data['transportClass'] = 'active';
				$data['foodClass'] = '';
				$data['phoneClass'] = '';
				$data['entertainmentClass'] = '';
				$data['housingClass'] = '';
				$data['utilitiesClass'] = '';
				$data['travelClass'] = '';
				$data['generalClass'] = '';
				$this->load->view( 'templates/header');
				$this->load->view( 'pages/community_board_forums', $data );
				$this->load->view( 'pages/community_board_forums_transport', $data );
				$this->load->view( 'templates/footer' );
				break;

			case "food": 
				$data['transportClass'] = '';
				$data['foodClass'] = 'active';
				$data['phoneClass'] = '';
				$data['entertainmentClass'] = '';
				$data['housingClass'] = '';
				$data['utilitiesClass'] = '';
				$data['travelClass'] = '';
				$data['generalClass'] = '';
				$this->load->view( 'templates/header');
				$this->load->view( 'pages/community_board_forums', $data );
				$this->load->view( 'pages/community_board_forums_food', $data );
				$this->load->view( 'templates/footer' );
				break;
			case "phone":
				$data['transportClass'] = '';
				$data['foodClass'] = '';
				$data['phoneClass'] = 'active';
				$data['entertainmentClass'] = '';
				$data['housingClass'] = '';
				$data['utilitiesClass'] = '';
				$data['travelClass'] = '';
				$data['generalClass'] = '';
				$this->load->view( 'templates/header');
				$this->load->view( 'pages/community_board_forums', $data );
				$this->load->view( 'pages/community_board_forums_phone', $data );
				$this->load->view( 'templates/footer' );
				break;
			case "entertainment":
				$data['transportClass'] = '';
				$data['foodClass'] = '';
				$data['phoneClass'] = '';
				$data['entertainmentClass'] = 'active';
				$data['housingClass'] = '';
				$data['utilitiesClass'] = '';
				$data['travelClass'] = '';
				$data['generalClass'] = '';
				$this->load->view( 'templates/header');
				$this->load->view( 'pages/community_board_forums', $data );
				$this->load->view( 'pages/community_board_forums_entertainment', $data );
				$this->load->view( 'templates/footer' );
				break;
			case "housing":
				$data['transportClass'] = '';
				$data['foodClass'] = '';
				$data['phoneClass'] = '';
				$data['entertainmentClass'] = '';
				$data['housingClass'] = 'active';
				$data['utilitiesClass'] = '';
				$data['travelClass'] = '';
				$data['generalClass'] = '';
				$this->load->view( 'templates/header');
				$this->load->view( 'pages/community_board_forums', $data );
				$this->load->view( 'pages/community_board_forums_housing', $data );
				$this->load->view( 'templates/footer' );
				break;
			case "ultilities":
				$data['transportClass'] = '';
				$data['foodClass'] = '';
				$data['phoneClass'] = '';
				$data['entertainmentClass'] = '';
				$data['housingClass'] = '';
				$data['utilitiesClass'] = 'active';
				$data['travelClass'] = '';
				$data['generalClass'] = '';
				$this->load->view( 'templates/header');
				$this->load->view( 'pages/community_board_forums', $data );
				$this->load->view( 'pages/community_board_forums_utilities', $data );
				$this->load->view( 'templates/footer' );
				break;
			case "travel":
				$data['transportClass'] = '';
				$data['foodClass'] = '';
				$data['phoneClass'] = '';
				$data['entertainmentClass'] = '';
				$data['housingClass'] = '';
				$data['utilitiesClass'] = '';
				$data['travelClass'] = 'active';
				$data['generalClass'] = '';
				$this->load->view( 'templates/header');
				$this->load->view( 'pages/community_board_forums', $data );
				$this->load->view( 'pages/community_board_forums_travel', $data );
				$this->load->view( 'templates/footer' );
				break;
			case "general":
				$data['transportClass'] = '';
				$data['foodClass'] = '';
				$data['phoneClass'] = '';
				$data['entertainmentClass'] = '';
				$data['housingClass'] = '';
				$data['utilitiesClass'] = '';
				$data['travelClass'] = '';
				$data['generalClass'] = 'active';
				$this->load->view( 'templates/header');
				$this->load->view( 'pages/community_board_forums', $data );
				$this->load->view( 'pages/community_board_forums_general', $data );
				$this->load->view( 'templates/footer' );
				break;

			//let the default be the error
			default:
				break;
		}
	}
}
