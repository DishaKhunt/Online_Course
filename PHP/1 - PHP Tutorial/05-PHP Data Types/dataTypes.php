<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
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
    <h2 class="heading">PHP Data Types</h2>
    <!-- 
        PHP supports the following data types:

        String
        Integer
        Float (floating point numbers - also called double)
        Boolean
        Array
        Object
        NULL
        Resource

     -->

    <?php
    //  Getting the Data Type
    echo "<h3>Getting the Data Type</h3>";
    $x = 5;
    echo "$x &#10170; ",var_dump($x);

    echo "<hr>";

    // PHP String
    echo "<h3>PHP String</h3>";
    $str1 = "Hello Disha!";
    $str2 = 'Hello Disha!';

    var_dump($str1);
    echo "<br>";
    var_dump($str2);

    echo "<hr>";

    // PHP Integer
    echo "<h3>PHP Integer</h3>";
    $y = 2003;
    echo "$y &#10170; " ,var_dump($y);

    echo "<hr>";

    // PHP Float
    echo "<h3>PHP Float</h3>";
    $f = 52.3;
    echo "$f &#10170; ",var_dump($f);

    echo "<hr>";

    // PHP Boolean
    echo "<h3>PHP Boolean</h3>";
    $b = true;
    echo "$b &#10170; ",var_dump($b);

    echo "<hr>";

    // PHP Array
    echo "<h3>PHP Array</h3>";

    $cars = array("Verna", "Thar","BMW");
    echo "$cars &#10170; ",var_dump($cars);

    echo "<hr>";

    // PHP Object
    echo "<h3>PHP Object</h3>";

    class Car {
        public $color;
        public $model;
        public function __construct($color, $model){
            $this->color = $color;
            $this->model = $model;
        }
        public function message(){
            return "My car is a ".$this->color. " ".$this->model . "!";
        }
    }

    $myCar = new car("red","Verna");
    var_dump($myCar);

    echo "<hr>";

    // PHP NULL Value
    echo "<h3>PHP NULL Value</h3>";

    $n = "Hello world!";
    $n = null;
    echo "$n &#10170; ",var_dump($n);

    echo "<hr>";


    // Change Data Type
    echo "<h3>Change Data Type</h3>";
    $x = (string) $x;
    var_dump($x);



    ?>
</body>
</html>