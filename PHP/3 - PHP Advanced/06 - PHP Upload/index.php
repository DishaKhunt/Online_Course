

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload</title>
    <style>
        .heading{
            margin: 10px 0px;
            padding: 10px;
            background: linear-gradient(#e8bdee, #ad6ab5, #57245e, #45134b);
            color: #fae4fd;
        }
    </style>
</head>
<body>
    <h2 class="heading">PHP File Upload</h2>

    <form action="" method="post" enctype="multipart/form-data">
        Select image to upload:  <br>
        <input type="file" name="image" > <br> <br>
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php
    if(isset($_FILES['image'])){
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
    }

    if(move_uploaded_file($file_tmp, "Upload-Images/". $file_name)){
        "Successfully Uploaded";
    }
    else{
        echo "Could not upload the file.";
    }
    ?>
    
</body>
</html>