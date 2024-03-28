<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP XML Expat Parser</title>

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center text-light bg-success mt-5">PHP XML Expat Parser</h2>

        <div class="container mt-5">
        <?php
            //Initialize the XML parser
            $parser=xml_parser_create();

            //Function to use at the start of an element
            function start($parser,$element_name,$element_attrs) {
                switch($element_name) {
                    case "NOTE":
                    echo "-- Note --<br>";
                break;
                    case "TO":
                    echo "To: ";
                break;
                    case "FROM":
                    echo "From: ";
                break;
                    case "HEADING":
                    echo "Heading: ";
                break;
                    case "BODY":
                    echo "Message: ";
                }
            }

            //Function to use at the end of an element
            function stop($parser,$element_name) {
                echo "<br>";
            }

            //Function to use when finding character data
            function char($parser,$data) {
                echo $data;
            }

            //Specify element handler
            xml_set_element_handler($parser,"start","stop");

            //Specify data handler
            xml_set_character_data_handler($parser,"char");

            //Open XML file
            $fp=fopen("note.xml","r");

            //Read data
            while ($data=fread($fp,4096)) {
                xml_parse($parser,$data,feof($fp)) or
                die (sprintf("XML Error: %s at line %d",
                xml_error_string(xml_get_error_code($parser)),
                xml_get_current_line_number($parser)));
            }

            //Free the XML parser
            xml_parser_free($parser);
        ?>
        </div>
    </div>
</body>
</html>