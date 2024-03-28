<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Associative Arrays</title>
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
    <h2 class="heading">PHP Associative Arrays</h2>

    <?php
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    echo var_dump($car);

    echo "<h3>Access Associative Arrays</h3>";
    echo "Model Name : ". $car["model"];

    echo"<h3>Change Value</h3>";
    $car["year"] = 2024;
    echo var_dump($car);

    echo "<h3>Loop Through an Associative Array</h3>";
    foreach($car as $x => $y){
        echo "$x : $y <br>";
    }
    ?>
</body>
</html>