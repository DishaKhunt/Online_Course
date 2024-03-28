<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Delete Array Items</title>
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
    <h2 class="heading">PHP Delete Array Items</h2>

    <?php
        echo "<h3>Remove Array Item</h3>";

        $cars = array("Verna", "BMW", "Thar");
        array_splice($cars, 1,1);
        var_dump($cars);

        //  Using the unset Function
        echo "<h3>Using the unset Function</h3>";
        $cars = array("Verna", "BMW", "Thar");
        unset($cars[0]);
        var_dump($cars);
        
        // Remove Multiple Array Items
        echo "<h3>Remove Multiple Array Items</h3>";
        $cars = array("Verna", "BMW", "Thar");
        array_splice($cars, 1,2);
        var_dump($cars);
        
        echo "<br>";
        // use unset function.
        $cars = array("Verna", "BMW", "Thar");
        unset($cars[0],$cars[1]);
        var_dump($cars);

        echo "<br>";

        // Using the array_diff Function
        echo "<h3>Using the array_diff Function</h3>";
        $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
        $newArr = array_diff($cars, ["Mustang", 1964]);
        var_dump($newArr);
        echo "<br>";

        // Remove the Last Item
        echo "<h3>Remove the Last Item</h3>";
        // The array_pop() function removes the last item of an array.
        $cars = array("Verna", "BMW", "Thar");
        array_pop($cars);
        var_dump($cars); 

        // Remove the First Item
        echo "<h3>Remove the First Item</h3>";
        $cars = array("Volvo", "BMW", "Toyota");
        array_shift($cars);
        var_dump($cars);
    ?>
</body>
</html>