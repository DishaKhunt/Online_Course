<?php
     echo "Value is: " . $_COOKIE['user'];

     setcookie("user", "", time() + (86400 * 30), "/"); 
?>