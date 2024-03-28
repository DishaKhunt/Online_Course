<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Static Methods</title>
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
    <h2 class="heading">PHP OOP - Static Methods</h2>

    <?php
        class greeting{
            public static function welcome(){
                echo "Hello World";
            }
        }

        // call static method
        greeting::welcome();
    ?>
    <br>

    <?php
        class base{

            public static  $name = "<br>Disha Khunt";

            // public static function show(){
            //     echo self::$name;
            // }

            // public function __construct(){
            //     self::show();
            // }
        }

        class derived extends base{
            public static function show(){
                echo parent::$name;
            }
        }

        // echo base::$name;
        // base::show();
        // $test = new base();
        // $test-> show();

        $test = new derived();
        $test-> show();
    ?>
</body>
</html>