<?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "disha";
    
    // // Create connection
    // $conn = new mysqli($servername, $username, $password);
    // // Check connection
    // if ($conn->connect_error) {
    //   die("Connection failed: " . $conn->connect_error);
    // }
    
    // // Create database
    // $sql = "CREATE DATABASE myDB";
    // if ($conn->query($sql) === TRUE) {
    //   echo "Database created successfully";
    // } else {
    //   echo "Error creating database: " . $conn->error;
    // }
    
    // $conn->close();
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
    
    // Create database
    $sql = "CREATE DATABASE myDB1";
    if (mysqli_query($conn, $sql)) {
      echo "Database created successfully";
    } else {
      echo "Error creating database: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>