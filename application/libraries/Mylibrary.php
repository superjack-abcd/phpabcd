<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   
   class Mylibrary {
	
      public function some_function() {

        
      }
      function is_connected()
      {
          $connected = @fsockopen("www.google.com", 80); 
                                              //website, port  (try 80 or 443)
          if ($connected){
              $is_conn = true; //action when connected
              fclose($connected);
          }else{
              $is_conn = false; //action in connection failure
          }
          return $is_conn;
      
      }

  // is_json(<text>): checks if string is JSON or not
  function is_json($TEXT) {
    json_decode($TEXT);
    return (json_last_error() == JSON_ERROR_NONE);
  }
 
  function rdImageArray(){
    include('simple_html_dom.php');
    
  // get DOM from URL or file
   // $html = file_get_html('https://www.google.com/search?q=%E0%B8%81%E0%B8%B4%E0%B9%89%E0%B8%87%E0%B8%81%E0%B9%88%E0%B8%B2&client=firefox-b-d&sxsrf=ACYBGNS2uPqrCJrTw1TzpwVAYvBF0fwxag:1581831015305&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjy74veq9XnAhXHbn0KHWXKBX0Q_AUoAXoECA4QAw&biw=1440&bih=737&dpr=2');
  //$html = file_get_html("https://www.sanook.com");
//  $html = file_get_html("https://unsplash.com/s/photos/nature");

 // $html = file_get_html("https://unsplash.com/s/photos/nature");
$html = file_get_html("https://unsplash.com/t/animals");
    $a = array();
    $filterName = "photo";
  // find all image with full tag
    foreach($html->find('img') as $e){
        if(strstr($e->src,"photo")!=NULL ) //todo move to arg
          array_push($a, $e->src );
        
    }
  
   // print_r($a);
   return $a;
  
  }
  function rdImage(){
    
  
    //print_r($a);
    $a =$this-> rdImageArray();
    shuffle($a);
    return $this->getRandomFromArray($a);
  
  }

  function getRandomFromArray($ar) {
    $num = array_rand($ar);
    return $ar[$num];
}

   }
	
/* End of file Mylibrary.php */
?>