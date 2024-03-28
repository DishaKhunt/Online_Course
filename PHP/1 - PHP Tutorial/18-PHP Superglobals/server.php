<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP $_SERVER</title>
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
    <h2 class="heading">PHP - $_SERVER</h2>
    <?php
        echo "<b>\$_SERVER['PHP_SELF']</b>	Returns the filename of the currently executing script "."<br>";
        echo $_SERVER['PHP_SELF'];
        echo "<br><br>";

        echo "<b>\$__SERVER['GATEWAY_INTERFACE']</b>	Returns the version of the Common Gateway Interface (CGI) the server is using"."<br>";
        echo $_SERVER['GATEWAY_INTERFACE'];
        echo "<br><br>";

        echo "<b>\$_SERVER['SERVER_ADDR']</b>	Returns the IP address of the host server"."<br>";
        echo $_SERVER['SERVER_ADDR'];
        echo "<br><br>";

        echo "<b>\$_SERVER['SERVER_NAME']</b> Returns the name of the host server"."<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br><br>";

        echo "<b>\$_SERVER['SERVER_SOFTWARE']</b>	Returns the server identification string (such as Apache/2.2.24)"."<br>";
        echo $_SERVER['SERVER_SOFTWARE'];
        echo "<br><br>";

        echo "<b>\$_SERVER['SERVER_PROTOCOL']</b>		Returns the name and revision of the information protocol (such as HTTP/1.1)"."<br>";
        echo $_SERVER['SERVER_PROTOCOL'];
        echo "<br><br>";

        echo "<b>\$_SERVER['REQUEST_METHOD']</b>	Returns the request method used to access the page (such as POST)"."<br>";
        echo $_SERVER['REQUEST_METHOD'];
        echo "<br><br>";

        echo "<b>\$_SERVER['REQUEST_TIME']</b>	Returns the timestamp of the start of the request (such as 1377687496)"."<br>";
        echo $_SERVER['REQUEST_TIME'];
        echo "<br><br>";

        echo "<b>\$_SERVER['QUERY_STRING']</b>	Returns the query string if the page is accessed via a query string"."<br>";
        echo $_SERVER['QUERY_STRING'];
        echo "<br><br>";

        echo "<b>\$_SERVER['HTTP_ACCEPT']</b>	Returns the Accept header from the current request"."<br>";
        echo $_SERVER['HTTP_ACCEPT'];
        echo "<br><br>";

        echo "<b>\$_SERVER['HTTP_ACCEPT_CHARSET']</b>	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)"."<br>";
        echo $_SERVER['HTTP_ACCEPT_CHARSET'];
        echo "<br><br>";

        echo "<b>\$_SERVER['HTTP_HOST']</b>	Returns the Host header from the current request"."<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br><br>";
     
        echo "<b>\$_SERVER['HTTP_REFERER']</b>	Returns the complete URL of the current page (not reliable because not all user-agents support it)"."<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br><br>";

        echo "<b>\$_SERVER['HTTPS']</b>		Is the script queried through a secure HTTP protocol"."<br>";
        echo $_SERVER['HTTPS'];
        echo "<br><br>";
       
        echo "<b>\$_SERVER['REMOTE_ADDR']</b>	Returns the IP address from where the user is viewing the current page"."<br>";
        echo $_SERVER['REMOTE_ADDR'];
        echo "<br><br>";

        echo "<b>\$_SERVER['REMOTE_HOST']</b>	Returns the Host name from where the user is viewing the current page"."<br>";
        echo $_SERVER['REMOTE_HOST'];
        echo "<br><br>";

        echo "<b>\$_SERVER['REMOTE_PORT']</b>	Returns the port being used on the user's machine to communicate with the web server"."<br>";
        echo $_SERVER['REMOTE_PORT'];
        echo "<br><br>";

        echo "<b>\$_SERVER['SCRIPT_FILENAME']</b> Returns the absolute pathname of the currently executing script"."<br>";
        echo $_SERVER['SCRIPT_FILENAME'];
        echo "<br><br>";

        echo "<b>\$_SERVER['SERVER_ADMIN']</b>	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)"."<br>";
        echo $_SERVER['SERVER_ADMIN'];
        echo "<br><br>";

        echo "<b>\$_SERVER['SERVER_PORT']</b>	Returns the port on the server machine being used by the web server for communication (such as 80)"."<br>";
        echo $_SERVER['SERVER_PORT'];
        echo "<br><br>";

        echo "<b>\$_SERVER['SERVER_SIGNATURE']</b>	Returns the server version and virtual host name which are added to server-generated pages"."<br>";
        echo $_SERVER['SERVER_SIGNATURE'];
        echo "<br><br>";

        echo "<b>\$_SERVER['PATH_TRANSLATED']</b>	Returns the file system based path to the current script"."<br>";
        echo $_SERVER['PATH_TRANSLATED'];
        echo "<br><br>";

        echo "<b>\$_SERVER['SCRIPT_NAME']</b> Returns the path of the current script"."<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br><br>";
        
        echo "<b>\$_SERVER['SCRIPT_URI']</b>	Returns the URI of the current page"."<br>";
        echo $_SERVER['SCRIPT_URI'];
        echo "<br><br>";
    
        echo $_SERVER['HTTP_USER_AGENT'];   
     
    ?>
</body>
</html>