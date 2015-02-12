<?php

class Editor extends CI_Controller 
{
    public function index( $page = 'home', $mode = 'edit' )
    {
    	$data['title'] = $page;
    	$data['mode'] = $mode;

        $this->load->view("templates/header", $data);
        $this->load->view("templates/markdowneditor", $data);
        $this->load->view("templates/footer", $data);
    }

    public function save()
    {

    	$data['title'] = 'home';

    	$this->load->view("templates/header", $data);

    	if( isset($_POST['markdown']) )
    	{
	    	$data['markdown'] = $_POST['markdown'];    	

	    	$this->load->view("guides/display", $data);
    	}

    	$this->load->view("templates/footer", $data);
    }
    
}

?>
