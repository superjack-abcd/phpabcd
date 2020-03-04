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
            <h1>My First Bootstrap Page</h1>
            <p>Resize this responsive page to see the effect!</p> 
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Column 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                    <form method="post">
                        <table width="600" align="center" border="1" cellspacing="5" cellpadding="5">
                            <tr>
                                <td colspan="2"><?php echo @$error; ?></td>
                            </tr>                             
                            <tr>
                                <td width="230">Enter Your Name </td>
                                <td width="329">
                                    <input type="text" name="name"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Enter Your Email </td>
                                <td>
                                    <input type="text" name="email"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Enter Your Password </td>
                                <td>
                                    <input type="password" name="pass"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Enter Your Mobile </td>
                                <td>
                                    <input type="text" name="mobile"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Select Your Course </td>
                                <td>
                                    <select name="course">
                                        <option value="">Select Course</option>
                                        <option>PHP</option>
                                        <option>Java</option>
                                        <option>Wordpress</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="save" value="Register Me"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
