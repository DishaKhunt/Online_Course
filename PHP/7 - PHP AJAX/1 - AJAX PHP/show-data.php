<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - AJAX and PHP</title>

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-light bg-dark mt-5 p-2">PHP with Ajax</h1>
        <div class="container-fluid bg-info p-2 d-flex justify-content-center">
            <input type="button" value="Load data" id="load-btn">
           
        </div>
        <table class="table table-striped" id="table-data">
                <thead>
                    <tr class="table-dark text-light">
                        <th>Id</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Disha Khunt</td>
                    </tr>
                </tbody>
            </table>
    </div>

    <script>
        $(document).ready(function(){
            $("#load-btn").on("click", function(e){
                $.ajax({
                    url : "ajax-load.php",
                    type : "POST",
                    success : function(data){
                        $("#table-data").html(data);
                    }
                });
            });

        });
    </script>
</body>
</html>