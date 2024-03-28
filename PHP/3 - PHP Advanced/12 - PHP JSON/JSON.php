<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel="stylesheet" href="css/style.css">

    <title>PHP JSON</title>
   
</head>
<body>
   

    <div class="main">
        <div class="header">
            <h1>Read JSON Data</h1>
        </div>
        <div id="load-data">

        </div>
    </div>

   
   <!-- script link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // $.ajax({
            //     url : "https://jsonplaceholder.typicode.com/posts",
            //     type : "GET",
            //     success : function(data){
            //         // $("#load-data").append(data.id + " <br>"+ data.title + "<br>" + data.body);
            //         $.each(data, function(key,value){
            //             $("#load-data").append(value.id + " "+ value.title + "<br>");
            //         });            
            //     }
            // });

            $.getJSON(
                "https://jsonplaceholder.typicode.com/posts",
        
                function(data){
                    // $("#load-data").append(data.id + " <br>"+ data.title + "<br>" + data.body);
                    $.each(data, function(key,value){
                        $("#load-data").append(value.id + " "+ value.title + "<br>");
                    });            
                }
            );
        });
    </script>
</body>
</html>