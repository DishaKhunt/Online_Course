<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
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
    <h2 class="heading">PHP Functions</h2>

    <?php
    echo "<h3>Call a Function</h3>";

    function myMessage(){
        echo "Hello Disha!!!";
    }
    myMessage();

    echo "<h3>PHP Function Arguments</h3>";
    function familyName($fname){
        echo "$fname Khunt.<br>";
    }

    familyName("Disha");
    familyName("Harsh");
    familyName("Manshi");
    familyName("Miraj");
    familyName("Hemaxi");

    echo "<br>";

    function familyName1($fname,$year){
        echo "$fname Khunt. Born in $year<br>";
    }

    familyName1("Disha", "2003");
    familyName1("Harsh","2007");
    familyName1("Manshi", "2002");
    familyName1("Miraj", "2002");
    familyName1("Hemaxi", "1998");


    echo "<h3>PHP Default Argument Value</h3>";

    function setHeight($minheight = 50){
        echo "The height is : $minheight <br>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

    echo "<h3>PHP Functions - Returning values</h3>";
    function sum($x, $y){
        $z = $x + $y;
        return $z;
    }

    echo "5 + 2 = ". sum(5,2)."<br>";
    echo "25 + 23 = ". sum(25,23)."<br>";
    echo "10 + 2 = ". sum(10,2);

    echo "<h3>Passing Arguments by Reference</h3>";
    function add_five(&$value){
        $value += 5;
    }

    $num = 2;
    add_five($num);
    echo $num;

    // Variable Number of Arguments
    echo "<h3>Variable Number of Arguments</h3>";
    function sumMyNumbers(...$x){
        $n = 0;
        $len = count($x);
        for($i = 0; $i < $len; $i++ ){
            $n += $x[$i];
        }
        return $n;
    }

    $a = sumMyNumbers(5,2,6,2,7,7);
    echo "Sum of Number : ".$a;
    echo "<br><br>";

    function myFamily($lastname, ...$firstname){
        $txt = "";
        $len = count($firstname);
        for($i = 0; $i < $len; $i++){
            $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
        }
        return $txt;
    }

    $a = myFamily("Khunt","Disha", "Manshi", "Miraj", "Harsh", "Hemaxi");
    echo $a;
    echo "<br>";

    // declare(strict_type=1);
    // function addNumbers(int $a, int $b){
    //     return $a+$b;
    // }
    // echo addNumbers(5, "5 days");

    echo "<h3>PHP Return Type Declarations</h3>";
    declare(strict_type=1);

    function addNumbers(float $a, float $b): float{
        return $a + $b;
    }
    echo "Sum of 1.2 and 5.2 is : ".addNumbers(1.2, 5.2);
    echo "<br>";

    function addNumbers1(float $a, float $b): int {
        return $a + $b;
    }
    echo "Sum of 1.2 and 5.2 is : ".addNumbers1(1.2, 5.2);
    ?>
</body>
</html>