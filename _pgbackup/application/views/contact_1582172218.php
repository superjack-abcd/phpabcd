<!DOCTYPE html>
<html style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:100px;" class="center">
    <head>
        <title>CodeIgniter Send Email</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>
            <div>
                <h3>Use the form below to send email</h3>
                <div method="post" action="<?=base_url('email')?>" enctype="multipart/form-data">
                    <input type="email" id="to" name="to" placeholder="Receiver Email">
                    <br>
                    <br>
                    <input type="text" id="subject" name="subject" placeholder="Subject">
                    <br>
                    <br>
                    <textarea rows="6" id="message" name="message" placeholder="Type your message here"></textarea>
                    <br>
                    <br>
                    <input type="submit" value="Send Email"/>
                </div>
            </div>
        </center>
        <img src="http://pinegrow.com/placeholders/img12.jpg"/>
    </body>
</html>