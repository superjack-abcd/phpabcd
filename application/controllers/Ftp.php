<?php
class Ftp extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}

	public function login()
	{
		$this->load->library('ftp');

		$config['hostname'] = 'ftp.ubtsichol.com';
		$config['username'] = 'u1674355';
		$config['password'] = 'WRy?DyI$6-';
		$config['debug']        = TRUE;

		$this->ftp->connect($config);

		//$this->ftp->upload('/Users/jack/Documents/apple.sqlite3', '/public_html/myfile.sqlite3', 'binary', 0775);
        //print("Uploading");
        $result = $this->ftp->list_files('/public_html/');

        $data['todo_list'] = $result;

        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";



//$this->load->view('blogview', $data);

        
        
        
        
        $this->load->view('ftpview',$data);


        //print_r($list);
       /* foreach($list as $v){
            print($v);
            print("<br>");

        }
        */
		$this->ftp->close();	
	}
	
	
}
?>