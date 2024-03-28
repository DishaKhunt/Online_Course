<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Math</title>
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
    <h2 class="heading">PHP Math</h2>

    <?php
    echo "<h3>PHP pi() Function</h3>";
    echo (pi());

    // PHP min() and max() Functions
    echo "<h3>PHP min() and max() Functions</h3>";
    echo("0, 150, 30, 20, -8, -200 &#10170; " .min(0, 150, 30, 20, -8, -200) . "<br>");
    echo("0, 150, 30, 20, -8, -200 &#10170; " .max(0, 150, 30, 20, -8, -200));

    //PHP abs() Function
    // function returns the absolute (positive) value of a number
    echo "<h3>PHP abs() Function</h3>";
    echo " abs(-5.2) &#10170; ". abs(-5.2);

    // PHP sqrt() Function
    echo "<h3>PHP sqrt() Function</h3>";
    echo ("sqrt(25) &#10170; ". sqrt(25));

    // PHP round() Function
    echo "<h3>PHP round() Function</h3>";
    echo ("round(0.52) &#10170; " .round(0.52) ."<br>");
    echo ("round(0.25) &#10170; " .round(0.25) ."<br>");
    echo ("round(-2.5) &#10170; " .round(-2.5)."<br>");
    echo ("round(-5.2) &#10170; " .round(-5.2));


    // Random Numbers
    echo "<h3>Random Numbers</h3>";
    echo (rand()."<br>");
    echo (rand(10,100));
    ?>

</body>
</html>