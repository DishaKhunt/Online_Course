<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iterables</title>
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
    <h1 class="heading">PHP Iterables</h1>

    <?php
        // function printIterable(iterable $myIterable){
        //     foreach($myIterable as $item){
        //         echo $item;
        //     }
        // }

        // $arr = ["a", "b", "c"];
        // printIterable($arr);
    ?>
    <br>

    <?php
        function getIterable():iterable {
            return ["a", "b", "c"];
        }
        
        $myIterable = getIterable();
        foreach($myIterable as $item) {
            echo $item;
        }
    ?>

    <h3>PHP - Creating Iterables</h3>
    <?php
        // Create an Iterator

        class MyIterator implements Iterator{
            private $items = [];
            private $pointer = 0;

            public function __construct($items){
                $this->items = array_values($items);
            }

            public function current(){
                return $this->items[$this->pointer];
            }

            public function key(){
                return $this->pointer;
            }

            public function next(){
                $this->pointer++;
            }

            public function rewind(){
                $this->pointer = 0;
            }

            public function valid(){
                return $this->pointer < count($this->items);
            }
        }

       // A function that uses iterables
        function printIterable(iterable $myIterable) {
            foreach($myIterable as $item) {
            echo $item;
            }
        }
  

        $iterator = new MyIterator(["a", "b", "c"]);
        printIterable($iterator);
       
    ?>
</body>
</html>