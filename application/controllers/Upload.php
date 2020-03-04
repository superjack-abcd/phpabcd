<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config = array(
                        'upload_path' => $upPath,
                        'allowed_types' => "gif|jpg|png|jpeg",
                        'overwrite' => TRUE,
                        'max_size' => "9999999", 
                        'max_height' => "4000",
                        'max_width' => "70000");
                        
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('profile_pic')) 
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('iimageupload_form', $error);
                } 
                else 
                {
                        $data = array('image_metadata' => $this->upload->data());

                        $this->load->view('upload_result', $data);
                }
        }
}
?>