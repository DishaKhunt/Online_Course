<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constants</title>
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
    <h2 class="heading">PHP Constants</h2>

    <?php
    // Create a PHP Constant
    echo "<h3>Create a PHP Constant</h3>";

    // case-sensitive constant name
    define("GREETING", "Welcome to PHP!");
    echo GREETING;

    // case-insensitive constant name
    // case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false.
    // echo greeting;

    // PHP const Keyword
    // const are always case-sensitive
    // const cannot be created inside another block scope, like inside a function or inside an if statement.
    echo "<h3>PHP const Keyword</h3>";
    const MYCAR = "Thar";
    echo MYCAR. "<br>";

    // PHP Constant Arrays
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];

    // Constants are Global
    echo "<h3>Constants are Global</h3>";
    function mytest(){
        echo GREETING;
    }
    mytest();
    ?>
</body>
</html>