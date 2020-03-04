<?php
include_once('../simple_html_dom.php');

// Create DOM from URL or file
//$html = file_get_html('http://www.google.com/');
$URL = "http://www.google.com/search?q=cat";
$html = file_get_html($URL);


// Find all images
foreach($html->find('img') as $element){

    echo "$element<br>" ;
    echo "<img  src=\"$element->href\"> </img>";


}
       

// Find all links
//foreach($html->find('a') as $element)
  //     echo $element->href . '<br>'; 

/*

$html = file_get_html('https://www.google.com/search?q=lizard&tbm=isch&ved=2ahUKEwi8wuaJu9XnAhXS5jgGHagVDqQQ2-cCegQIABAA&oq=lizard&gs_l=img.1.1.35i39l2j0i67l8.9437.11058..13656...0.0..1.1148.2828.0j3j1j6-1j1......0....1..gws-wiz-img.3A9C3atwJB0&ei=feNIXvyPHtLN4-EPqKu4oAo&bih=701&biw=1440');

foreach($html->find('img') as $element)
    echo '<img src="'.$element->src.'" />'; 
    

foreach($html->find('a') as $element)
    echo $element->href . '<br>';

//echo random_google_image('sexy girl');
die("here");


function random_google_image($topic='') {
    $url = sprintf('http://ajax.googleapis.com/ajax/services/search/images?q=%s&v=1.0&rsz=large&start=1', urlencode($topic));
    $results = json_decode(file_get_contents($url))->responseData->results;
    $image = $results[array_rand($results)];
    return $image->url;
}
$image  = random_image( "life" );
if ( $image !== false ) {
  echo '<img src="'.$image.'" width="500" />';
}


function random_image( $key = "love" ) {
  $url  = sprintf( "https://www.google.com/search?q=%s&tbm=isch&sout=1", urlencode( trim( $key ) ) );
  $html = get_page( $url );
  if ( $html ) {
    $images = find_images( $html );
    if ( !empty( $images ) ) {
      $images = $images[array_rand( $images )];
      return $images;
    }
  }
  return false;
}

function get_page( $url = null ) {
  $url  = trim( $url );
  if ( !$url ) {
    return false;
  }
  return @file_get_contents( $url );
}

function find_images( $html = null ) {
  $html = trim( $html );
  if ( !$html ) {
    return false;
  }
  $html = str_get_html( $html );
  $imgs = array();
  if ( $links = $html->find( ".images_table td a" ) ) {
    foreach( $links as $link ) {
      $link = ( isset( $link->href ) ) ? $link->href : null;
      $link = htmlspecialchars_decode( parse_url( $link, PHP_URL_QUERY ) );
      parse_str( $link, $link );
      if ( isset( $link["imgurl"] ) ) {
        $imgs[] = urldecode( trim( $link["imgurl"] ) );
      }
    }
  }
  unset( $html );
  return $imgs;
}

*/


?>

