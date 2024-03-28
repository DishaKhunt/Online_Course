<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter Advanced</title>
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
    <h2 class="heading">Filter Advanced</h2>

    <h3>Validate an Integer Within a Range</h3>
    <?php
    $int = 122;
    $min = 1;
    $max = 200;
    
    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
      echo("$int is not within the legal range");
    } else {
      echo("$int is within the legal range");
    }
    ?>

    <h3>Validate IPv6 Address</h3>
    <?php
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
      echo("$ip is a valid IPv6 address");
    } else {
      echo("$ip is not a valid IPv6 address");
    }
    ?>

    <h3>Validate URL - Must Contain QueryString</h3>
    <?php
    $url = "https://www.w3schools.com";
    // $url = "https://www.w3schools.com?A=1"; query required

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
      echo("$url is a valid URL with a query string");
    } else {
      echo("$url is not a valid URL with a query string");
    }
    ?>

    <h3>Remove Characters With ASCII Value > 127</h3>
    <?php
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
    ?>
</body>
</html>