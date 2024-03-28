<?php
    include  'header.php';

    if(isset($_POST['deletebtn'])){

        include 'config.php';
    
        $stu_id = $_POST['sid'];
    
        $sql = "DELETE FROM student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die ("Query Unsuccessful.");
    
        header("Location: http://localhost/PHP/5 - MySQL Database/CRUD/index.php");
    
        mysqli_close($conn);
    }

?>

<div class="container">

    <h3 class="text-center mt-3">Delete Record</h3>

    <div class="container update-container  mt-3 justify-content-center d-flex align-items-center flex-column" >
    
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="px-5 py-4 w-50 mb-3">
            <div class="input-group gap-3 mb-3">
                <label for="id" class="form-label w-25">ID</label>
                <input type="text" class="form-control" id="sid" name="sid">
            </div>
            <div class="input-group gap-3">
                    <div class="div w-25"></div>
                    <button type="submit" class="btn btn-dark rounded" name="deletebtn">Delete</button>
                </div>
        </form>

      
</div>