<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP print Statement</title>
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
    <h2 class = "heading">PHP print Statement</h2>

    <!-- 
        The print statement can be used with or without parentheses: print or print().
     -->
    <?php
    // display text
    print "<h2>PHP is Fun!!</h2>";
    print "Hello Disha!! <br>";
    print "I'm about to learn PHP!!!";

    print "<hr>";

     //  display variable
     $txt1 = "Learn PHP";
     $txt2 = "Disha";
     $x = 5;
     $y = 2;

     
    print "<h2>". $txt1 ."</h2>";
    print "My name is ".$txt2 .".<br>";
    print "Addition of $x and $y is : ".$x+$y;
    ?>
</body>
</html>