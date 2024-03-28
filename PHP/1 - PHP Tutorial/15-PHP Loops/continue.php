<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Continue</title>
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
    <h2 class="heading">PHP Continue</h2>

    <?php
    echo "<h3>Continue in For loop</h3>";

    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
          continue;
        }
        echo "The number is: $x <br>";
    }

    echo "<h3>Continue in While Loop</h3>";
    
    // $x = 0;

    // while($x < 10) {
    //     if ($x == 4) {
    //         continue;
    //     }
    // echo "The number is: $x <br>";
    // $x++;
    // }

    echo "<h3>Continue in Do While Loop</h3>";
    $i = 1;

    do {
        if ($i == 3) continue;
        echo $i. "<br>";
        $i++;
    } while ($i < 6);

    // echo "<h3>Continue in For Each Loop</h3>";
    // $colors = array("red", "green", "blue", "yellow");

    // foreach ($colors as $x) {
    //     if ($x == "blue") continue;
    //     echo "$x <br>";
    // }
    ?>
</body>
</html>