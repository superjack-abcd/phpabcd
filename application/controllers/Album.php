<?php
class Album extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
    public function index(){

        $this->load->view("album");
	}
	public function imageresize(){

		$config['image_library'] = 'gd2';
		$config['source_image'] = '/path/to/image/mypic.jpg';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width']         = 1024;
		$config['height']       = 768;

		$this->load->library('image_lib', $config);

		$this->image_lib->resize();
	}


}

?>