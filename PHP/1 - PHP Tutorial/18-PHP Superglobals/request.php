<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP $_REQUEST</title>
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
    <h2 class="heading">PHP $_REQUEST</h2>

    <!--  $_REQUEST is a PHP super global variable which contains submitted form data, and all cookie data. -->
    <h3>Using $_REQUEST on $_POST Requests</h3>
   
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = htmlspecialchars($_REQUEST['fname']);
            if (empty($name)) {
                echo "Name is empty";
            } else {
             echo $name;
            }
        }
    ?>

    <h3>Using $_REQUEST on $_GET Requests</h3>

    <a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body>
</html>