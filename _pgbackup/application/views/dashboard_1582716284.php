<?php
  /*  if(!isset($img_src)){
        echo "random image not found";
        $img_src ="https://images.unsplash.com/photo-1579972954555-291cac46b927?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjIwOTIyfQ" ;

    }
*/
echo $img_src;

if(!isset($img_src)){
    die("missing data");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Website Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <style>.fakeimg { height: 200px; background: #aaa; }</style>
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>Personal development via presentation with time-frame.</h1>
            <p>Depression creap me in by lonelyness in human communication .<br>How about drug and daily drug ingest and appoint every month.</p> 
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="mailto:teer4y00t@gmail.com?Subject=Hello">Contact</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('index.php/ImageRandom')?>">Album</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('index.php/webdevelop')?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        >
</li>
                    <li class="nav-item">
</li>
                    <li class="nav-item">
</li>                     
                </ul>
            </div>             
        </nav>
        <div class="container" style="margin-top:30px">
            <div class="row">
                <div class="col-sm-4">
                    <h2>About Me</h2>
                    <h5>Photo of me:</h5>
                    <div class="fakeimg">
                        <img src="../../images/20191228_103121_resize_37.jpg" width="100%">
                    </div>
                    <p></p>
                    <p>I shy to use selfie photo</p>
                    <h3>Some Links&nbsp;</h3>
                    <p>Lorem ipsum dolor sit ame.</p>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" disabled href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" disabled href="#">Photos (Longtime)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <hr class="d-sm-none">
                </div>
                <div class="col-sm-8">
                    <h2>Random images</h2>
                    <h5>Title description, Feb 14, 2020</h5>
                    <?php echo "<img src=\"$img_src\" width=\"100%\" > " ?>
                    <!--<img src="https://images.unsplash.com/photo-1579972954555-291cac46b927?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjIwOTIyfQ" width="100%"> -->
                    <!-- <img src="http://localhost:8080/ImageRandom/randImageG" width="100%"> -->
                    <p>Some text..</p>
                    <p>I have ability to reach internet right now.<br>Please comment and leave me some suggestion how to get benefit of online document .<br><br>I not like facebook and many other also in limit.<br></p>
                    <p><br></p>
                    <p></p>
                    <br>
                    <h2>Super man being on Nootropil</h2>
                    <h5>Title description, Sep 2, 2020</h5>
                    <p><br></p>
                    <div>
                        <a href="https://www.google.com/search?sxsrf=ACYBGNTo4T5mYuxXI0qQdWxgjM7ourE-IA%3A1581663220660&source=hp&ei=9ENGXpfKJMGR9QOvvq-AAQ&q=nootropil&oq=nootropil&gs_l=psy-ab.3..35i39j0i67j0l3j0i20i263l2j0l3.237.1863..2013...1.0..0.246.1407.1j7j1......0....1..gws-wiz.......0i131j0i10.8qQpvWUAJ0E&ved=0ahUKEwiXlKzTutDnAhXBSH0KHS_fCxAQ4dUDCAU&uact=5"><p> <img src="../../images/nootropil.jpg" width="30%" style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:100px;"> </p></a>
                        <link/>
                        <span style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">Image from google.com</span>
                    </div>
                    <p><span style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">Nootropil case overall newron to be interconnect left and right brain.</span><br></p>
                    <p>Come with danger that it cause memory loss.</p>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <a href="https://ubtsichol.com"><p>Copy right by SuperJack</p></a>
        </div>
    </body>
</html>
