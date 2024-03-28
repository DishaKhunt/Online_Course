<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Concatenate Strings</title>
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
    <h2 class="heading">PHP - Concatenate Strings</h2>

    <?php
    // String Concatenation
    // To concatenate, or combine, two strings you can use the . operator
    echo "<h3>String Concatenation</h3>";

    $x = "Hello";
    $y = "Disha";
    $z = $x . $y;
    $p = $x . " " .$y;
    $q = "$x $y";

    echo $z;
    echo "<br>";
    echo $p;
    echo "<br>";
    echo $q;
    ?>
</body>
</html>