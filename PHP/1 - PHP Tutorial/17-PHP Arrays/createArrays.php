<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Create Arrays</title>
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
    <h2 class="heading">PHP Create Arrays</h2>

    <?php
        // create array
        echo "<h3>Create Arrays</h3>";
        // $car = array("Thar", "BMW", "Verna");
        $car = ["Thar", "BMW", "Verna"];
        echo var_dump($car);

        // Multiple Lines
        $car = [
            "Thar", 
            "BMW", 
            "Verna"
        ];

        // Trailing Comma
        // A comma after the last item is allowed:
        //  $car = [
        //     "Thar", 
        //     "BMW", 
        //     "Verna",
        // ];

        // Array Keys
        echo "<h3>Array Keys</h3>";
        $car = [
            0 => "Thar",
            1 => "BMW",
            2 => "Verna"
        ];
        echo var_dump($car);
        echo "<br>";

        $myCar = [
            "brand" => "Ford",
            "model" => "Mustang",
            "year" => 1964
        ];
        echo var_dump($myCar);

        // Declare Empty Array
        echo "<h3>Declare Empty Array</h3>";
        $cars = [];
        $cars[0] = "Verna";
        $cars[1] = "Thar";
        $cars[2] = "BMW";
        echo var_dump($cars);
        echo "<br>";

        $myCar = [];
        $myCar["brand"] = "Ford";
        $myCar["model"] = "Mustang";
        $myCar["year"] = 1964;

        echo var_dump($myCar);
        echo "<br>";

        // Mixing Array Keys
        $myArr = [];
        $myArr[0] = "apples";
        $myArr[1] = "bananas";
        $myArr["fruits"] = "cherries";

        echo var_dump($myArr);
    ?>
</body>
</html>