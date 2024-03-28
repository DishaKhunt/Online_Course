<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Escape Characters</title>
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
    <h2 class="heading">PHP - Escape Characters</h2>

    <?php
    $x = "My name is \"Disha\".";
    $x1 = 'My name is \'Disha\'.';
    $x2 = "\$522003";
    $x3 = "Hello\nDisha";
    $x4 = "Hello\rDisha";
    $x5 = "Hello\tDisha";
    $x6 = "\110\145\154\154\157";
    $x7 = "\x48\x65\x6c\x6c\x6f";

    echo $x;
    echo "<br>";
    echo $x1;
    echo "<br>";
    echo $x2;
    echo "<br>";
    echo $x3;
    echo "<br>";
    echo $x4;
    echo "<br>";
    echo $x5;
    echo "<br>";
    echo $x6;
    echo "<br>";
    echo $x7;
    ?>
</body>
</html>