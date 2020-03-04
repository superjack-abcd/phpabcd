<?php 
   class Hello extends CI_Controller
   {  
      public function index() 
	  { 
         echo "Hello World"; 
      }
	  public function about() 
	  { 
         $this->load->view('about'); 
      }
	  
   } 
?>