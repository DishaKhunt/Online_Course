<?php

$conn = mysqli_connect("localhost", "root" , "", "test") or die("Connection Failed");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo "</pre>";
print_r($output);
echo "</pre>";
?>