<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables Scope</title>
</head>
<body>
    <h2>PHP Variables Scope</h2>

    <?php
    /*
        PHP has three different variable scopes:

            local
            global
            static
    */

    $x = 5; //global scope

    function myTest(){
        // Using x inside this funcion genrate an error
        echo "<p>Variable x inside function is  &#10170; $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is &#10170; $x</p> <br>";

    function myTest1(){
        $y = 2; //local scope

        echo "<p>Variable y inside function is &#10170; $y</p>";
    }
    myTest1();
    // using y outside the function will generate an error
    echo "<p>Variable y outside function is &#10170; $y</p>";

    // PHP The global Keyword
    // The global keyword is used to access a global variable from within a function.
    echo "<h2>PHP The global Keyword</h2>";

    $a = 5;
    $b = 2;

    function add(){
        global $a,$b;
        $b = $a + $b;
    }
    add(); //call funtion
    echo  "Addition &#10170; ".$b; // output the new value for variable $c

    echo "<br>";

    function myTest2(){
        $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    myTest2();
    echo "Additon &#10170; ". $c;
    echo "<br><br>";



    // PHP The static Keyword
    echo "<h2>PHP The static Keyword</h2>";
    function myTest3(){
        static $p = 0;
        echo $p;
        $p++;
    }

    myTest3();
    echo "<br>";
    myTest3();
    echo "<br>";
    myTest3();
    ?>
</body>
</html>