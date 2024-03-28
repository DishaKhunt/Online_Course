<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Sanitization</title>
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
    <h2 class="heading">Filter Sanitization</h2>

    <h3>Sanitize Email</h3>
    <?php
        
        $var = "dis(<ha(2334)@gmail.com";

        $var = filter_var($var, FILTER_SANITIZE_EMAIL);
 
        if(filter_var($var, FILTER_VALIDATE_EMAIL)){
             echo "$var is valid email.";
        }
        else{
             echo "$var is not valid email.";
        }
    ?>

    
    <h3>Sanitize URL</h3>
    <?php
        
        $var = "https://www.PHP .com";

        $var = filter_var($var, FILTER_SANITIZE_URL);
 
        if(filter_var($var, FILTER_VALIDATE_URL)){
             echo "$var is valid URL.";
        }
        else{
             echo "$var is not valid URL.";
        }
    ?>

    
    <h3>Sanitize Number INT</h3>
    <?php
        
        // $var = "45.00";

        $var = "45+a#@$%_";

        $var = filter_var($var, FILTER_SANITIZE_NUMBER_INT);
 
        if(filter_var($var, FILTER_VALIDATE_INT)){
             echo "$var is valid integer.";
        }
        else{
             echo "$var is not valid integer.";
        }
    ?>

    <h3>Sanitize Number FLOAT</h3>
    <?php
        
        $var = "45.00";

        // $var = "45+a#@$%_";

        $var = filter_var($var, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
 
        if(filter_var($var, FILTER_VALIDATE_FLOAT)){
             echo "$var is valid Float.";
        }
        else{
             echo "$var is not valid Float.";
        }
    ?>

    <!-- <h3>Sanitize STRING</h3> -->
    <?php

        // $var = "W3School's Website";

        // echo filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES);
    ?>

    <h3>Sanitize String</h3>
    <?php
        
        // $var = "45.00";

        $var = "<h1>Disha & Khunt</h1>";

        echo filter_var($var, FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_AMP);
       
    ?>





</body>
</html>