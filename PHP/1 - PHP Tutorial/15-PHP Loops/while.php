<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP while Loop</title>
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
    <h2 class="heading">PHP while Loop</h2>

    <?php
    $i = 1;
    while ($i < 6) {
      echo $i ."<br>";
      $i++;
    }

    // The break Statement
    echo "<h3>The break Statement</h3>";
    $i = 1;
    while ($i < 6) {
        if ($i == 3) break;
        echo $i . "<br>";
        $i++;
    }

    // The continue Statement
    echo "<h3>The continue Statement</h3>";
    $i = 0;
    while ($i < 6) {
        $i++;
        if ($i == 3) continue;
        echo $i . "<br>";
    }

    echo "<br><br>";
    
    // Alternative Syntax
    // echo "<h3>TAlternative Syntax</h3>";
    // $i = 1;
    // while ($i < 6) {
    //     echo $i . "<br>";
    //     $i++;
    // endwhile;
    // }

    $i = 0;
    while ($i < 100) {
        $i+=10;
        echo $i ."<br>";
    }
    ?>

</body>
</html>