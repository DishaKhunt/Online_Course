<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sorting Arrays</title>
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
    <h2 class="heading">PHP Sorting Arrays</h2>

    <?php
    echo "<h3>PHP - Sort Functions For Arrays</h3>";
    echo "sort() - sort arrays in ascending order <br>
    rsort() - sort arrays in descending order <br>
    asort() - sort associative arrays in ascending order, according to the value <br>
    ksort() - sort associative arrays in ascending order, according to the key <br>
    arsort() - sort associative arrays in descending order, according to the value <br>
    krsort() - sort associative arrays in descending order, according to the key <br>";

    echo "<hr>";

    // Sort Array in Ascending Order - sort()
    echo "<h3>Sort Array in Ascending Order - sort()</h3>";
    $cars = array("Verna", "BMW", "Thar");
    sort($cars);

    $clength = count($cars);
    for($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    echo "<br>";
    // use number
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);

    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";
    }

    // Sort Array in Descending Order - rsort()
    echo "<h3>Sort Array in Descending Order - rsort()</h3>";
    $cars = array("Verna", "BMW", "Thar");
    rsort($cars);

    $clength = count($cars);
    for($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        
        echo "<br>";
    }

    echo "<br>";
    // use number
    $numbers = array(4, 6, 2, 22, 11);
    rsort($numbers);

    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "<br>";
    }

    // Sort Array (Ascending Order), According to Value - asort()
    echo "<h3>Sort Array (Ascending Order), According to Value - asort()</h3>";
    $age = array("Disha" =>"21", "Harsh"=>"17", "Isha"=>"22");
    asort($age);

    foreach($age as $x => $x_value){
        echo "Key = ".$x . ", value = ".$x_value;
        echo "<br>";
    }
    
    // Sort Array (Descending Order), According to Value - arsort()
    echo "<h3>Sort Array (Descending Order), According to Value - arsort()</h3>";
    $age = array("Disha" =>"21", "Harsh"=>"17", "Isha"=>"22");
    arsort($age);

    foreach($age as $x => $x_value){
        echo "Key = ".$x . ", value = ".$x_value;
        echo "<br>";
    }

    // Sort Array (Descending Order), According to Key - krsort()
    echo "<h3>Sort Array (Descending Order), According to Key - krsort()</h3>";
    $age = array("Disha" =>"21", "Harsh"=>"17", "Isha"=>"22");
    krsort($age);

    foreach($age as $x => $x_value){
        echo "Key = ".$x . ", value = ".$x_value;
        echo "<br>";
    }
    ?>
</body>
</html>