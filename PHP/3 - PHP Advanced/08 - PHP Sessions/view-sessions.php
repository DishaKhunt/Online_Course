<?php
session_start();

// print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view session</title>
</head>
<body>
    <?php

        if(isset($_SESSION["favcolor"])){
            echo "Favorite Color : " . $_SESSION["favcolor"];
        }

        echo "<br>";

        if(isset($_SESSION["favanimal"])){
            echo "Favorite Animal : " . $_SESSION["favanimal"];
        }

    ?>
</body>
</html>