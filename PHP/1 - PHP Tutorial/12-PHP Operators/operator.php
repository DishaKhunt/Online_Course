<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
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
    <h2 class="heading">PHP Operators</h2>

    <!-- 
        Arithmetic operators
        Assignment operators
        Comparison operators
        Increment/Decrement operators
        Logical operators
        String operators
        Array operators
        Conditional assignment operators
     -->
    <?php
    // PHP Arithmetic Operators
    echo "<h3>PHP Arithmetic Operators</h3>";
    $x = 5;
    $y = 2;

    echo "Addition :  $x + $y &#10170; ". $x + $y ."<br>";
    echo "Subtractio : $x - $y &#10170; ". $x - $y ."<br>";
    echo "Multiplication : $x * $y &#10170; ". $x * $y ."<br>";
    echo "Division : $x / $y &#10170; ". $x / $y ."<br>";
    echo "MOdulus : $x % $y &#10170; ". $x % $y ."<br>";
    echo "Exponentiation : $x ** $y &#10170; ". $x ** $y;
    
    // PHP Assignment Operators
    echo "<h3>PHP Assignment Operators</h3>";
    echo "Addition : $x += 10 &#10170; ".($x+= 10) ."<br>";
    echo "Subtraction : $x -= 5 &#10170; ".($x-= 5) ."<br>";
    echo "Multiplication : $x *= 10 &#10170; ".($x*= 10) ."<br>";
    echo "Division : $x /= 10 &#10170; ".($x/= 10) ."<br>";
    echo "Modulus : $x %= 10 &#10170; ".($x%= 10);

    // PHP Comparison Operators
    echo "<h3>PHP Comparison Operators</h3>";
    $a = 100;
    $b = "100";

    echo "$a == '100' &#10170; ",(var_dump($a == $b))."<br>";
    echo "$a === '100' &#10170; ",(var_dump($a === $b)) ."<br>";
    echo "$a != '100' &#10170; ",(var_dump($a != $b)) ."<br>";
    echo "$a <>'100' &#10170; ",(var_dump($a <> $b)) ."<br>";
    echo "$a !== '100' &#10170; ",(var_dump($a !== $b)) ."<br>";
    echo "$a > '100' &#10170; ",(var_dump($a > $b)) ."<br>";
    echo "$a < '100' &#10170; ",(var_dump($a < $b)) ."<br>";
    echo "$a >= '100' &#10170; ",(var_dump($a >= $b)) ."<br>";
    echo "$a <= '100' &#10170; ",(var_dump($a <= $b)) ."<br>";
    echo "$a <=> '100' &#10170; ",(var_dump($a <=> $b));

    // PHP Increment / Decrement Operators
    echo "<h3>PHP Increment / Decrement Operators</h3>";

    $p = 5;
    echo "Pre-increment : ++$p &#10170; ", (++$p) ."<br>";
    echo "Post-increment : $p++ &#10170; ", ($p++). "<br>";
    echo "Pre-ddecrement : --$p &#10170; ", (--$p) . "<br>";
    echo "Post-decrement : $p-- &#10170; ", ($p--);

    // PHP Logical Operators
    echo "<h3>PHP Logical Operators</h3>";
    $x1 = 5;
    $x2 = 2;
    // and
    if($x1 == 5 and $x2 == 2){
        echo "The and Operator is true."."<br>";
    }

    // or
    if($x1 == 5 or $x2 == 7){
        echo "The or Operator is true."."<br>";
    }

    // xor
    if($x1 == 0 xor $x2 == 4){
        echo "The xor Operator is True."."<br>";
    }
    else{
        echo "the xor OPerator is false."."<br>";
    }

    // &&
    if($x1 == 5 && $x2 == 2){
        echo "The && Operator is True."."<br>";
    }

    // ||
    if($x1 == 5 || $x2 == 4){
        echo "the || Operator is True."."<br>";
    }

    // !
    if(!($x1 == 2)){
        echo "The ! Operator is True.";
    }


    // PHP String Operators
    echo "<h3>PHP String Operators</h3>";
    $str1 = "Disha";
    $str2 = "Khunt";
    echo ". &#10170; " .$str1 . $str2 . "<br>";
    $str1 .= $str2;
    echo " .= &#10170; " .$str1;

    // PHP Array Operators
    echo "<h3>PHP Array Operators</h3>";
    $arr1 = array("a"=>"red", "b"=>"green");
    $arr2 = array("c"=>"blue", "d"=>"yellow");

    // Union of $arr1 and $arr2
    echo "Union(+) &#10170; ",print_r($arr1 + $arr2) , "<br>";

    // Equality
    echo "Equality(==) &#10170; ",var_dump($arr1 == $arr2), "<br>";

    // Identity
    echo "Identity(===) &#10170; ", var_dump($arr1 === $arr2), "<br>";

    // Inequality
    echo "Inequality(!=) &#10170; ",var_dump($arr1 != $arr2), "<br>";

    // Inequality
    echo "Inequality(<>) &#10170; ",var_dump($arr1 <> $arr2), "<br>";

    // Non-identity
    echo "Non-identity(!==) &#10170; ",var_dump($arr1 !== $arr2), "<br>";


    // PHP Conditional Assignment Operators
    echo "<h3>PHP Conditional Assignment Operators</h3>";

    echo $satus = (empty($user)) ? "anonymous" : "logged in";
    echo "<br>";

    $user = "Disha Khunt";
    echo $status = (empty($user)) ? "anonymous" : "logged in" ,"<br>";

    echo $user = $_GET["user"] ?? "anonymous";
    echo("<br>");
   
    // variable $color is "red" if $color does not exist or is null
    echo $color = $color ?? "red";
    ?>
</body>
</html>