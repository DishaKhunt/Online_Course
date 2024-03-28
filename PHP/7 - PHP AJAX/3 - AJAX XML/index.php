<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - AJAX and XML</title>

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container-fulid">
        <h2 class="text-center text-light bg-dark mt-5 p-1">PHP - AJAX and XML</h2>

        <div class="container mt-3">
        <form>
            Select a CD:
            <select name="cds" onchange="showCD(this.value)">
            <option value="">Select a CD:</option>
            <option value="Bob Dylan">Bob Dylan</option>
            <option value="Bee Gees">Bee Gees</option>
            <option value="Cat Stevens">Cat Stevens</option>
            </select>
        </form>
        <div id="txtHint" class="mt-3"><b>CD info will be listed here...</b></div>
        </div>

    </div>

    <script>
        function showCD(str) {
            if (str=="") {
                document.getElementById("txtHint").innerHTML="";
                return;
            }
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                document.getElementById("txtHint").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","getcd.php?q="+str,true);
            xmlhttp.send();
        }
    </script>

</body>
</html>