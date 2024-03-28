<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions</title>
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
    <h2 class="heading">PHP Array Functions</h2>

    <?php
        echo "<h3>PHP array() Function</h3>";    
        echo "<p>Creates an array</p>";

        $cars = array("Thar", "Verna", "BMW");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        echo "<br><br>";
        $arrlength = count($cars);

        for($x=0 ; $x<$arrlength; $x++){
            echo $cars[$x];
            echo "<br>";
        }

        echo "<br>";

        $age = array("Disha"=>"21", "Isha"=>"22", "Manshi"=>"23");
        echo "Disha is " . $age['Disha'] . " year old.";
        echo "<br><br>";

        foreach($age as $x=>$x_value){
            echo "Key = " . $x . ", Value = " . $x_value;
            echo "<br>";
        }
        echo "<br>";

        // A two-dimensional array:
        $cars = array(
            array("Verna", 100, 94),
            array("Thar", 50, 33),
            array("BMW", 10, 4)
        );

        echo $cars[0][0].": Ordered: ".$cars[0][1].". Sold: ".$cars[0][2]."<br>";
        echo $cars[1][0].": Ordered: ".$cars[1][1].". Sold: ".$cars[1][2]."<br>";
        echo $cars[2][0].": Ordered: ".$cars[2][1].". Sold: ".$cars[2][2]."<br>";

        echo "<hr>";
        echo "<h3>PHP array_change_key_case() Function</h3>";
        echo "<p>Changes all keys in an array to lowercase or uppercase</p>";

        // array_change_key_case(array, case)

       echo "<b>Upper Case :  </b>" ,"<pre>", print_r(array_change_key_case($age,CASE_UPPER)), "</pre>";

        echo "<br>";

        echo "<b>Lower Case :  </b>" ,  "<pre>",print_r(array_change_key_case($age,CASE_LOWER)), "</pre>";
        echo "<br>";

        $pets=array("a"=>"Cat","B"=>"Dog","c"=>"Horse","b"=>"Bird");
        echo "<b>Upper Case :  </b>" , "<pre>", print_r(array_change_key_case($pets,CASE_UPPER)) , "</pre>";

        echo "<hr>";

        // PHP array_chunk() Function
        echo "<h3>PHP array_chunk() Function</h3>";
        echo "<p>Splits an array into chunks of arrays</p>";


        $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");

        echo "<pre>";
        print_r(array_chunk($cars,2));

        echo "<br>";

        print_r(array_chunk($age,2,true));
        echo "</pre>";

        echo "<hr>";

        // PHP array_column() Function
        echo "<h3>PHP array_column() Function</h3>";
        echo "<p>	Returns the values from a single column in the input array</p>";

        $a = array(
            array(
                'id' => 200200107025,
                'first_name' => "Disha",
                'last_name' => "Khunt",
            ),
            array(
                'id' => 200200107024,
                'first_name' => "Isha",
                'last_name' => "Tarpada",
            ),
            array(
                'id' => 200200107026,
                'first_name' => "Manshi",
                'last_name' => "Khunt",
            )
        );

        $first_names = array_column($a, 'first_name');
        $last_names = array_column($a, 'last_name', 'id');

        echo "<pre>";
        print_r($first_names);
        echo "<br>";
        print_r($last_names);
        echo "</pre>";

        echo "<hr>";

        // PHP array_combine() Function
        echo "<h3>PHP array_combine() Function</h3>";
        echo "<p>Creates an array by using the elements from one 'keys' array and one 'values' array</p>";
        $fname = array("Disha","Isha","Manshi");
        $age = array("21","22", "23");

        $c = array_combine($fname,$age);
        echo "<pre>";
        print_r($c);
        echo "</pre>";

        echo "<hr>";
        // PHP array_count_values() Function
        echo "<h3>PHP array_count_values() Function</h3>";

        $a = array("A","Cat", "Dog", "A", "Dog");

        echo "<pre>";
        print_r(array_count_values($a));
        echo "</pre>";

        echo "<hr>";

        // PHP array_diff() Function
        echo "<h3>PHP array_diff() Function</h3>";
        echo "<p>Compare arrays, and returns the differences (compare values only)</p>";

        echo "<p>Counts all the values of an array</p>";


        $a1 = array("a"=>"red", "b"=>"green", "c"=>"blue","d"=>"yellow");
        $a2 = array("e"=>"red", "f"=>"green", "g"=>"blue");

        $result = array_diff($a1,$a2);
        print_r($result);

        echo "<hr>";
        // PHP array_diff_assoc() Function
        echo "<h3>PHP array_diff_assoc() Function</h3>";
        echo "<p>Compare arrays, and returns the differences (compare keys and values)</p>";

        $a3=array("a"=>"red","b"=>"green","c"=>"blue");

        $result1=array_diff_assoc($a1,$a2);
        $result2=array_diff_assoc($a1,$a3);
        print_r($result1);
        echo "<br>";
        print_r($result2);

        echo "<hr>";

        // PHP array_diff_key() Function
        echo "<h3>PHP array_diff_key() Function</h3>";
        echo "<p>Compare arrays, and returns the differences (compare keys only)</p>";

        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("a"=>"red","c"=>"blue","d"=>"pink");
        $a3=array("f"=>"green","c"=>"purple","g"=>"red");

        $result=array_diff_key($a1,$a2);
        print_r($result);
        echo "<br>";
        $result=array_diff_key($a1,$a2,$a3);
        print_r($result);
        
        echo "<hr>";

        // PHP array_diff_uassoc() Function
        echo "<h3>PHP array_diff_uassoc() Function</h3>";
        echo "<p>Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)</p>";

        function myFunction($a, $b){
            if($a === $b){
                return 0;
            }
            return ($a>$b) ? 1 : -1;
        }
        
        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("d"=>"red","b"=>"green","e"=>"blue");

        $result = array_diff_uassoc($a1, $a2, "myFunction");
        echo "<pre>";
        print_r($result);
        echo "</pre>";

        echo "<hr>";

        // PHP array_diff_ukey() Function
        echo "<h3>PHP array_diff_ukey() Function</h3>";
        echo "<p>Compare the keys of two arrays (using a user-defined key comparison function), and return the differences</p>";

        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("a"=>"blue","b"=>"black","e"=>"blue");
        $a3=array("a"=>"black","b"=>"yellow","d"=>"brown");
        $a4=array("e"=>"purple","f"=>"white","a"=>"gold");

        $result=array_diff_ukey($a1,$a2,"myfunction");
        print_r($result);
        echo "<br>";

        $result=array_diff_ukey($a1,$a4,$a3,"myfunction");
        print_r($result);

        echo "<hr>";

        // PHP array_fill() Function
        echo "<h3>PHP array_fill() Function</h3>";
        echo "<p>Fills an array with values</p>";

        $a1 = array_fill(3,4, "blue");
        $b1 = array_fill(0,1,"red");

        echo "<pre>";
        print_r($a1);
        echo "<br>";
        print_r($b1);
        echo "</pre>";

        echo "<hr>";

        // PHP array_fill_keys() Function
        echo "<h3>PHP array_fill_keys() Function</h3>";
        echo "<p>Fills an array with values, specifying keys</p>";

        $keys = array("a", "b", "c", "d");
        $a1 = array_fill_keys($keys, "blue");

        echo "<pre>";
        print_r($a1);
        echo "</pre>";

        echo "<hr>";

        // PHP array_filter() Function
        echo "<h3>PHP array_filter() Function</h3>";
        echo "<p>Filters the values of an array using a callback function</p>";

       function test_odd($var){
        return ($var & 1);
       }
      
       $a1 = array(1,3,2,3,4,);

       echo "<pre>";
       print_r(array_filter($a1,"test_odd"));
       echo "</pre>";

        // PHP array_flip() Function
        echo "<h3>PHP array_flip() Function</h3>";
        echo "<p>Flips/Exchanges all keys with their associated values in an array</p>";

        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $result=array_flip($a1);
        echo "<pre>";
        print_r($result);
        echo "</pre>";

        echo "<hr>";

        // PHP array_intersect() Function
        echo "<h3>PHP array_intersect() Function</h3>";
        echo "<p>Compare arrays, and returns the matches (compare values only)</p>";

        $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2 = array("e"=>"red","f"=>"green","g"=>"blue");

        $result = array_intersect($a1,$a2);
        echo "<pre>";
        print_r($result);
        echo "</pre>";

        echo "<hr>";

        // PHP array_intersect_assoc() Function
        echo "<h3>PHP array_intersect_assoc() Function</h3>";
        echo "<p>Compare arrays and returns the matches (compare keys and values)</p>";

        $a1 =  array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2 =  array("a"=>"red","b"=>"green","c"=>"blue");

        $result = array_intersect_assoc($a1,$a2);
        echo "<pre>";
        print_r($result);
        echo "</pre>";

        echo "<hr>";

        // PHP array_intersect_key() Function
        echo "<h3>PHP array_intersect_key() Function</h3>";
        echo "<p>Compare arrays and returns the matches (compare keys only)</p>";
 
        $a1 =  array("a"=>"red","b"=>"green","c"=>"blue");
        $a2 = array("a"=>"red","c"=>"blue","d"=>"pink");
 
        $result = array_intersect_key($a1,$a2);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
 
        echo "<hr>";

        // PHP array_intersect_uassoc() Function
        echo "<h3>PHP array_intersect_uassoc() Function</h3>";
        echo "<p>Compare arrays and returns the matches (compare keys and values, using a user-defined key comparison function)</p>";

 
        $a1 =  array("a"=>"red","b"=>"green","c"=>"blue");
        $a2 =  array("d"=>"red","b"=>"green","e"=>"blue");
 
        $result = array_intersect_uassoc($a1,$a2,"myFunction");
        echo "<pre>";
        print_r($result);
        echo "</pre>";
 
        echo "<hr>";

        // PHP array_intersect_ukey() Function
        echo "<h3>PHP array_intersect_ukey() Function</h3>";
        echo "<p>Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)</p>";

        $a1 =  array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2 =  array("a"=>"red","b"=>"green","e"=>"blue");

        $result = array_intersect_ukey($a1,$a2,"myFunction");
        echo "<pre>";
        print_r($result);
        echo "</pre>";

        echo "<hr>";

        // PHP array_key_exists() Function
        echo "<h3>PHP array_key_exists() Function</h3>";
        echo "<p>Checks if the specified key exists in the array</p>";

        $a = array("Verna"=>"XC90" , "BMW"=>"X5");
        if(array_key_exists("BMW",$a)){
            echo "Key exists!";
        }
        else{
            echo "Key does not exist!";
        }
        echo "<hr>";
        // PHP array_keys() Function
        echo "<h3>PHP array_keys() Function</h3>";
        echo "<p>Returns all the keys of an array</p>";

        $a = array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
        echo "<pre>";
        print_r(array_keys($a));
        echo "</pre>";

        echo "<hr>";

        // PHP array_map() Function
        echo "<h3>PHP array_map() Function</h3>";
        echo "<p>Sends each value of an array to a user-made function, which returns new values</p>";

        function mymap($num)
        {
            return($num*$num);
        }

        $a = array(1,2,3,4,5);

        echo "<pre>";
        print_r(array_map("mymap",$a));
        echo "</pre>";

        echo "<hr>";

        // PHP array_merge() Function
        echo "<h3>PHP array_merge() Function</h3>";
        echo "<p>Merges one or more arrays into one array</p>";

        $a1 = array("red","green");
        $a2 = array("blue","yellow");

        echo "<pre>";
        print_r(array_merge($a1,$a2));
        echo "</pre>";

        echo "<hr>";

        // PHP array_merge_recursive() Function
        echo "<h3>PHP array_merge_recursive() Function</h3>";
        echo "<p>Merges one or more arrays into one array recursively</p>";

        $a1 = array("a"=>"red","b"=>"green");
        $a2 = array("c"=>"blue","b"=>"yellow");

        echo "<pre>";
        print_r(array_merge_recursive($a1,$a2));
        echo "</pre>";

        echo "<hr>";

        // PHP array_multisort() Function
        echo "<h3>PHP array_multisort() Function</h3>";
        echo "<p>Sorts multiple or multi-dimensional arrays</p>";

        $a = array("Dog", "Cat", "Horse", "Bear", "Zebra");
        array_multisort($a);

        echo "<pre>";
        print_r($a);
        echo "</pre>";

        echo "<hr>";

        // PHP array_pad() Function
        echo "<h3>PHP array_pad() Function</h3>";
        echo "<p>Inserts a specified number of items, with a specified value, to an array</p>";

        $a=array("red","green");

        echo "<pre>";
        print_r(array_pad($a,5,"blue"));
        print_r(array_pad($a,-5,"blue"));
        echo "</pre>";

        echo "<hr>";

        // PHP array_pop() Function
        echo "<h3>PHP array_pop() Function</h3>";
        echo "<p>Deletes the last element of an array</p>";

        $a=array("red","green","blue");
        array_pop($a);

        echo "<pre>";
        print_r($a);
        echo "</pre>";

        echo "<hr>";

        
        // PHP array_product() Function
        echo "<h3>PHP array_product() Function</h3>";
        echo "<p>Calculates the product of the values in an array</p>";

        $a = array(5,5);
        echo(array_product($a)) . "<br>";

        $a=array(5,5,2,10);
        echo(array_product($a));

        echo "<hr>";

        // PHP array_push() Function
        echo "<h3>PHP array_push() Function</h3>";
        echo "<p>Inserts one or more elements to the end of an array</p>";

        $a = array("red", "green");
        array_push($a, "blue", "yellow");

        echo "<pre>";
        print_r($a);
        echo "</pre>";

        echo "<hr>";

        //PHP array_rand() Function
        echo "<h3>PHP array_rand() Function</h3>";
        echo "<p>Returns one or more random keys from an array</p>";

        $a = array("red", "green","blue","yellow", "brown");
        $random_keys = array_rand($a,3);
        echo $a[$random_keys[0]]."<br>";
        echo $a[$random_keys[1]]."<br>";
        echo $a[$random_keys[2]];

        echo "<hr>";

        // PHP array_reduce() Function
        echo "<h3>PHP array_reduce() Function</h3>";
        echo "<p>Returns an array as a string, using a user-defined function</p>";

        function arrReduce($v1,$v2){
            return $v1 . "-" .$v2;
        }

        $a = array("Dog", "Cat", "Horse");
        print_r(array_reduce($a,"arrReduce"));

        echo "<hr>";

        // PHP array_replace() Function
        echo "<h3>PHP array_replace() Function</h3>";
        echo "<p>Replaces the values of the first array with the values from following arrays</p>";

        $a1 = array("red","green");
        $a2 = array("blue","yellow");

        echo "<pre>";
        print_r(array_replace($a1,$a2));
        echo "</pre>";

        $a1 = array("a"=>"red","b"=>"green");
        $a2 = array("a"=>"orange","burgundy");
        echo "<pre>";
        print_r(array_replace($a1,$a2));
        echo "</pre>";

        echo "<hr>";

        // PHP array_replace_recursive() Function
        echo "<h3>PHP array_replace_recursive() Function</h3>";
        echo "<p>Replaces the values of the first array with the values from following arrays recursively</p>";

        $a1 = array("a"=>array("red"),"b"=>array("green","blue"),);
        $a2 = array("a"=>array("yellow"),"b"=>array("black"));

        echo "<pre>";
        print_r(array_replace_recursive($a1,$a2));
        echo "</pre>";

        echo "<hr>";

        // PHP array_reverse() Function
        echo "<h3>PHP array_reverse() Function</h3>";
        echo "<p>Returns an array in the reverse order</p>";

       

        echo "<pre>";
        $a = array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
        print_r(array_reverse($a));
        echo "<br>";

        $a=array("Volvo","XC90",array("BMW","Toyota"));
        print_r(array_reverse($a));
        echo "<br>";
        print_r(array_reverse($a, true));
        echo "</pre>";

        echo "<hr>";

        // PHP array_search() Function
        echo "<h3>PHP array_search() Function</h3>";
        echo "<p>Searches an array for a given value and returns the key</p>";

        $a=array("a"=>"red","b"=>"green","c"=>"blue");
        echo array_search("red",$a);

        echo "<hr>";

        // PHP array_shift() Function
        echo "<h3>PHP array_shift() Function</h3>";
        echo "<p>Removes the first element from an array, and returns the value of the removed element</p>";

        $a = array("a"=>"red","b"=>"green","c"=>"blue");

        echo "<pre>";
        echo array_shift($a) . "<br>";
        print_r ($a);
        echo "</pre>";

        echo "<hr>";

        // PHP array_shift() FunctionPHP array_slice() Function
        echo "<h3>PHP array_slice() Function</h3>";
        echo "<p>Returns selected parts of an array</p>";

        $a = array("red","green","blue","yellow","brown");

        echo "<pre>";
        print_r(array_slice($a,2));
        print_r(array_slice($a,1,2));
        print_r(array_slice($a,-2,1));
        print_r(array_slice($a,1,2,true));
        echo "</pre>";

        echo "<hr>";

        // PHP array_splice() Function
        echo "<h3>PHP array_splice() Function</h3>";
        echo "<p>Removes and replaces specified elements of an array</p>";

        $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2 = array("a"=>"purple","b"=>"orange");

        echo "<pre>";
        array_splice($a1,0,2,$a2);
        print_r($a1);
        print_r(array_splice($a1,0,2,$a2));
        echo "</pre>";

        echo "<hr>";

        // PHP array_sum() Function
        echo "<h3>PHP array_sum() Function</h3>";
        echo "<p>Returns the sum of the values in an array</p>";

        $a = array(5,15,25);
        echo array_sum($a);

        echo "<br>";
    
        $a=array("a"=>52.2,"b"=>13.7,"c"=>0.9);
        echo array_sum($a);

        echo "<hr>";

        // PHP array_udiff() Function
        echo "<h3>PHP array_udiff() Function</h3>";
        echo "<p>Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)</p>";

        echo "<pre>";
        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("a"=>"blue","b"=>"black","e"=>"blue");

        $result=array_udiff($a1,$a2,"myFunction");
        print_r($result);

        $a1=array("a"=>"red","b"=>"green","c"=>"blue","yellow");
        $a2=array("A"=>"red","b"=>"GREEN","yellow","black");
        $a3=array("a"=>"green","b"=>"red","yellow","black");

        $result=array_udiff($a1,$a2,$a3,"myFunction");
        print_r($result);

        echo "</pre>";

        echo "<hr>";

        // PHP array_udiff_assoc() Function
        echo "<h3>PHP array_udiff_assoc() Function</h3>";
        echo "<p>Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)</p>";

        
        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("a"=>"red","b"=>"blue","c"=>"green");

        echo "<pre>";
        $result=array_udiff_assoc($a1,$a2,"myfunction");
        print_r($result);
        echo "</pre>";

        echo "<hr>";

        // PHP array_udiff_uassoc() Function
        echo "<h3>PHP array_udiff_uassoc() Function</h3>";
        echo "<p>Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)</p>";

        function myfunction_key($a,$b)
        {
            if ($a===$b)
            {
                return 0;
            }
        return ($a>$b)?1:-1;
        }

        function myfunction_value($a,$b)
        {
            if ($a===$b)
            {
                return 0;
            }
        return ($a>$b)?1:-1;
        }

        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("a"=>"red","b"=>"green","c"=>"green");

        $result=array_udiff_uassoc($a1,$a2,"myfunction_value","myfunction_key");
        print_r($result);

        echo "<hr>";

        // PHP array_uintersect() Function
        echo "<h3>PHP array_uintersect() Function</h3>";
        echo "<p>Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)</p>";

        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("a"=>"blue","b"=>"black","e"=>"blue");

        $result=array_uintersect($a1,$a2,"myFunction");
        print_r($result);

        echo "<hr>";

        // PHP array_uintersect_assoc() Function
        echo "<h3>PHP array_uintersect_assoc() Function</h3>";
        echo "<p>Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)</p>";

        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("a"=>"red","b"=>"blue","c"=>"green");

        echo "<pre>";
        $result=array_uintersect_assoc($a1,$a2,"myFunction");
        print_r($result);
        echo "</pre>";

        echo "<hr>";

        // PHP array_uintersect_uassoc() Function
        echo "<h3>PHP array_uintersect_uassoc() Function</h3>";
        echo "<p>Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)</p>";

        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("a"=>"red","b"=>"green","c"=>"green");

        echo "<pre>";
        $result=array_uintersect_uassoc($a1,$a2,"myfunction_value","myfunction_key");
        print_r($result);
        echo "</pre>";

        echo "<hr>";

        // PHP array_unique() Function
        echo "<h3>PHP array_unique() Function</h3>";
        echo "<p>Removes duplicate values from an array</p>";

        echo "<pre>";
        $a=array("a"=>"red","b"=>"green","c"=>"red");
        print_r(array_unique($a));
        echo "</pre>";

        echo "<hr>";

        // PHP array_unshift() Function
        echo "<h3>PHP array_unshift() Function</h3>";
        echo "<p>Adds one or more elements to the beginning of an array</p>";

        $a=array("a"=>"red","b"=>"green");
        echo "<pre>";
        array_unshift($a,"blue");
        print_r($a);
        echo "</pre>";

        echo "<hr>";

        // PHP array_values() Function
        echo "<h3>PHP array_values() Function</h3>";
        echo "<p>Returns all the values of an array</p>";

        $a=array("Name"=>"Disah","Age"=>"21","Country"=>"INDIA");
        echo "<pre>";
        print_r(array_values($a));
        echo "</pre>";

        echo "<hr>";

        // PHP array_walk() Function
        echo "<h3>PHP array_walk() Function</h3>";
        echo "<p>Applies a user function to every member of an array</p>";

        function arrWalk($value,$key)
        {
            echo "The key $key has the value $value<br>";
        }
        $a=array("a"=>"red","b"=>"green","c"=>"blue");
        array_walk($a,"arrWalk");

        echo "<hr>";

        // PHP array_walk_recursive() Function
        echo "<h3>PHP array_walk_recursive() Function</h3>";
        echo "<p>Applies a user function recursively to every member of an array</p>";

        $a1=array("a"=>"red","b"=>"green");
        $a2=array($a1,"1"=>"blue","2"=>"yellow");
        array_walk_recursive($a2,"arrWalk");

        echo "<hr>";

        // PHP arsort() Function
        echo "<h3>PHP arsort() Function</h3>";
        echo "<p>Sorts an associative array in descending order, according to the value</p>";

        $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        arsort($age);
        foreach($age as $x=>$x_value)
        {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }

        echo "<hr>";

        // PHP asort() Function
        echo "<h3>PHP asort() Function</h3>";
        echo "<p>Sorts an associative array in ascending order, according to the value</p>";

        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        asort($age);
        foreach($age as $x=>$x_value)
        {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }  
        echo "<hr>";

        // PHP compact() Function
        echo "<h3>PHP compact() Function</h3>";
        echo "<p>Create array containing variables and their values</p>";

        $firstname = "Disha";
        $lastname = "Khunt";
        $age = "22";

        echo "<pre>";
        $result = compact("firstname", "lastname" , "age");
        print_r($result);
        echo "</pre>";

        echo "<hr>";

        // PHP count() Function
        echo "<h3>PHP count() Function</h3>";
        echo "<p>Returns the number of elements in an array</p>";

        $cars=array("Volvo","BMW","Toyota");
        echo count($cars);
        echo "<br>";

        $cars=array(
            "Volvo"=>array(
                "XC60",
                "XC90"
            ),
            "BMW"=>array(
                "X3",
                "X5"
            ),
            "Toyota"=>array(
                "Highlander"
            )
        ); 
        echo "Normal count: " . count($cars)."<br>";
        echo "Recursive count: " . count($cars,1);

        echo "<hr>";

        // PHP current() Function
        echo "<h3>PHP current() Function</h3>";
        echo "<p>Returns the current element in an array</p>";

        $people = array("Disha", "Isha", "Manshi");

        echo current($people) . "<br>";

        echo "<hr>";

        // PHP each() Function
        // echo "<h3>PHP each() Function</h3>";
        // echo "<p>Deprecated from PHP 7.2. Returns the current key and value pair from an array</p>";
         
        // echo "<pre>";
        // print_r(each($people));
        // echo "</pre>";

        // PHP end() Function
        echo "<h3>PHP end() Function</h3>";
        echo "<p>Sets the internal pointer of an array to its last element</p>";

        echo  "Current : ", current($people) . "<br>";
        echo  "End : " ,end($people);

        echo "<hr>";

        // PHP extract() Function
        echo "<h3>PHP extract() Function</h3>";
        echo "<p>Imports variables into the current symbol table from an array</p>";

        $a = "Original";
        $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
        extract($my_array);
        echo "\$a = $a; \$b = $b; \$c = $c";

        echo "<hr>";

        // PHP in_array() Function
        echo "<h3>PHP in_array() Function</h3>";
        echo "<p>Checks if a specified value exists in an array</p>";

        if (in_array("Manshi", $people))
        {
            echo "Match found";
        }
        else
        {
           echo "Match not found";
        }

        echo "<hr>";

        // PHP key() Function
        echo "<h3>PHP key() Function</h3>";
        echo "<p>Fetches a key from an array</p>";

        $people = array("Disha", "Isha", "Manshi");
        echo "The key from the current position is: " . key($people);

        echo "<hr>";

        // PHP krsort() Function
        echo "<h3>PHP krsort() Function</h3>";
        echo "<p>Sorts an associative array in descending order, according to the key</p>";

        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        krsort($age);

        foreach($age as $x=>$x_value)
        {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }

        echo "<hr>";

        // PHP ksort() Function
        echo "<h3>PHP ksort() Function</h3>";
        echo "<p>Sorts an associative array in ascending order, according to the key</p>";

        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        ksort($age);

        foreach($age as $x=>$x_value)
        {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }

        echo "<hr>";

        // PHP list() Function
        echo "<h3>PHP list() Function</h3>";
        echo "<p>Assigns variables as if they were an array</p>";

        $my_array = array("Dog","Cat","Horse");

        list($a, $b, $c) = $my_array;
        echo "I have several animals, a $a, a $b and a $c.";

        echo "<hr>"; 
        
        // PHP natcasesort() Function
        echo "<h3>PHP natcasesort() Function</h3>";
        echo "<p>Sorts an array using a case insensitive 'natural order' algorithm</p>";

        $temp_files = array("temp15.txt","Temp10.txt","temp1.txt","Temp22.txt","temp2.txt");

        echo "<pre>";
        natsort($temp_files);
        echo "Natural order: ";
        print_r($temp_files);
        echo "<br>";

        natcasesort($temp_files);
        echo "Natural order case insensitve: ";
        print_r($temp_files);

        echo "</pre>";

        echo "<hr>";

        // PHP natsort() Function
        echo "<h3>PHP natsort() Function</h3>";
        echo "<p>Sorts an array using a 'natural order' algorithm</p>";

        echo "<pre>";
        sort($temp_files);
        echo "Standard sorting : ";
        print_r($temp_files);
        echo "<br>";

        natsort($temp_files);
        echo "Natural order : ";
        print_r($temp_files);
        echo "</pre>";

        echo "<hr>";

        // PHP next() Function
        echo "<h3>PHP next() Function</h3>";
        echo "<p>Advance the internal array pointer of an array</p>";

        $people = array("Disha", "Manshi", "Isha");

        echo current($people) . "<br>";
        echo next($people);

        echo "<hr>";

        // PHP pos() Function
        echo "<h3>PHP pos() Function</h3>";
        echo "<p>Alias of current()</p>";

        echo pos($people) . "<br>";

        echo "<hr>";

        // PHP prev() Function
        echo "<h3>PHP prev() Function</h3>";
        echo "<p>Rewinds the internal array pointer</p>";

        $people = array("Disha", "Manshi", "Isha");
        echo current($people) . "<br>";
        echo next($people) . "<br>";
        echo prev($people);

        echo "<hr>";

        // PHP range() Function
        echo "<h3>PHP range() Function</h3>";
        echo "<p>Creates an array containing a range of elements</p>";

        echo "<pre>";
        $number = range(0,5);
        print_r ($number);
        echo "</pre>";

        echo "<hr>";

        // PHP reset() Function
        echo "<h3>PHP reset() Function</h3>";
        echo "<p>Sets the internal pointer of an array to its first element</p>";

        $people = array("Disha", "Manshi", "Isha");
        echo current($people) . "<br>";
        echo next($people) . "<br>";
        echo reset($people);

        echo "<hr>";

        // PHP rsort() Function
        echo "<h3>PHP rsort() Function</h3>";
        echo "<p>Sorts an indexed array in descending order</p>";

        $cars=array("Volvo","BMW","Toyota");
        rsort($cars);

        $clength=count($cars);
        for($x=0;$x<$clength;$x++)
        {
            echo $cars[$x];
            echo "<br>";
        }

        echo "<hr>";

        // PHP shuffle() Function
        echo "<h3>PHP shuffle() Function</h3>";
        echo "<p>Shuffles an array</p>";

        $my_array = array("red","green","blue","yellow","purple");


        echo "<pre>";
        shuffle($my_array);
        print_r($my_array);
        echo "</pre>";

        echo "<hr>";

        // PHP sizeof() Function
        echo "<h3>PHP sizeof() Function</h3>";
        echo "<p>Alias of count()</p>";

        $cars=array("Volvo","BMW","Toyota");
        echo sizeof($cars);

        echo "<hr>";

        // PHP sort() Function
        echo "<h3>PHP sort() Function</h3>";
        echo "<p>Sorts an indexed array in ascending order</p>";

        $cars = array("Volvo", "BMW", "Toyota");
        sort($cars);

        foreach ($cars as $key => $val) {
            echo "cars[" . $key . "] = " . $val . "<br>";
        }

        echo "<hr>";

        // PHP uasort() Function
        echo "<h3>PHP uasort() Function</h3>";
        echo "<p>Sorts an array by values using a user-defined comparison function and maintains the index association</p>";

        function my_sort($a, $b) {
            if ($a == $b) return 0;
            return ($a < $b) ? -1 : 1;
        }
          
        $arr = array("a"=>4, "b"=>2, "c"=>8, "d"=>6);
        uasort($arr, "my_sort");
          
        foreach($arr as $key => $value) {
            echo "[" . $key . "] => " . $value;
            echo "<br>";
        }

        echo "<hr>";

        // PHP uksort() Function
        echo "<h3>PHP uksort() Function</h3>";
        echo "<p>Sorts an array by keys using a user-defined comparison function</p>";

        function my_sort1($a, $b) {
            if ($a == $b) return 0;
            return ($a < $b) ? -1 : 1;
          }
          
        $arr = array("a"=>4, "b"=>2, "c"=>8, "d"=>6);
        uksort($arr, "my_sort1");
          
        foreach($arr as $key => $value) {
            echo "[" . $key . "] => " . $value;
            echo "<br>";
        }

        echo "<hr>";

        // PHP usort() Function
        echo "<h3>PHP usort() Function</h3>";
        echo "<p>Sorts an array by values using a user-defined comparison function</p>";

        function my_sort2($a, $b) {
            if ($a == $b) return 0;
            return ($a < $b) ? -1 : 1;
        }
          
        $a = array(4, 2, 8, 6);
        usort($a, "my_sort2");
          
        foreach($a as $key => $value) {
            echo "[" . $key . "] => " . $value;
            echo "<br>";
        }
    ?>
</body>
</html>