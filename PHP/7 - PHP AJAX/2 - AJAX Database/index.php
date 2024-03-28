<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - AJAX and MySQL</title>

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>
        table,th,tr,td{
            border: 1px solid black;
        }
        th,td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fulid">
        <h2 class="text-center text-light bg-dark mt-5 p-1">PHP - AJAX and MySQL</h2>

        <div class="container mt-3">
            <form>
                <select name="users" onchange="showUser(this.value)">
                <option value="">Select a person:</option>
                <option value="1">Peter Griffin</option>
                    <option value="2">Lois Griffin</option>
                    <option value="3">Joseph Swanson</option>
                    <option value="4">Glenn Quagmire</option>
                    </select>
            </form>
            <br>
            <div id="txtHint"><b>Person info will be listed here...</b></div>
        </div>

    </div>

    <script>
       function showUser(str) {
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
            xmlhttp.open("GET","family.php?q="+str,true);
            xmlhttp.send();
        }
    </script>

</body>
</html>