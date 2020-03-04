<?php
// example of how to modify HTML contents
include('../simple_html_dom.php');

// get DOM from URL or file
//$html = file_get_html('http://www.google.com/');
//$html = file_get_html("https://www.google.com/search?q=girl&sxsrf=ACYBGNQBM6osk3I0EZ3wwfDRj8f_RefxjQ:1581899262545&source=lnms&tbm=isch&sa=X&ved=2ahUKEwj55PT8qdfnAhVowzgGHUSyA98Q_AUoAXoECBIQAw&biw=1440&bih=737");

//$html = file_get_html("https://www.google.com/search?sxsrf=ACYBGNQeeQM1idXCrp2IHFPnPSwaxrxMSw:1581903767117&q=random+image&tbm=isch&source=univ&client=firefox-b-d&sa=X&ved=2ahUKEwjJlO7gutfnAhVuwTgGHaeKDcAQsAR6BAgJEAE");

//$html = file_get_html("https://www.google.com/search?q=random+image");
//$html = file_get_html("https://pixabay.com/images/search/wallpaper/");
//$html = file_get_html("https://www.pexels.com/search/HD%20wallpaper/");

//$html = file_get_html("https://unsplash.com/wallpapers");
//$html = file_get_html("https://wallpaperscraft.com/");
$html = file_get_html("https://www.dek-d.com/board/view/3202947/");

$a = array();
// remove all image
foreach($html->find('img') as $e){
    //echo "<a href=".$e->src .">l</a>" ;
    
    array_push($a,$e);

    $e->outertext = "IMG";
   // echo ($e->outertext);

}


 foreach($a as $ai){

    echo $ai->innertext;
 }

// replace all input
foreach($html->find('input') as $e){
    $e->outertext = $e->name;
}
   


// dump contents
echo $html;
?>