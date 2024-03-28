<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP- Modify Strings</title>
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
    <h2 class = "heading">PHP - Modify Strings</h2>

    <?php
    // Upper Case
    echo "<h3>Upper Case</h3>";
    $x = "Disha Khunt!!!";
    echo strtoupper($x);

    echo "<hr>";

    // Lower Case
    echo "<h3>Lower Case</h3>";
    echo strtolower($x);

    echo "<hr>";

    // Replace String
     echo "<h3>Replace String</h3>";
     echo str_replace("Disha", "Manshi", $x);   

     echo "<hr>";

    // Reverse String
    echo "<h3>Reverse  String</h3>";
    echo strrev($x);

    echo "<hr>";

    // Remove Whitespace
    $y = "    Disha!!!    ";
    echo "<h3>Remove Whitespace</h3>";
    echo trim($y);

    echo "<hr>";

    // Convert String into Array
    // The PHP explode() function splits a string into an array.
    echo "<h3>Convert String into Array</h3>";

    //Use the print_r() function to display the result:
    $z = explode(" ", $x);
    print_r($z);

    ?>
</body>
</html>