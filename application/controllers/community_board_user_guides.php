<?php

/*
 *
 */
class Community_board_user_guides extends CI_Controller
{
	public function guides( $tags = 'none' )
	{
		$data['title'] = 'Forums';

		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/community_board_forums', $data );
		$this->load->view( 'templates/footer', $data );
	}
}