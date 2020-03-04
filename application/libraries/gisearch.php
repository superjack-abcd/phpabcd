<?php

class  Gisearch {
  
  
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
    return getRandomFromArray($a);
  
  }
  

  function getRandomFromArray($ar) {

   // print_r($ar);
    $num = array_rand($ar);
    return $ar[$num];
}
  


}



// example of how to use basic selector to retrieve HTML contents
//include('../libraries/simplehtmldom_1_9_1/simple_html_dom.php');



// find all link
//foreach($html->find('a') as $e) 
  //  echo $e->href . '<br>';

// find all image
//foreach($html->find('img') as $e)
  //  echo $e->src . '<br>';


  
//echo getRandomFromArray($a);

 
/*
// find all div tags with id=gbar
foreach($html->find('div#gbar') as $e)
    echo $e->innertext . '<br>';

// find all span tags with class=gb1
foreach($html->find('span.gb1') as $e)
    echo $e->outertext . '<br>';

// find all td tags with attribite align=center
foreach($html->find('td[align=center]') as $e)
    echo $e->innertext . '<br>';
    
// extract text from table
echo $html->find('td[align="center"]', 1)->plaintext.'<br><hr>';
*/
// extract text from HTML
//echo $html->plaintext;

?>