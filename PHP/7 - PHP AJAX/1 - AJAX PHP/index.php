<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - AJAX and PHP</title>

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    
    <script>
        function showHint(str) {
            if (str.length == 0) { 
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
                }
                xmlhttp.open("GET", "gethint.php?q="+str, true);
                xmlhttp.send();
            } 
        }
    </script>
</head>
<body>
    <div class="container-fulid">
        <h2 class="text-center text-light bg-dark mt-5 p-1">PHP with Ajax</h2>

        <div class="container">
            <p><b>Start typing a name in the input field below:</b></p>

            <form action="">
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
            </form> 
            <p>Suggestions: <span id="txtHint">
        </div>
       


    </div>

</body>
</html>