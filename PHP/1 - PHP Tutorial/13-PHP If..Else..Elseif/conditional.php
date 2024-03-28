<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditional Statements</title>
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
    <h2 class="heading">PHP Conditional Statements</h2>

    <!-- 
        => if statement - executes some code if one condition is true
        => if...else statement - executes some code if a condition is true and another code if that condition is false
        => if...elseif...else statement - executes different codes for more than two conditions
        => switch statement - selects one of many blocks of code to be executed
     -->
    <?php
    echo "<h3>PHP - The if Statement</h3>";
    
    $x = 52;
    if($x < 60){
        echo "Have a good day!!";
    }

    echo "<hr>";
    echo "<h3>PHP if Operators</h3>";

    echo "<h4>Comparison Operators</h4>";
    if($x == 52){
        echo "Have a good day!","<br>";
    }

    $a = 5;
    $b = 5;

    if($a == $b){
        echo "$a is equal to $b","<br>";
    }

    if($a === $b){
        echo "$a is indentical to $b","<br>";
    }

    if($a != $x){
        echo "$a is not equal to $x","<br>";
    }

    if($a <> $x){
        echo "$a is not equal to $x","<br>";
    }

    if($a !== $x){
        echo "$a is not indentical to $x","<br>";
    }

    if($a < $x){
        echo "$a less than $x","<br>";
    }

    if($x > $b){
        echo "$x is greater than $b","<br>";
    }

    if($a >= $b){
        echo "$a is greater than, or equal to $b","<br>";
    }

    if($a <= $b){
        echo "$a is less than, or equal to $b","<br>";
    }

    // Logical Operators
    echo "<h4>Logical Operator</h4>";
    $a1 = 200;
    $a2 = 33;
    $a3 = 500;

    if ($a1 > $a2 && $a1 < $a3 ) {
        echo "Both conditions are true", "<br>";
    }

    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
        echo "$a is a number between 2 and 7";
    }

    echo "<hr>";
    // PHP if...else Statements
    echo "<h3>PHP if...else Statements</h3>";
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo "<hr>";

    // PHP - The if...elseif...else Statement
    echo "<h3>PHP - The if...elseif...else Statement</h3>";

    echo "<p>The hour (of the server) is " . $t; 
    echo ", and will give the following message:</p>";

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo "<hr>";

    // PHP Shorthand if Statements
    echo "<h3>PHP Shorthand if Statements</h3>";

    // Short Hand If
    if($a < 10) $b = "Hello"."<br>";
    echo $b; 

    // Short Hand If...Else
    $b = $a < 3 ? "Hello" : "Good Bye";
    echo $b;

    echo "<hr>";

    // PHP Nested if Statement
    echo "<h3>PHP Nested if Statement</h3>";
    $a = 13;

    if ($a > 10) {
        echo "Above 10";
        if ($a > 20) {
            echo " and also above 20";
        } else {
            echo " but not above 20";
        }
    }


    ?>
</body>
</html>