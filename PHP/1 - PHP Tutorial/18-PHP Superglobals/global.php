<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP $GLOBALS</title>
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
    <h2 class="heading">PHP $GLOBALS</h2>
    <?php
        
        $x = 75;
  
        // myfunction
        function myfunction() {
            echo $GLOBALS['x'];
        }

        myfunction();

        echo "<br>";

        // myfunction2
        function myfunction2() {
            global $x;
            echo $x;
        }
        myfunction2();

        echo "<br>";

        // create global variable
        $x = 100;
        echo $GLOBALS["x"];
        echo $x;

        echo "<br>";

        // myfunction1
        function myfunction1() {
            $GLOBALS["x"] = 100;
        }
          
        myfunction1();
          
        echo $GLOBALS["x"];
        echo $x;
    ?>
</body>
</html>