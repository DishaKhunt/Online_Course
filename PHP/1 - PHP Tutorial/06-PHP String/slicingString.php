<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Slicing Strings</title>
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
    <h2 class="heading">PHP - Slicing Strings</h2>

    <?php
    // Slicing
    $x = "Hello Disha!";
    echo substr($x, 6, 5);    

    echo "<hr>";
    // Slice to the End
    echo "<h3>Slice to the End</h3>";

    echo substr($x,6);
    echo "<hr>";

    // Slice From the End
    echo "<h3>Slice From the End</h3>";
    echo substr($x, -5, 3);
    echo "<hr>";


    // Negative Length
    echo "<h3>Negative Length</h3>";
    echo substr($x, 5, -3);
    ?>
</body>
</html>