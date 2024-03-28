<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Access Modifiers</title>
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
    <h2 class="heading">PHP - Access Modifiers</h2>

    <!-- 
        There are three access modifiers:

           -> public - the property or method can be accessed from everywhere. This is default
           -> protected - the property or method can be accessed within the class and by classes derived from that class
           -> private - the property or method can ONLY be accessed within the class
     -->

     <?php
        class base{
            public $name;
            protected $color;
            private $weight;

            public function __construct($n){
                $this->name = $n;
                $this->color = $n;
                $this->weight = $n;
            }

            public function show(){
                echo "Your Name : " . $this->name ."<br>";
            }

            protected function showPro(){
                echo "Color name : " . $this->color;
            }

            private function showPri(){
                echo "Your Weight : " . $this->weight ."<br>";
            }
        }
        class derived extends base{
            public function getPro(){
                echo "Color name : " . $this->color;
            }
        }
        
        $test = new base("Disha Khunt");
        // $test->name = "Disha";
        $test->show();

        


        $test = new derived("Blue");
        $test->getPro();
        
     ?>
</body>
</html>