<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and JSON</title>
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
    <h2 class="heading">PHP and JSON</h2>

    <h3>PHP - json_encode()</h3>
    <?php
        $age = array("Disha"=>35, "Isha"=>37, "Manshi"=>43);
        echo json_encode($age);

        echo "<br>";

        $cars = array("Volvo", "BMW", "Toyota");
        echo json_encode($cars);
    ?>

    <h3>PHP - json_decode()</h3>
    <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        var_dump(json_decode($jsonobj));
        echo "<br>";
        var_dump(json_decode($jsonobj,true));
        echo "<br><br>";

        echo "<h3>PHP - Accessing the Decoded Values</h3>";
        $obj = json_decode($jsonobj);
        echo $obj->Peter;
        echo "<br>";
        echo $obj->Ben;
        echo "<br>";
        echo $obj->Joe;

        echo "<br><br>";

        $arr = json_decode($jsonobj, true);

        echo $arr["Peter"];
        echo $arr["Ben"];
        echo $arr["Joe"];

        echo "<h3>PHP - Looping Through the Values</h3>";

        $obj = json_decode($jsonobj);

        foreach($obj as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }

        echo "<br>";
        $arr = json_decode($jsonobj, true);

        foreach($arr as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
    ?>
</body>
</html>