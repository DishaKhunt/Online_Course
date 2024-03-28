<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
     <!-- css link -->
     <link rel="stylesheet" href="../css/style.css">
     <title>Dynamic JSON file</title>
</head>
<body>

<div class="main">
        <div class="header">
            <h1>Save Form Data in JSON file</h1>
        </div>
        <div id="load-data" style="padding:20px">
            <form action="save-form.php" method="post" id="submit_form">
                <table cellpadding="10px">
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td><input type="text" name="fullname" autocompelte="off"></td>
                    </tr>
                    <tr>
                        <td><label for="name">Age</label></td>
                        <td><input type="number" name="age" autocompelte="off"></td>
                    </tr>
                    <tr>
                        <td><label for="name">City</label></td>
                        <td><input type="text" name="city" autocompelte="off"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit" id="submit"></td>
                    </tr>
                </table>
                             
            </form>
        </div>
</div>
    
</body>
</html>