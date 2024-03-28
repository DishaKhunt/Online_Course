<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP echo Statements</title>
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
    <h2 class = "heading">PHP echo Statements</h2>

    <!-- 
        The echo statement can be used with or without parentheses: echo or echo().
     -->
    <?php
    // display text
     echo "<h2>PHP is fun!</h2>";
     echo "Hello Disha!<br>";
     echo "I'm about to learn PHP!<br>";
     echo "This ", "String ", "was ", "made ","with multiple parameters.";

     echo "<hr>";

    //  display variable
    $txt1 = "Learn PHP";
    $txt2 = "Disha";
    $x = 5;
    $y = 2;

    echo "<h2>". $txt1 ."</h2>";
    echo "My name is ".$txt2 ."<br>";
    echo "addition of $x and $y is : ".$x+$y;
    ?>
</body>
</html>