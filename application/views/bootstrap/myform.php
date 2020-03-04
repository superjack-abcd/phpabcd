<html>
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
    </head>
    <body>

    <?php echo validation_errors(); ?>
            <?php echo form_open('user/login'); ?>
        <center>
            
            <h5>Username</h5>
            <input type="text" name="email" value="" size="50"/>
            <h5>Password</h5>
            <input type="text" name="pass" value="" size="50"/>
            <div>
                <input type="submit" value="Submit"/>
            </div>
        </center>
    </form>
</body>
