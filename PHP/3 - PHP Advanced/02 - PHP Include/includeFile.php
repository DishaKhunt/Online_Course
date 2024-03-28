<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Include Files</title>
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
    <h2 class="heading">PHP Include Files</h2>

    <div class="menu">
        <?php include 'menu.php';?>
    </div>

    <h1>Welcome to my home page!</h1>

    <?php include 'vars.php';
        echo "I have a $color $car.";
    ?>
    
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php include 'footer.php';?>


    <?php require 'noFileExists.php';
        echo "I have a $color $car.";
    ?> 
</body>
</html>