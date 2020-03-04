
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
        <div class="container">
            <h2>Carousel Example</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <?php $index = 0; ?>
                <ol class="carousel-indicators">
                <?php foreach ($todo_list as $item):?>
                    <li data-target="#myCarousel" data-slide-to="<?=$index;?>"></li>
                   <?php $index++;
                       
                   ?>
                <?php endforeach;?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    
                <?php foreach ($todo_list as $item):?>
                    <div class="item active">
                        <img src="<?= $item?>" alt="Los Angeles" style="width:100%;">
                    </div>
                   
                    <?php endforeach;?>
                </div>
                
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
            </div>
        </div>
    </body>
</html>