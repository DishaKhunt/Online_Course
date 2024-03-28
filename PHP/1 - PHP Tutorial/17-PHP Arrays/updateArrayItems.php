<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Update Array Items</title>
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
    <h2 class="heading">PHP Update Array Items</h2>

    <?php
        echo "<h3>Update Array Item</h3>";
        $cars = array("Verna", "BMW", "Thar");
        $cars[1] = "Ford";
        var_dump($cars);

        echo "<br>";

        $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
        $car["year"] = 2024;
        var_dump($car);

        // Update Array Items in a Foreach Loop
        echo "<h3>Update Array Items in a Foreach Loop</h3>";
        foreach($cars as $x){
            $x = "Ford";
        }
        unset($x);
        var_dump($cars);
        echo "<br>";

        foreach ($cars as &$x) {
            $x = "Ford";
        }
        $x = "ice cream";
        var_dump($cars);
    ?>
</body>
</html>