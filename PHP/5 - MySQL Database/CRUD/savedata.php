<?php

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

 $conn = mysqli_connect("localhost", "root","disha","crud") or die("Connection Faild". mysqli_connect_error());

 $sql = "INSERT INTO student(sid,sname,saddress,sclass,sphone) VALUES ('{$stu_id}','{$stu_name}','{$stu_address}', '{$stu_class}', '{$stu_phone}')";

 $result = mysqli_query($conn, $sql) or die ("Query Unsuccessful.");

 header("Location: http://localhost/PHP/5 - MySQL Database/CRUD/index.php");

mysqli_close($conn);
?>