<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SimpleXML - Get</title>

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center text-light bg-success mt-5">PHP SimpleXML - Get</h2>

        <div class="container mt-5">
            <h4>PHP SimpleXML - Get Node Values</h4>
            <?php
                $xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");

                echo $xml->to . "<br>";
                echo $xml->from . "<br>";
                echo $xml->heading . "<br>";
                echo $xml->body;
            ?>
            <br>
            <hr>

            <h4>PHP SimpleXML - Get Node Values of Specific Elements</h4>
            <?php
                $xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
                echo $xml->book[0]->title . "<br>";
                echo $xml->book[1]->title;
            ?>
            <br>
            <hr>

            <h4>PHP SimpleXML - Get Node Values - Loop</h4>
            <?php
                $xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
                foreach($xml->children() as $books) {
                echo $books->title . ", ";
                echo $books->author . ", ";
                echo $books->year . ", ";
                echo $books->price . "<br>";
                }
            ?>

            <br>
            <hr>
            <h4>PHP SimpleXML - Get Attribute Values</h4>
            <?php
                $xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
                echo $xml->book[0]['category'] . "<br>";
                echo $xml->book[1]->title['lang'];
            ?>

            <br>
            <hr>
            <h4>PHP SimpleXML - Get Attribute Values - Loop</h4>
            <?php
                $xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
                foreach($xml->children() as $books) {
                echo $books->title['lang'];
                echo "<br>";
                }
            ?>
        </div>
    </div>
</body>
</html>