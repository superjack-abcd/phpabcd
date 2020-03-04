<?php
class Carousel extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	
    }

    function index(){
        $params = array('src' => '"small airplanes"', 'link' => 'girl','title'=>"girl");

   // $this->load->library('gisearch', $params); 
  $this->load->library("mylibrary");
		
    

    $a = $this->mylibrary->rdImageArray();
   // print_r($a);
    $data['todo_list'] = $a;

    $data['title'] = "My Real Title";
    $data['heading'] = "My Real Heading";



//$this->load->view('blogview', $data);

    $this->load->view('caroview',$data);
    }
}

?>