<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Signin Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../../sign-in.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <form class="form-signin" action="<?=base_url('user/login')?>" method="post" accept-charset="utf-8">
            <center>
                <input type="text" name="email" value="test@gmail.com" size="50"/>
                <br>
                <input type="text" name="pass" value="12345678" size="50"/>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
            </center>
        </form>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
