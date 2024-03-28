<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootsrtap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD</title>
</head>
<body>

    <h2 class="text-center mt-5">All Record</h2>

    <div class="container d-flex bg-dark justify-content-center gap-4 mt-3">
            <button type="button" class="btn"><a href="index.php" class="text-decoration-none text-light fs-4 fw-bold">HOME</a></button>
            <button type="button" class="btn"><a href="add.php" class="text-decoration-none text-light fs-4 fw-bold">ADD</a></button>
            <button type="button" class="btn"><a href="update.php" class="text-decoration-none text-light fs-4 fw-bold">UPDATE</a></button>
            <button type="button" class="btn"><a href="delete.php" class="text-decoration-none text-light fs-4 fw-bold">DELETE</a></button>
    </div>

    <?php
        $conn = mysqli_connect("localhost", "root","disha","crud") or die("Connection Faild". mysqli_connect_error());

        $sql = "SELECT * FROM student JOIN student_class WHERE student.sclass = student_class.cid";
        $result = mysqli_query($conn, $sql) or die ("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0){

       
     ?>

    <div class="container mt-3">
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Class</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['sid']; ?></td>
                    <td><?php echo $row['sname']; ?></td>
                    <td><?php echo $row['saddress']; ?></td>
                    <td><?php echo $row['cname']; ?></td>
                    <td><?php echo $row['sphone']; ?></td>
                    <td>
                        <button type="button" class="btn btn-success"> <a href="edit.php?id=<?php echo $row['sid'];?>" class="text-decoration-none text-light">Edit</a></button>

                        <button type="button" class="btn btn-danger"> <a href="delete-inline.php?id=<?php echo $row['sid'];?>" class="text-decoration-none text-light">Delete</a></button>
                       
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <?php
        }else{
            echo "No Record Found";
        }
        mysqli_close($conn);
     ?>
    </div>
    

<!-- js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>