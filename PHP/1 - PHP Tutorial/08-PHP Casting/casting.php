<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Casting</title>
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
    <h2 class="heading">PHP Casting</h2>

    <!-- 
        Change Data Type:
            Casting in PHP is done with these statements:

            (string) - Converts to data type String
            (int) - Converts to data type Integer
            (float) - Converts to data type Float
            (bool) - Converts to data type Boolean
            (array) - Converts to data type Array
            (object) - Converts to data type Object
            (unset) - Converts to data type NULL
     -->
    <pre>
    <?php

    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL
    $f = "25 kilometers"; // String
    $g = "kilometers 25"; // String
    $h = 0;  //Integer
    $i = -1; //Integer
    $j = "";  //Null
    
    // Cast to String
    echo "<h3>Cast to String</h3>";

    $a1 = (string) $a;
    $b1 = (string) $b;
    $c1 = (string) $c;
    $d1 = (string) $d;
    $e1 = (string) $e;

    // To verify the type of any object in PHP, use the var_dump() function:
    echo "$a &#10170; ", var_dump($a1);
    echo "<br>";
    echo "$b &#10170; ", var_dump($b1);
    echo "<br>";
    echo "$c &#10170; ", var_dump($c1);
    echo "<br>";
    echo "$d &#10170; ", var_dump($d1);
    echo "<br>";
    echo "$e &#10170; ", var_dump($e1);
    echo "<hr>";

    // Cast to integer
    echo "<h3>Cast to Integer</h3>";
    
    $a2 = (int) $a;
    $b2 = (int) $b;
    $c2 = (int) $c;
    $d2 = (int) $d;
    $e2 = (int) $e;
    $f2 = (int) $f;
    $g2 = (int) $g;
    
    // To verify the type of any object in PHP, use the var_dump() function:
    echo "$a &#10170; ", var_dump($a2);
    echo "<br>";
    echo "$b &#10170; ", var_dump($b2);
    echo "<br>";
    echo "$c &#10170; ", var_dump($c2);
    echo "<br>";
    echo "$d &#10170; ", var_dump($d2);
    echo "<br>";
    echo "$e &#10170; ", var_dump($e2);
    echo "<br>";
    echo "$f &#10170; ", var_dump($f2);
    echo "<br>";
    echo "$g &#10170; ", var_dump($g2);
    echo "<hr>";

    // Cast to Float
    echo "<h3>Cast to Float</h3>";
    
    $a3 = (float) $a;
    $b3 = (float) $b;
    $c3 = (float) $c;
    $d3 = (float) $d;
    $e3 = (float) $e;
    $f3 = (float) $f;
    $g3 = (float) $g;
    
    // To verify the type of any object in PHP, use the var_dump() function:
    echo "$a &#10170; ", var_dump($a3);
    echo "<br>";
    echo "$b &#10170; ", var_dump($b3);
    echo "<br>";
    echo "$c &#10170; ", var_dump($c3);
    echo "<br>";
    echo "$d &#10170; ", var_dump($d3);
    echo "<br>";
    echo "$e &#10170; ", var_dump($e3);
    echo "<br>";
    echo "$f &#10170; ", var_dump($f3);
    echo "<br>";
    echo "$g &#10170; ", var_dump($g3);
    echo "<hr>";

    // Cast to Boolean
    echo "<h3>Cast to Boolean</h3>";
    
    $a4 = (bool) $a;
    $b4 = (bool) $b;
    $c4 = (bool) $c;
    $d4 = (bool) $d;
    $e4 = (bool) $e;
    $h4 = (bool) $h;
    $i4 = (bool) $i;
    $j4 = (bool) $j;
    
    // To verify the type of any object in PHP, use the var_dump() function:
    echo "$a &#10170; ", var_dump($a4);
    echo "<br>";
    echo "$b &#10170; ", var_dump($b4);
    echo "<br>";
    echo "$c &#10170; ", var_dump($c4);
    echo "<br>";
    echo "$d &#10170; ", var_dump($d4);
    echo "<br>";
    echo "$e &#10170; ", var_dump($e4);
    echo "<br>";
    echo "$h &#10170; ", var_dump($h4);
    echo "<br>";
    echo "$i &#10170; ", var_dump($i4);
    echo "<br>";
    echo "$j &#10170; ", var_dump($j4);
    echo "<hr>";

    //  Cast to Array
    echo "<h3>Cast to Array</h3>";

    $a5 = (array) $a;
    $b5 = (array) $b;
    $c5 = (array) $c;
    $d5 = (array) $d;
    $e5 = (array) $e;
   

    // To verify the type of any object in PHP, use the var_dump() function:
    echo "$a &#10170; ", var_dump($a5);
    echo "<br>";
    echo "$b &#10170; ", var_dump($b5);
    echo "<br>";
    echo "$c &#10170; ", var_dump($c5);
    echo "<br>";
    echo "$d &#10170; ", var_dump($d5);
    echo "<br>";
    echo "$e &#10170; ", var_dump($e5);
    echo "<hr>";

    Class Car{
        public $color;
        public $model;

        public function __construct($color, $model){
            $this->color = $color;
            $this->model = $model;
        }

        public function message(){
            return "My car is a ".$this->color." ".$this->model. "!";
        }
    }

    $myCar = new Car("red", "Thar");
    
    $myCar = (array) $myCar;
    var_dump($myCar);

    echo "<hr>";

    // Cast to Object
    echo "<h3>Cast to Object</h3>";

    $a6 = (object) $a;
    $b6 = (object) $b;
    $c6 = (object) $c;
    $d6 = (object) $d;
    $e6 = (object) $e;
    
 
    // To verify the type of any object in PHP, use the var_dump() function:
    echo "$a &#10170; ", var_dump($a6);
    echo "<br>";
    echo "$b &#10170; ", var_dump($b6);
    echo "<br>";
    echo "$c &#10170; ", var_dump($c6);
    echo "<br>";
    echo "$d &#10170; ", var_dump($d6);
    echo "<br>";
    echo "$e &#10170; ", var_dump($e6);
    echo "<br>";

    $x = array("Verna","Thar","BMW");
    $y = array("Disha"=>"21", "Harsh"=>"17", "Isha"=>"22");

    $x = (object) $x;
    $y = (object) $y;

    var_dump($x);
    var_dump($y);
    echo "<hr>";

    // Cast to NULL
    // echo "<h3>Cast to NULL</h3>";

    // $a7 = (unset) $a;
    // $b7 = (unset) $b;
    // $c7 = (unset) $c;
    // $d7 = (unset) $d;
    // $e7 = (unset) $e;
     
 
    // // To verify the type of any object in PHP, use the var_dump() function:
    // echo "$a &#10170; ", var_dump($a7);
    // echo "<br>";
    // echo "$b &#10170; ", var_dump($b7);
    // echo "<br>";
    // echo "$c &#10170; ", var_dump($c7);
    // echo "<br>";
    // echo "$d &#10170; ", var_dump($d7);
    // echo "<br>";
    // echo "$e &#10170; ", var_dump($e7);
    // echo "<hr>";
    ?>
    </pre>
</body>
</html>