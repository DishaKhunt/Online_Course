<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- css link -->
     <link rel="stylesheet" href="../css/style.css">
    <title>PHP - json_encode()</title>
</head>
<body>
    
<div class="main">
        <div class="header">
            <h1>PHP with Ajax & JSON</h1>
        </div>
        <div id="load-data"></div>
</div>


    <!-- script link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $.getJSON(
            "https://jsonplaceholder.typicode.com/posts",
            function(data){
                $.each(data, function(key, value){
                    $("#load-data").append(value.id + " "+ value.body + "<br>");
                });
            }
        );
    </script>

</body>
</html>