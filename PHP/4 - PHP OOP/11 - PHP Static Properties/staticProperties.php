<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Static Properties</title>
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
    <h2 class="heading">PHP OOP - Static Properties</h2>


    <?php
        class pi{
            public static $value = 3.14159;

            // public function staticValue(){
            //     return self::$value;
            // }
        }

        class x extends pi{
            public function xStatic() {
                return parent::$value;
              } 
        }
        // get static property
        // echo pi::$value;

        // $pi = new pi();
        // echo $pi->staticValue();

        
        echo x::$value;

        $x = new x();
        echo $x->xStatic();
    ?>
</body>
</html>