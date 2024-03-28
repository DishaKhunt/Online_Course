<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
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
    <h2 class="heading">PHP Arrays</h2>

    <!-- 
        PHP Array Types:-
            => Indexed arrays - Arrays with a numeric index
            => Associative arrays - Arrays with named keys
            => Multidimensional arrays - Arrays containing one or more arrays

     -->

    <?php
        $cars = array("Verna", "BMW", "Thar");
        echo "<pre>", var_dump($cars), "</pre>";
        echo "<br>";
    ?>

    <h3>Working With Arrays</h3>
    <ul>
        <li><a href="createArrays.php">Create Arrays</a></li>
        <li><a href="accessArrayItems.php">Access Arrays</a></li>
        <li><a href="updateArrayItems.php">Update Arrays</a></li>
        <li><a href="addArrayItems.php">Add Array Items</a></li>
        <li><a href="RemoveArrayItems.php">Remove Array Items</a></li>
        <li><a href="SortingArrays.php">Sort Arrays</a></li>
    </ul>
</body>
</html>