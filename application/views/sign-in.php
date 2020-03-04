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
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="sign-in.css" rel="stylesheet">
        <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LcrtNsUAAAAAKuhXGb9BGqa1NUP2-Iz7Aep0kSZ'//localhost
         // 'sitekey' : '6LdeENwUAAAAAFk_qIf00VJ31LAK7hp8sKMWhpZc' //ubtsichol.com
        });
      };
    </script>

    </head>
    <body class="text-center">
        <form class="form-signin" action="<?=base_url('user/login')?>" method="post" accept-charset="utf-8">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="email" class="sr-only">Email address</label>
            <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="pass" class="sr-only">Password</label>
            <input type="password" id="pass" class="form-control" placeholder="Password" required>
            <div class="html_element">
                <label>
</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        </form>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
</html>
