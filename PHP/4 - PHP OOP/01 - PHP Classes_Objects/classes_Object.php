<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Classes and Objects</title>
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
    <h2 class="heading">PHP OOP - Classes and Objects</h2>

   
    <?php
    // define class
        class Fruits {
            // properties

            public $name;
            public $color;

            // Methods
            function set_name($name){
                $this->name = $name;
            }

            function get_name(){
                return $this->name;
            }

            function set_color($color){
                $this->color = $color;
            }

            function get_color(){
                return $this->color;
            }

           
        }
         // define Object

         $apple = new Fruits();
         $banana = new Fruits();
         $apple->set_name('Apple');
         $apple->set_color('Red');
         $banana->set_name('Banana');
         $banana->set_color('Yellow');

         echo $apple->get_name();
         echo "<br>";
         echo  "Apple color is : " . $apple->get_color();
         echo "<br>";
         echo $banana->get_name();
         echo "<br>";
         echo  "Banana color is : " . $banana->get_color();
    ?>

    <h3>PHP - instanceof</h3>

    <?php
    class Fruit {
        // Properties
        public $name;
        public $color;
      
        // Methods
        function set_name($name) {
          $this->name = $name;
        }
        
        function get_name() {
          return $this->name;
        }
      }
      
      $apple = new Fruit();
      var_dump($apple instanceof Fruit);
    ?>
</body>
</html>