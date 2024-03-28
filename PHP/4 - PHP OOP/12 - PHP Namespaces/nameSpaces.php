<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Namespaces</title>
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
    <h2 class="heading">PHP Namespaces</h2>

    <?php
        require 'product.php';
        require 'testing.php';

        function wow(){
            echo "Wow from Index file.<br>";
        }

        use pro\v1\command as cmd;

        $obj = new test\product();
        $obj1 = new cmd\product();

        wow();
        cmd\wow();
    ?>
</body>
</html>