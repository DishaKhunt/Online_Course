<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP do...while Loop</title>
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
    <h2 class="heading">PHP do...while Loop</h2>

    <?php
    $i = 1;

    do {
      echo $i . "<br>";
      $i++;
    } while ($i < 11);

   // The break Statement
   echo "<h3>The break Statement</h3>";

   $i = 1;

    do {
        if ($i == 5) break;
        echo $i . "<br>";
        $i++;
    } while ($i < 6);

    // The continue Statement
    echo "<h3>The continue Statement</h3>";
    $i = 0;

    do {
        $i++;
        if ($i == 3) continue;
        echo $i . "<br>";
    } while ($i < 6);
    ?>
</body>
</html>