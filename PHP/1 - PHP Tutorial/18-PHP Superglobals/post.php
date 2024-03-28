<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - $_POST</title>
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
    <h2 class="heading">PHP - $_POST</h2>

    <h3>$_POST in HTML Forms</h3>

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

    <h3>$_POST in JavaScript HTTP Requests</h3>

        <button onclick="myfunction()">Click me!</button>

        <h1 id="demo"></h1>

        <script>
            function myfunction() {
              const xhttp = new XMLHttpRequest();
              xhttp.open("POST", "demo_ajax.php");
              xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              xhttp.onload = function() {
                document.getElementById("demo").innerHTML = this.responseText;
              }
              xhttp.send("fname=Disha");
            }
        </script>



</body>
</html>