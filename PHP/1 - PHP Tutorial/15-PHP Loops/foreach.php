<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP foreach Loop</title>
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
    <h2 class="heading">PHP foreach Loop</h2>

    <?php
    echo "<h3>The foreach Loop on Arrays</h3>";

    $colors = array("red", "green", "blue", "yellow"); 

    foreach ($colors as $x) {
        echo "$x <br>";
    }

    // Keys and Values
    echo "<h3>Keys and Values</h3>";

    $members = array("Disha"=>"21", "Harsh"=>"17", "Isha"=>"22");

    foreach($members as $x => $y){
        echo "$x : $y"."<br>";
    }

    // The foreach Loop on Objects
    echo "<h3>The foreach Loop on Objects</h3>";

    class Car{
        public $color;
        public $model;

        public function __construct($color , $model){
            $this->color = $color;
            $this->model = $model;
        }
    }
    $myCar = new Car("red", "Thar");

    foreach ($myCar as $x => $y){
        echo "$x : $y" . "<br>";
    }

    //The break Statement
    echo "<h3>The break Statement</h3>";
    foreach ($colors as $x) {
        if ($x == "blue") break;
        echo "$x <br>";
    }

    // The continue Statement
    echo "<h3>The continue Statement</h3>";
    foreach ($colors as $x) {
        if ($x == "blue") continue;
        echo "$x <br>";
    }

    // Foreach Byref
    echo "<h3>Foreach Byref</h3>";
    foreach($colors as $x){
        if($x == "blue") $x = "pink";
    }
    var_dump($colors);

    echo "<br>";
    foreach($colors as &$x){
        if($x == "blue") $x = "pink";
    }
    var_dump($colors);

    // Alternative Syntax
    echo "<h3>Alternative Syntax</h3>";
    foreach ($colors as $x) :
        echo "$x <br>";
    endforeach;
    ?>
</body>
</html>