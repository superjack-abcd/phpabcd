<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron text-center">
            <a href="<?=base_url('index.php/user/login')?>"><h1 data-toggle="tooltip">My First Bootstrap Page</h1></a>
            <p>Resize this responsive page to see the effect!</p> 
        </div>
        <ul class="nav nav-tabs"> 
            <li class="active">
                <a class="nav-link" href="<?=base_url('index.php/webdevelop')?>">I am Looking for a job</a>
            </li>             
            <li></li>             
            <li></li>             
        </ul>
        <center> 
            <img src="https://images.unsplash.com/photo-1579570989638-4c80037a256c?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ" class="text-center img-responsive" style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:100px;grid-template-areas:'. Here .';"/>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Web deveopment.</h3>
                    <p>Using various tool suchas most decent php webframework.</p>
                    <p>With additional more via SQL management such as MySql ,SQLITE</p>
                    <p><br></p>
                </div>
                <div class="col-sm-4">
                    <h3>Computer bussiness bachelor</h3>
                    <p>But i prefer programming such tool C++ PHP .&nbsp;</p>
                </div>
                <div class="col-sm-4">
                    <h3>About my&nbsp;</h3> 
                    <p>Age seem unimportance because time is relative!</p>
                    <p> <img src=""> </p>
                    <p><br></p>
                </div>
            </div>
        </div>
    </body>
</html>