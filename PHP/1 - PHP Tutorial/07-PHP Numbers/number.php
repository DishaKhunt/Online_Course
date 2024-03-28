<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>
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
    <h2 class="heading">PHP Numbers</h2>

    <!-- 
        There are three main numeric types in PHP:
            Integer
            Float
            Number Strings

        In addition, PHP has two more data types used for numbers:  
            Infinity
            NaN
     -->
    <?php
    $a = 5;
    $b = 5.23;
    $c = "25";

    echo "$a &#10170; ", var_dump($a);
    echo "<br>";
    echo "$b &#10170 ", var_dump($b);
    echo "<br>";
    echo "$c &#10170 ", var_dump($c);
    echo "<hr>";

    // PHP Integers
    echo "<h3>PHP Integers</h3>";
    echo "var_dump(is_int($a)) &#10170 ", var_dump(is_int($a));
    echo  "<br>";
    echo "var_dump(is_int($b)) &#10170 ", var_dump(is_int($b));
    echo "<hr>";

    // PHP Float
    echo "<h3>PHP Float</h3>";
    echo "var_dump(is_float($a)) &#10170 ", var_dump(is_float($a));
    echo  "<br>";
    echo "var_dump(is_float($b)) &#10170 ", var_dump(is_float($b));
    echo "<hr>";

    // PHP Infinity
    // is_finite()
    // is_infinite()
    $x = 1.9e411;
    echo "<h3>PHP Infinity</h3>";
    echo "var_dump($x) &#10170;", var_dump($x);
    echo "<hr>";

    // PHP NaN
    $y = acos(8);
    echo "<h3>PHP NaN</h3>";
    echo "var_dump($y) &#10170; ", var_dump($y);
    echo "<hr>";

    // PHP Numerical Strings
    $x1 = 5223;
    $x2 = "5223";
    $x3 = "52.23"+100;
    $x4 = "Disha";

    echo "<h3>PHP Numerical Strings</h3>";
    echo "var_dump(is_numeric($x1)) &#10170;",var_dump(is_numeric($x1));
    echo "<br>";
    echo "var_dump(is_numeric($x2)) &#10170;",var_dump(is_numeric($x2));
    echo "<br>";
    echo "var_dump(is_numeric($x3)) &#10170;",var_dump(is_numeric($x3));
    echo "<br>";
    echo "var_dump(is_numeric($x4)) &#10170;",var_dump(is_numeric($x4));
    echo "<hr>";

    // PHP Casting Strings and Floats to Integers
    echo "<h3>PHP Casting Strings and Floats to Integers</h3>";
    
    // Cast float to int
    $y1 = 522023.55;
    $int_cast = (int)$y1;
    echo "Cast float to int &#10170; ", $int_cast;
    echo "<br>";

    // Cast string to int;
    $y2 = "522023.55";
    $int_cast = (int)$y2;
    echo "Cast String to int &#10170; ",$int_cast;




    ?>
</body>
</html>