<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Traits</title>
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
    <h2 class="heading">PHP OOP - Traits</h2>

    <?php

        trait hello{
            public function sayhello(){
                echo "Hello everyone<br>";
            }

            public function sayhi(){
                echo "Hi everyone<br>";
            }
        }
        trait bye{
            public function saybye(){
                echo "Bye bye everyone";
            }
        }
        
        class base{
            use hello, bye;
        }

        class base2{
            use hello;
        }


        $test = new base();
        // $test2 = new base2();
        $test->sayhello();
        $test->sayhi();
        $test->saybye();
    ?>

    <h3>Method Overriding Tarits</h3>

    <?php
        trait msg{
            public function sayhello(){
                echo "Hello everyone<br>";
            }
        }

        trait msg2{
            public function sayhello(){
                echo "Hyy everyone<br>";
            }
        }

        class base3{
            use msg, msg2{
                msg :: sayhello insteadOf msg2;
                msg2 :: sayhello as newhello;
            }
            // public function sayhello(){
            //     echo "Hello from base class<br>";
            // }
        }

        class child extends base3{
            use msg;
            public function sayhello(){
                echo "Hello from child class<br>";
            }
        }

        $test1 = new base3();
        $test1->sayhello();
        $test1->newhello();

        $test = new child();
        $test->sayhello();
    ?>
</body>
</html>