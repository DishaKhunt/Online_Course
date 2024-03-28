<?php
namespace myArea;

function myValue1(){
  return __NAMESPACE__;
}
class Person{
    public function myValue2(){
        return Person::class;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Magic Constants</title>
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
    <h2 class="heading">PHP Magic Constants</h2>

    <?php
    // If used inside a class, the class name is returned.
    echo "<h3>__CLASS__</h3>";
    class Fruits{
        public function myValue(){
            return __CLASS__;
        }
    }
    $kiwi = new Fruits();
    echo "Class Name &#10170; ". $kiwi->myValue();

    // The directory of the file.
    echo "<h3>__DIR__</h3>";
    echo "Directory file &#10170; ". __DIR__;

    // 	The file name including the full path.
    echo "<h3>__FILE__</h3>";
    echo "file full path &#10170; ".__FILE__;

    // 	If inside a function, the function name is returned.
    echo "<h3>__FUNCTION__</h3>";
    function myValue(){
        return __FUNCTION__;
    }
    echo "Function  name &#10170; ".myValue();

    // 	The current line number.
    echo "<h3>__LINE__</h3>";
    echo "The current line number &#10170; ".__LINE__;

    // 	If used inside a function that belongs to a class, both class and function name is returned.
    echo "<h3>__METHOD__</h3>";
   class Cars{
        public function myValue(){
            return  __METHOD__;
        }
    }
    $thar = new Cars();
    echo "class and function name &#10170; ".$thar->myValue();

    // If used inside a namespace, the name of the namespace is returned.
    echo "<h3>__NAMESPACE__</h3>";
    echo "namespace &#10170; ". myValue1();

    // If used inside a trait, the trait name is returned.
    echo "<h3>__TRAIT__</h3>";
    trait message1{
        public function msg1(){
            return __TRAIT__;
        }
    }
    class Welcome{
        use message1;
    }
    $obj = new Welcome();
    echo $obj->msg1();

    // Returns the name of the specified class and the name of the namespace, if any.
    echo "<h3>ClassName::class</h3>";
    $disha = new Person();
    echo $disha->myValue2();

    ?>
</body>
</html>