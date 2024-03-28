<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Indexed Arrays</title>
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
    <h2 class="heading">PHP Indexed Arrays</h2>

    <?php
    echo "<h3>PHP Indexed Arrays</h3>";

    $cars = array("Verna", "Thar", "BMW");
    echo var_dump($cars);
    echo "<hr>";

    echo "<h3>Access Indexed Arrays</h3>";

    echo $cars[0];
    echo "<hr>";

    echo "<h3>Change Value</h3>";
    $cars[1] = "Toyota";
    echo var_dump($cars);
    echo "<hr>";

    echo "<h3>Loop Through an Indexed Array</h3>";
    foreach($cars as $x){
        echo "$x <br>";
    }
    echo "<hr>";

    echo "<h3>Index Number</h3>";
    $cars[0] = "Verna";
    $cars[1] = "BMW";
    $cars[2] = "Thar";

    array_push($cars, "Toyota");
    var_dump($cars);
?>

    ?>
</body>
</html>