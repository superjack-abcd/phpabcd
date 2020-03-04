
function index(){
    feed_instagram();

}
//index();

<?php
// use this instagram access token generator http://instagram.pixelunion.net/
$access_token="CHANGE_TO_YOUR_ACCESS_TOKEN";
$photo_count=9;
     
$json_link="https://api.instagram.com/v1/users/self/media/recent/?";
$json_link.="access_token={$access_token}&count={$photo_count}";
?>

<?php

$json = file_get_contents($json_link);
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);

?>
function feed_instagram($url = "https://www.instagram.com/titaniumheart_")
{  
    //$url ie https://www.instagram.com/titaniumheart_

    $dom = new DOMDocument();
    @$dom->loadHTMLFile($url);
    $f=$dom->saveHTML();  //load the url (crawl)

    $key="";    
    $swquote=0;     
    echo "<div>";

    for ($x=0;$x<strlen($f);$x++)
    {
       $c=substr($f,$x,1);
       //echo $c."-";
        if ($c==chr(34)) 
        {
            if($swquote==0)
            {
                $swquote=1; //to start get chars
            } else
            {
                $swquote=0;
                //echo $key;
                if($key=="code")
                {
                    //get the number of comments
                    $m=substr($f,$x+4,100);
                    $code= substr($m,0,strpos($m,chr(34)));
                    echo "code is ".$code;
                    echo "<br>";
                }               
                if($key=="comments")
                {
                    //get the number of comments
                    $m=substr($f,$x+12,20);
                    $comments= substr($m,0,strpos($m,"}"));
                    echo "number of comments is ".$comments;
                    echo "<br>";
                }
                if($key=="caption")
                {
                    //get the number of comments
                    $m=substr($f,$x+4,200);
                    $caption= substr($m,0,strpos($m,chr(34)));
                    echo "caption is ".$caption;
                    echo "<br>";
                }
                if($key=="likes")
                {
                    //get the number of comments
                    $m=substr($f,$x+12,20);
                    $likes= substr($m,0,strpos($m,"}"));
                    echo "number of likes is ".$likes;
                    echo "<br>";
                }
                if($key=="thumbnail_src")
                {
                    //get the number of comments
                    $m=substr($f,$x+4,200);
                    $src= substr($m,0,strpos($m,"?"));
                    echo "<br>image source is ".$src;
                    echo "<br>";                                    
                    echo "<a href=\"https://www.instagram.com/p/".$code."/\">";
                    echo "<img src=\"".$src."\">";
                    echo "</a><br>";                    
                }                               
               $key="";
        }

    }else
    {
        if($swquote==1)
        {
            $key.=$c;
        }
    }           
}
echo "</div>";
}