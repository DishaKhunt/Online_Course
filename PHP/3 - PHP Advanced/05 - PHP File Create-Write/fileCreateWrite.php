<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Create/Write</title>
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
    <h2 class="heading">PHP File Create/Write</h2>

    <h3>PHP Write to File - fwrite()</h3>

    <?php
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "Disha Khunt\n";
        fwrite($myfile, $txt);
        $txt = "Disha Khunt\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    ?>

    <h3>PHP Append Text</h3>

    <?php
        $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
        $txt = "Manshi Khunt\n";
        fwrite($myfile, $txt);
        $txt = "Isha Tarpada\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    ?>
</body>
</html>