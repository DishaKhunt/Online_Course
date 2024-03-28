<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Abstract Classes</title>
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
    <h2 class="heading">PHP OOP - Abstract Classes</h2>

    <?php
        abstract class parentClass{
            public $name;
            abstract protected function calc($a, $b);
        }
        class childClass extends parentClass{
            public function calc($c, $d){
                echo $c+$d;
            }
        }

        $test = new childClass();
        $test->calc(2,3);
    ?>

    <br>

    <?php
        //Parent Class 
        abstract class Car{
            public $name;

            public function __construct($name){
                $this->name = $name;
            }

            abstract public function intro() : string;
        }
        
        // child classes
        class Audi extends Car{
            public function intro() : string{
                return "Choose German Quality! I'm an $this->name!";
            }
        }

        class Volvo extends Car{
            public function intro() : string{
                return "Proud to be Swedish! I'm a $this->name!";
            }
        }

        echo "<br>";
        
        class Citroen extends Car {
            public function intro() : string {
                return "French extravagance! I'm a $this->name!"; 
            }
        }

        // Create objects from the child classes
        $audi = new audi("Audi");
        echo $audi->intro();
        echo "<br>";

        $volvo = new Volvo("Volvo");
        echo $volvo->intro();
        echo "<br>";

        $citroen = new Citroen("Citroen");
        echo $citroen->intro();
        echo "<br>";

    ?>
    <br>

    <?php
        abstract class ParentClass1{
            // Abstract method with an argument
           abstract protected function prefixName($name);
        }

        class ChildClass1 extends parentClass1{
            public function prefixName($name){
                if ($name == "John Doe") {
                    $prefix = "Mr.";
                } elseif ($name == "Jane Doe") {
                    $prefix = "Mrs.";
                } else {
                    $prefix = "";
                }
                return "{$prefix} {$name}";
            }
        }

        $class = new ChildClass1;
        echo $class->prefixName("John Doe");
        echo "<br>";
        echo $class->prefixName("Jane Doe");
    ?>

      <br><br>

    <?php
        abstract class ParentClass2 {
        // Abstract method with an argument
        abstract protected function prefixName($name);
        }

        class ChildClass2 extends ParentClass2 {
        // The child class may define optional arguments that is not in the parent's abstract method
        public function prefixName($name, $separator = ".", $greet = "Dear") {
            if ($name == "John Doe") {
            $prefix = "Mr";
            } elseif ($name == "Jane Doe") {
            $prefix = "Mrs";
            } else {
            $prefix = "";
            }
            return "{$greet} {$prefix}{$separator} {$name}";
        }
        }

        $class = new ChildClass2;
        echo $class->prefixName("John Doe");
        echo "<br>";  
        echo $class->prefixName("Jane Doe");
    ?>
    
</body>
</html>