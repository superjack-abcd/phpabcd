<?php
class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');



		$params = array('src' => '"small airplanes"', 'link' => 'girl','title'=>"girl");


		$CI =& get_instance();
		//$CI->load->library('Gisearch',$params);

		$this->load->library("mylibrary");

		$this->load->library('session');

		
		//$this->load->library("gisearch");

		//$this->load->library('Gisearch', $params);
	
	}
	public function reCaptCha(){
		$this->load->view("recaptcha");
	}
	public function login()
	{

//print_r($_REQUEST);
		if($this->input->post('email')&& $this->input->post("pass") )
		{
//print("login");	
			$e=$this->input->post('email');
			$p=$this->input->post('pass');

			$q = "select * from student where email='".$e."' and password='$p'";
//print("<br>");
//print($q);

			$que=$this->db->query($q);

			$row = $que->num_rows();
//print_r($row);	
			if($row)
			{

					$newdata = array(
						'username'  => 'johndoe',
						'email'     => $e,
						'logged_in' => TRUE
				);
			
				$this->session->set_userdata($newdata);

				$r = base_url('index.php/user/dashboard');
//print($r);
				redirect($r);

				//redirect('./user/dashboard');
			}
			else
			{
				$data['error']="<h3 style='color:red'>Invalid login details</h3>";
			}	
		}
		//$this->load->view('login',@$data);	
		$this->load->view("login");	
	}
	
	function dashboard()
	{
		
		$params = array('src' => '"small airplanes"', 'link' => 'girl','title'=>"girl");
		
//    $this->load->library('gisearch');//, $params); 

		
	//require_once(APPPATH.'libraries/gisearch.php');

	//$a = $this->gisearch->rdImage();
	$uData = $this->session->userdata();
		//print_r($uData);
			if($uData['logged_in'] !=true){
				die("session is not set");

			} 
	
	$c = false;
		if($this->mylibrary->is_connected()){

			$c=true;
		}
		
		if($c==true){
			echo "Image loading";	
			$a = $this->mylibrary->rdImage(true); 
			//echo $a;
		
		echo "Image loaded";
			$data['img_src'] = $a;
		
			$data['title'] = "My Real Title";
			$data['heading'] = "My Real Heading";
		
		
		
		//$this->load->view('blogview', $data);
		
			$this->load->view('dashboard',$data);

		}

	}
}
?>
