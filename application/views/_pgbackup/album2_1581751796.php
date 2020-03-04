<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Album example for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <!--<link href="../bootstrap/css/bootstrap.css" rel="stylesheet"> -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../album.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">About</h4>
                            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Contact</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="https://twitter.com/Superja95060894/photo" class="text-white">Follow on Twitter</a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/superjack.did" class="text-white">Like on Facebook</a>
                                </li>
                                <li>
                                    <a href="mailto:teer4y00t@gmail.com" class="text-white">Email me</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark box-shadow">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                            <circle cx="12" cy="13" r="4"></circle>
                        </svg> <strong>Album</strong> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>
        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Album personality</h1>
                    <p class="lead text-muted">I keep ptoto daily ,look back for more update.<br><br></p>
                    <p> <a href="#" class="btn btn-primary my-2">Main album</a> <a href="<?=base_url('imageupload/upload')?>" class="btn btn-secondary my-2">Photo tool</a><link/> </p>
                </div>
            </section>
            <div class="album py-5 bg-light">
            <div class="container">
                        <div class="row">
                        <?php foreach ($todo_list as $item):
                         
                            ?>
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src=" ">
                                </img>                                 
                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                    </div>
                <?php endforeach;?>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right"> <a href="#">Back to top</a> </p>
            <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="http://getbootstrap.com/docs/4.0/">Visit the homepage</a> or read our <a href="http://getbootstrap.com/docs/4.0/getting-started/">getting started guide</a>.</p>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!--<script src="../../jquery-3.4.1.js" ></script> -->
    <script src="../assets/js/popper.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script >
    </body></script>
