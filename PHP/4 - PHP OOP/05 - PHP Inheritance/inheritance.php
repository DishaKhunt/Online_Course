<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Inheritance</title>
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
    <h2 class="heading">PHP OOP - Inheritance</h2>

    <?php
        class Fruit{
            public $name;
            public $color;
            public function __constuct($name, $color){
                $this->name = $name;
                $this->color = $color;
            }

            public function intro(){
                echo "<br>The fruit is {$this->name} and the color is {$this->color}.";
            }
        }

        class Strawberry extends Fruit{
            public function message(){
                echo "Am I a fruit or a berry?";
            }
        }

        $strawberry = new Strawberry("Strawberry", "Red");
        $strawberry->message();
        $strawberry->intro();
    ?>

    <h3>PHP - Inheritance and the Protected Access Modifier</h3>

    <?php
        class Fruits {
            public $name;
            public $color;
            public function __construct($name, $color) {
              $this->name = $name;
              $this->color = $color; 
            }
            protected function intro() {
              echo "The fruit is {$this->name} and the color is {$this->color}."; 
            }
          }
          
          class Strawberry1 extends Fruits {
            public function message() {
              echo "Am I a fruit or a berry? "; 
              $this->intro();
            }
          }
          
          // Try to call all three methods from outside class
          $strawberry = new Strawberry1("Strawberry", "red");  // OK. __construct() is public
          $strawberry->message(); // OK. message() is public
        //   $strawberry->intro(); // ERROR. intro() is protected
    ?>

    <h3>PHP - Overriding Inherited Methods</h3>

    <?php
        class Fruit3 {
            public $name;
            public $color;
            public function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color; 
            }
            public function intro() {
                echo "The fruit is {$this->name} and the color is {$this->color}."; 
            }
        }

        class Strawberry3 extends Fruit3 {
            public $weight;
            public function __construct($name, $color, $weight) {
                $this->name = $name;
                $this->color = $color;
                $this->weight = $weight; 
            }
            public function intro() {
                echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
            }
        }

        $strawberry = new Strawberry3("Strawberry", "red", 50);
        $strawberry->intro();
    ?>

    <!-- <h3>PHP - The final Keyword</h3> -->
    <?php
        // final class Fruit4 {
        //     // some code
        //   }
          
        //   // will result in error
        //   class Strawberry4 extends Fruit4 {
        //     // some code
        //   }

        // class Fruit4 {
        //     final public function intro() {
        //     }
        //   }
          
        //   class Strawberry4 extends Fruit4 {
        //     // will result in error
        //     public function intro() {
        //     }
        //   }
    ?>
</body>
</html>