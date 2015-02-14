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
		echo error_get_last();
    }

    public function testmarkdown( $page = 'home', $mode = 'edit' )
    {
    	$data['title'] = $page;
    	$data['mode'] = $mode;

		$markdown = "#hello";
		$this->load->library('md');
		$html = $this->md->defaultTransform($markdown);
		echo $html;

        $this->load->view("templates/header", $data);
        $this->load->view("templates/footer", $data);
    }

    public function save()
    {

    	$data['title'] = 'home';

    	$this->load->view("templates/header", $data);

    	if( isset($_POST['markdown']) )
    	{
	    	$data['markdown'] = $_POST['markdown'];    	

			$this->load->library('md');
			$data['html'] = $this->md->defaultTransform($markdown);
			
	    	$this->load->view("guides/display", $data);
            
    	}

    	$this->load->view("templates/footer", $data);
    }
    
}

?>
