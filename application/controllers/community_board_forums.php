<?php

/*
 *
 */
class Community_board_forums extends CI_Controller
{
	public function forums( $tags = 'none' )
	{
		$data['title'] = 'Forums';

		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/community_board_forums', $data );
		$this->load->view( 'templates/footer', $data );
	}
}
