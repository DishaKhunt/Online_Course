<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Open/Read/Close</title>
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
    <h2 class="heading">PHP File Open/Read/Close</h2>

    <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("webdictionary.txt"));
        fclose($myfile);
    ?>
    <br>
    <br>
        
    <h3>PHP Read Single Line - fgets()</h3>
    <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        echo fgets($myfile);
        fclose($myfile);
    ?>
    <br>
    <br>

    <h3>PHP Check End-Of-File - feof()</h3>

    <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
            echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
    ?>
    <br>
    <br>

    <h3>PHP Read Single Character - fgetc()</h3>

    <?php
        $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
          echo fgetc($myfile);
        }
        fclose($myfile);
    ?>
</body>
</html>