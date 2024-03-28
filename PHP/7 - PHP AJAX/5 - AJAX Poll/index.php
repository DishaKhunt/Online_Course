<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - AJAX Poll</title>

    <!-- bootsrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container-fulid">
        <h2 class="text-center text-light bg-dark mt-5 p-1">PHP - Poll</h2>

        <div class="container mt-3">
            <div id="poll">
                <h3>Do you like PHP and AJAX so far?</h3>
                <form>
                Yes: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
                No: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                </form>
            </div>
        </div>
    </div>

    <script>
        function getVote(int) {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                document.getElementById("poll").innerHTML=this.responseText;
                }
            }
            xmlhttp.open("GET","poll_vote.php?vote="+int,true);
            xmlhttp.send();
        }
    </script>

</body>
</html>