<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Access Arrays</title>
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
    <h2 class="heading">PHP Access Arrays</h2>

    <?php
    $cars = array("Verna", "BMW", "Thar");
    echo var_dump($cars);
    echo "<br>";

    echo "<h3>Access Array Item</h3>";
    echo  "\$cars[2] :  ".$cars[2];
    echo "<br>";

    $car = array("brand" => "Ford" , "model" => "Mustang", "year"=> 1964);
    echo "\$car['year'] : ".$car["year"];
    
    // Double or Single Quotes
    echo "<h3>Double or Single Quotes</h3>";
    echo '$car["model"] : '.$car["model"] . "<br>";
    echo "\$car['model'] : ".$car['model'] . "<br>";

    // Excecute a Function Item
    echo "<h3>Excecute a Function Item</h3>";
    function myFunction() {
        echo "I come from a function!";
    }
      
    // $myArr = array("Verna", 15, myFunction);
      
    // echo $myArr[2]();

    $myArr = array("car" => "Verna", "age" => 10, "message" => myFunction());

    // $myArr["message"]();

    // Loop Through an Associative Array
    echo "<h3>Loop Through an Associative Array</h3>";
    foreach($car as $x => $y){
        echo "$x :$y <br>";
    }
    echo "<br>";
    // Loop Through an Indexed Array
    foreach($cars as $x){
        echo "$x <br>";
    }
    ?>
</body>
</html>