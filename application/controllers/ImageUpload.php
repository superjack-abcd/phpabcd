<?php 
class ImageUpload extends CI_Controller
{
	function __construct()
	{
	parent::__construct();
	//load Helper for Form
	$this->load->helper('url', 'form');	
	$this->load->library('form_validation');
	}
	function index()
	{
		$this->load->view('imageupload_form');
	}
	public function upload() 
	{
		$upload_path=APPPATH."../images";  
        $uid='10'; //creare seperate folder for each user 
        //$upPath=$upload_path."/".$uid;
        $upPath=$upload_path;
        
        if(!file_exists($upPath)) 
        {
                   mkdir($upPath, 0777, true);
        }
        $config = array(
        'upload_path' => $upPath,
        'allowed_types' => "gif|jpg|png|jpeg",
        'overwrite' => TRUE,
        'max_size' => 0, 
        'max_height' => 0,
        'max_width' => 0
        );
//print_r($config);
		$this->load->library('upload', $config);
 

        if (!$this->upload->do_upload('profile_pic')) 
		{
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('imageupload_form', $error);
        } 
		else 
		{
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('upload_result', $data);
        }
    }

}
?>