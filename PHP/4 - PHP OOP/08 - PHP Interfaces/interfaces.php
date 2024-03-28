<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Interfaces</title>
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
    <h2 class="heading">PHP OOP - Interfaces</h2>

    <?php
        interface Animal {
            public function makeSound();
        }

        class Cat implements Animal {
            public function makeSound() {
                echo "Meow";
            }
        }
        class Dog implements Animal {
            public function makeSound() {
              echo " Bark ";
            }
          }
          
          class Mouse implements Animal {
            public function makeSound() {
              echo " Squeak ";
            }
          }

        $cat = new Cat();
        $dog = new Dog();
        $mouse = new Mouse();
        $animals = array($cat, $dog, $mouse);
        // $animal->makeSound();

        // Tell the animals to make a sound
        foreach($animals as $animal) {
            $animal->makeSound();
        }
    ?>
</body>
</html>