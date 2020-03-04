<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Signin Template for Bootstrap</title>
       <!-- <script type="text/javascript">
          var onloadCallback = function() {
            grecaptcha.render('html_element', {
              'sitekey' : '6LcrtNsUAAAAAKuhXGb9BGqa1NUP2-Iz7Aep0kSZ'//localhost
             // 'sitekey' : '6LdeENwUAAAAAFk_qIf00VJ31LAK7hp8sKMWhpZc' //ubtsichol.com
            });
          };
        </script>
        -->

        <!-- Bootstrap core CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../../sign-in.css" rel="stylesheet">
      
    </head>
    <body class="text-center">
        <form class="form-signin" action="<?=base_url('index.php/user/login')?>" method="post" accept-charset="utf-8">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <center>
                <input type="text" name="email" value="test@gmail.com" size="50" class="form-control" placeholder="Email address"/>
                <br>
                <input type="text" name="pass" value="12345678" size="50" class="form-control" placeholder="Email address"/>
                <div class="html_element">
                    <label>html
</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <a class="mt-5 mb-3 text-muted" href="https://www.ubtsichol.com">&copy; 2020</a>
                <link/>
                <link/>
            </center>
        </form>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
       <!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer> </script> -->
    </body>
   
</html>
