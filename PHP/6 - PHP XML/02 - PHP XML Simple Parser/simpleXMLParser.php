<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple XML Parser</title>

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center text-light bg-success mt-5">PHP SimpleXML Parser</h2>

        <div class="container mt-5">
        <h4>PHP SimpleXML - Read From String</h4>
        <?php
            $myXMLData =
            "<?xml version='1.0' encoding='UTF-8'?>
            <note>
            <to>Tove</to>
            <from>Jani</from>
            <heading>Reminder</heading>
            <body>Don't forget me this weekend!</body>
            </note>";

            $xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
            print_r($xml);
        ?>

        <br>
        <hr>
        <?php
            libxml_use_internal_errors(true);
            $myXMLData = "<?xml version='1.0' encoding='UTF-8' ?>
            <document>
            <user>Disha Khunt</wronguser>
            <email>disha@gmail.com</wrongemail>
            </document>";

            $xml = simplexml_load_string($myXMLData);
            if ($xml === false) {
            echo "Failed loading XML: ";
            foreach(libxml_get_errors() as $error) {
                echo "<br>", $error->message;
            }
            } else {
            print_r($xml);
            }
        ?>
        <br>
        <hr>
        <h4>PHP SimpleXML - Read From File</h4>
        <?php
            $xml = simplexml_load_file("note.xml")or die ("Error: Cannot crete object");
            print_r($xml);
        ?>
        </div>
    </div>
</body>
</html>