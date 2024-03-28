<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP XML Parsers</title>

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <h2 class="text-center text-light bg-success p-2 mt-5">PHP XML Parsers</h2>

        <div class="container p-5">
            <h3>What is XML?</h3>
            <ul>
                <li>The XML language is a way to structure data for sharing across websites.</li>
                <li>Several web technologies like RSS Feeds and Podcasts are written in XML.</li>
                <li>XML is easy to create. It looks a lot like HTML, except that you make up your own tags.</li>
            </ul>
            <hr>
            <h3>What is an XML Parser?</h3>
            <ul>
                <li>To read and update, create and manipulate an XML document, you will need an XML parser.</li>
                <li>In PHP there are two major types of XML parsers:
                    <ol>
                        <li>Tree-Based Parsers</li>
                        <li>Event-Bassed Parsers</li>
                    </ol>
                </li>
            </ul>

            <hr>

            <h4>1. Tree-Based Parsers</h4>
            <ul>
                <li>Tree-based parsers holds the entire document in Memory and transforms the XML document into a Tree structure. It analyzes the whole document, and provides access to the Tree elements (DOM).</li>
                <li>
                This type of parser is a better option for smaller XML documents, but not for large XML document as it causes major performance issues.
                </li>
                <li>Example of tree-based parsers:
                    <ol>
                        <li>SimpleXML</li>
                        <li>DOM</li>
                    </ol>
                </li>
            </ul>

            <hr>

            <h4>2. Event-Based Parsers</h4>
            <ul>
                <li>Event-based parsers do not hold the entire document in Memory, instead, they read in one node at a time and allow you to interact with in real time. Once you move onto the next node, the old one is thrown away.</li>
                <li>
                This type of parser is well suited for large XML documents. It parses faster and consumes less memory.
                </li>
                <li>Example of event-based parsers:
                    <ol>
                        <li>XMLReader</li>
                        <li>XML Expat Parser</li>
                    </ol>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>