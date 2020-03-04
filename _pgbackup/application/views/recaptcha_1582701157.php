<html>
    <head>
        <!-- Bootstrap core CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../../sign-in.css" rel="stylesheet">
        <title>reCAPTCHA demo: Explicit render after an onload callback</title>
        <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LcrtNsUAAAAAKuhXGb9BGqa1NUP2-Iz7Aep0kSZ'//localhost
         // 'sitekey' : '6LdeENwUAAAAAFk_qIf00VJ31LAK7hp8sKMWhpZc' //ubtsichol.com
        });
      };
    </script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../../sign-in.css" rel="stylesheet">
    </head>
    <body>
        <form action="?" method="POST">
            <div id="html_element"></div>
            <br>
            <input type="submit" value="Submit">
        </form>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
