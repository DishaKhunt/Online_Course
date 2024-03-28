<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Callback Functions</title>
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
    <h2 class="heading">PHP Callback Functions</h2>

    <?php
        function my_callback($item) {
            return strlen($item);
        }

        echo "<pre>";
        $strings = ["apple", "orange", "banana", "coconut"];
        $lengths = array_map("my_callback", $strings);
        print_r($lengths);


        $strings = ["apple", "orange", "banana", "coconut"];
        $lengths = array_map( function($item) 
                                { return strlen($item); } , $strings);
        print_r($lengths);
        echo "</pre>"
    ?>

    <h3>Callbacks in User Defined Functions</h3>
    <?php
    function exclaim($str){
        return $str . "!";
    }

    function ask($str){
        return $str . "?";
    }

    function printFormatted($str, $format){
        echo $format($str);
    }

    // Pass "exclaim" and "ask" as callback functions to printFormatted()
    printFormatted("Hello Disha", "exclaim");
    echo "<br>";
    printFormatted("Hello Disha", "ask");
    ?>
</body>
</html>