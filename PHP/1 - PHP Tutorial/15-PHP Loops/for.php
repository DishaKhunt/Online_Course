<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP for Loop</title>
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
    <h2 class="heading">PHP for Loop</h2>

    <?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    //   The break Statement
    echo "<h3>The break Statement</h3>";
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 6) break;
        echo "The number is: $x <br>";
    }

    // The continue Statement
    echo "<h3>The continue Statement</h3>";
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) continue;
        echo "The number is: $x <br>";
    }

    echo "<br><br>";
    // Step 10
    for ($x = 0; $x <= 100; $x+=10) {
        echo "The number is: $x <br>";
    }
      
    ?>
</body>
</html>