<!DOCTYPE html>
<html>
<head>
    <title>Image Upload Results</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div>
        <h3>Congratulations, the image has successfully been uploaded</h3>
        <p>Click here to view the image you just uploaded
           
            <a href="<?=base_url("../images/".$image_metadata['file_name'])?>" >View My Image!</a>
        
        </p>

        <p>
            <?php //echo anchor('imageupload', 'Go back to Image Upload'); ?>
            <a href="<?=base_url('index.php/ImageUpload/upload')?>" >Go back to Image Upload</a>

        </p>
    </div>
</body>
</html>
