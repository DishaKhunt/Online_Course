<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Class Constants</title>
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
    <h2 class="heading">PHP OOP - Class Constants</h2>

    <!-- 
        Class constants can be useful if you need to define some constant data within a class.

        A class constant is declared inside a class with the const keyword.

        A constant cannot be changed once it is declared.

        Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.
     -->
    <?php
        class Goodbye{
            const LEVING_MESSAGE = "Thank you for visiting this Website.";
        }
        echo Goodbye::LEVING_MESSAGE;
    ?>

    <?php
        class Bye{
            const LEVING_MESSAGE = "<br>Thank you for visiting this Website.";

            public function byebye(){
                echo self::LEVING_MESSAGE;
            }
        }

        $goodbye = new Bye();
        $goodbye->byebye();
    ?>
</body>
</html>