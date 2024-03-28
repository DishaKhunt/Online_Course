<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
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
    
        <h2 class="heading">PHP Session</h2>

    <!-- 
        step 1: session_strat();
        step 2: $_SESSION[name] = value;
        step 3 : echo $_SESSION[name];
     -->

    <!--
        Delete session
        step 1: session_unset(); Remove all session variables
        step 2: session_destroy();  Destroy the session
      -->

    <?php
        $_SESSION["favcolor"] = "Red";
        $_SESSION["favanimal"] = "cat";
        echo "Session variable is set.";
    ?>
</body>
</html>