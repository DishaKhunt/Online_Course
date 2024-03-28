<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP XML DOM Parser</title>

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center text-light bg-success mt-5">PHP XML DOM Parser</h2>

      
        <div class="container mt-5">
        <h4>Load and Output XML</h4>
        <?php
            $xmlDoc = new DOMDocument();
            $xmlDoc->load("note.xml");

            print $xmlDoc->saveXML();
        ?>
        <br>
        <hr>

        <h4>Looping through XML</h4>
        <?php
            $xmlDoc = new DOMDocument();
            $xmlDoc->load("note.xml");

            $x = $xmlDoc->documentElement;
            foreach ($x->childNodes AS $item) {
            print $item->nodeName . " = " . $item->nodeValue . "<br>";
            }
        ?>
        </div>
    </div>
</body>
</html>