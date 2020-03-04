<?php
class ImageRandom extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
    
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {

                if(!file_exists(APPPATH."../images/".$img_file)){
                    
                    continue;
                }
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    $num = array_rand($ar);
    return $ar[$num];
}

function randImageG(){

   
    $params = array('src' => '"small airplanes"', 'link' => 'girl','title'=>"girl");

    $this->load->library('gisearch', $params); 

    

    $a = $this->gisearch->rdImage();
    echo $a;
    $data['img_src'] = $a;

    $data['title'] = "My Real Title";
    $data['heading'] = "My Real Heading";



//$this->load->view('blogview', $data);

    $this->load->view('dashboard',$data);

    /*
    $i = $this->gisearch->select_image("girl");

   // $i = new gisearch("small airplanes"); //the search keyword
        echo '<center><img src="'. $i->get_link() .'" 
               style="height: 180px; max-width: 250px;"/></center><br>';
        
    */    

}



function cmp($a, $b) {
    $ta = filemtime(APPPATH."../images/".$a);
     $tb = filemtime(APPPATH."../images/".$b);

   return $ta > $tb ;
  }
  
function index(){
        $result = $this->getImagesFromDir(APPPATH.'../images');


        usort($result, function ($a, $b) {
            $ta = filemtime(APPPATH."../images/".$a);
            $tb = filemtime(APPPATH."../images/".$b);
       
          return $ta < $tb ;
        });
        $data['todo_list'] = $result;
//print_r($result);
        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";
    
       // uasort($result, "cmp");


         

        $filename = $result;
       // $d = date ("F d Y H:i:s.", filemtime($filename)); 
       /* 
        foreach ($result as  $value){ 
            //code to be executed; 
            echo $value."<br>";
            
            $d = date ("F d Y H:i:s.", filemtime(APPPATH."../images/".$value)); 
            echo($d);
        } 
       */
      //  die('...');
        

        
        $this->load->view("album2",$data);	

}
}

?>