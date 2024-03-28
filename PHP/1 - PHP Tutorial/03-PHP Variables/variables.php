<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variable</title>
</head>
<body>

    <h2>PHP Variables</h2>

    <?php

    /*
        PHP supports the following data types:

            String
            Integer
            Float (floating point numbers - also called double)
            Boolean
            Array
            Object
            NULL
            Resource
     */

    $x = 5;  //$x is an integer
    $y = "Disha"; //$y is an String
    $z = 2;


    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";


    echo "My name is $y";
    echo "<br>";

    echo "My name is ".$y."!!";
    echo "<br>";

    // addition
    echo "Addition of $x and $z is : ". $x + $z;


    // To get the data type of a variable, use the var_dump() function.
    echo "<h2>Get the Type</h2>";
    var_dump(5);
    echo "<br>";
    var_dump("Disha");
    echo "<br>";
    var_dump(3.14);
    echo "<br>";
    var_dump(true);
    echo "<br>";
    var_dump([2, 3, 56]);
    echo "<br>";
    var_dump(NULL);

    // Assign Multiple Values
    echo "<h2>Assign Multiple Values</h2>";

    $a1 = $b1 = $c1 = "Disha";
    echo $a1;
    echo $b1;
    echo $c1;
    ?>

</body>
</html>