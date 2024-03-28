<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String</title>
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
    <h2 class="heading">PHP String</h2>

    <?php
    $x = "Disha";
    echo "Hello $x";

    // String length
    echo "<h3>String Length</h3>";
    echo "strlen('Hello Disha') &#10170; " ,strlen("Hello Disha");

    echo "<hr>";

    // Word Count
    echo "<h3> Word Count</h3>";
    echo "str_word_count('Hello Disah!!!') &#10170;  ",str_word_count("Hello Disah!!!");

    echo "<hr>";

    // Search For Text Within a String
    // The PHP strpos() function searches for a specific text within a string.
    echo "<h3>Search For Text Within a String</h3>";
    echo "strpos('Hello Disha!!!'', 'Disha') &#10170; " ,strpos("Hello Disha!!!", "Disha");

    echo "<hr>";

    

    ?>
</body>
</html>