<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQL Connection</title>
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
      <h2 class="heading">MySQL Connect</h2>
      
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "disha";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
      ?>


      <?php
      $servername = "localhost";
      $username = "root";
      $password = "disha";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password);

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "<br>Connected successfully";
      ?>

      <?php
      // $servername = "localhost";
      // $username = "username";
      // $password = "password";

      // try {
      //   $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
      //   // set the PDO error mode to exception
      //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //   echo "Connected successfully";
      // } catch(PDOException $e) {
      //   echo "Connection failed: " . $e->getMessage();
      // }
      ?>
</body>
</html>






