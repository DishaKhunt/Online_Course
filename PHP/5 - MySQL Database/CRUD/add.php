<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>

    <!-- bootsrtap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h3 class="text-center mt-5">Add New Record</h3>
 <div class="container mt-5 justify-content-center d-flex">
    
   
   <form action="savedata.php" method="post" class="p-5 w-50">
        <div class="input-group mb-3 gap-3">
            <label for="id" class="form-label w-25">ID</label>
            <input type="text" class="form-control" id="sid" name="sid">
        </div>
        <div class="input-group mb-3 gap-3">
            <label for="name" class="form-label w-25">Name</label>
            <input type="text" class="form-control" id="sname" name="sname">
        </div>
        <div class="input-group mb-3 gap-3">
            <label for="address" class="form-label w-25">Address</label>
            <input type="text" class="form-control" id="saddress" name="saddress">
        </div>
        <div class="input-group mb-3 gap-3">
            <label for="class" class="form-label w-25">Class</label>
            <select class="form-select" aria-label="Default select example" name="class">
                <option selected>Open this select menu</option>
                <?php
                         $conn = mysqli_connect("localhost", "root","disha","crud") or die("Connection Faild". mysqli_connect_error());

                         $sql = "SELECT * FROM student_class";
                         $result = mysqli_query($conn, $sql) or die ("Query Unsuccessful.");

                        while($row = mysqli_fetch_assoc($result)){

                       
                    ?>
                    <option value="<?php 
                            echo $row['cid'];
                        ?>">
                        <?php 
                            echo $row['cname'];
                        ?>
                    </option>

                    <?php
                        }
                    ?>
            </select>
        </div>
        <div class="input-group mb-3 gap-3">
            <label for="phone" class="form-label w-25">Phone</label>
            <input type="text" class="form-control" id="sphone" name="sphone">
        </div>

        <div class="input-group mb-3 gap-3">
        <div class="div w-25"></div>
            <button type="submit" class="btn btn-dark rounded">Save</button>
        </div>
   </form>
</div>
</body>
</html>