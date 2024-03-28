<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Add Array Items</title>
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
    <h2 class="heading">PHP Add Array Items</h2>

    <?php
        // Add Array Item
        echo "<h3>Add Array Item</h3>";
        $fruits = array("Apple", "Banana", "Cherry");
        $fruits[] = "Orange";

        var_dump($fruits);
        echo "<br>";

        // Associative Arrays
        echo "<h3>Associative Arrays</h3>";
        $car = array("brand" => "Ford", "model" => "Mustang");
        $car["color"] = "Red";

        var_dump($car);
        echo "<br>";

        // Add Multiple Array Items
        echo "<h3>Add Multiple Array Items</h3>";
        array_push($fruits, "Orange", "Kiwi", "Lemon");

        var_dump($fruits);

        // Add Multiple Items to Associative Arrays
        echo "<h3>Add Multiple Items to Associative Arrays</h3>";
        $car += ["color"=> "red", "year"=> 1964];
        var_dump($car);


    ?>
</body>
</html>