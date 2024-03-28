<?php
    include 'header.php'
?>
 
<div class="container">
    
    <h3 class="text-center mt-3">Update Record</h3>

    <?php
        $conn = mysqli_connect("localhost", "root","disha","crud") or die("Connection Faild". mysqli_connect_error());

        $stu_id = $_GET['id'];
        $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
        $result = mysqli_query($conn, $sql) or die ("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
     ?>

    <div class="container mt-3 justify-content-center d-flex">
    
   
        <form action="updatedata.php" method="post" class="p-5 w-50">
                <div class="input-group mb-3 gap-3">
                    <label for="id" class="form-label w-25">ID</label>
                    <input type="text" class="form-control" id="sid" name="sid" value="<?php echo $row['sid']?>">
                </div>
                <div class="input-group mb-3 gap-3">
                    <label for="name" class="form-label w-25">Name</label>
                    <input type="text" class="form-control" id="sname" name="sname" value="<?php echo $row['sname']?>">
                </div>
                <div class="input-group mb-3 gap-3">
                    <label for="address" class="form-label w-25">Address</label>
                    <input type="text" class="form-control" id="saddress" name="saddress" value="<?php echo $row['saddress']?>">
                </div>
                <div class="input-group mb-3 gap-3">
                    <label for="class" class="form-label w-25">Class</label>
                    <?php
                        $sql1 = "SELECT * FROM student_class";
                        $result1 = mysqli_query($conn, $sql1) or die ("Query Unsuccessful.");

                        if(mysqli_num_rows($result1) > 0){

                            echo '<select class="form-select"  name="sclass">';
                            
                            while($row1 = mysqli_fetch_assoc($result1)){
                                if($row['sclass'] == $row1['cid']){
                                    $select = "selected";
                                }else{
                                    $select = "";
                                }
                                
                            echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                    
                            }
                        echo '</select>';
                        }
                    ?>
                </div>
                <div class="input-group mb-3 gap-3">
                    <label for="phone" class="form-label w-25">Phone</label>
                    <input type="text" class="form-control" id="sphone" name="sphone" value="<?php echo $row['sphone']?>">
                </div>

                <div class="input-group mb-3 gap-3">
                    <div class="div w-25"></div>
                    <button type="submit" class="btn btn-dark rounded">Update</button>
                </div>
        </form>
        <?php
                }
            }
        ?>
    </div>
</div>