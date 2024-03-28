<?php
$cookie_name = "user";
$cookie_value = "Disha Khunt";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<?php
// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);
?>

<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
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
    <h2 class="heading">PHP Cookies</h2>
    <!-- 
        A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.
    -->
     
    <!-- 
        A cookie is created with the setcookie() function.
        Syntax:
        setcookie(name, value, expire, path, domain, secure, httponly);
    -->

    <h3>PHP Create/Retrieve a Cookie</h3>

    <?php
        if(!isset($_COOKIE[$cookie_name])) {
          echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
          echo "Cookie '" . $cookie_name . "' is set!<br>";
          echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>

    <h3>Delete a Cookie</h3>
    <?php
    echo "Cookie 'user' is deleted.";
    ?>

    <h3>Check if Cookies are Enabled</h3>
    <?php
        if(count($_COOKIE) > 0) {
            echo "Cookies are enabled.";
        } else {
            echo "Cookies are disabled.";
        }
    ?>
</body>
</html>