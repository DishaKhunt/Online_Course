<?php
    // Start the session
    session_start();

    // check if session exist
    if(isset($_SESSION['id'])){
        // redirect to dashbord
        header("location: dashbord.php");
    }

    // db connection
    $servername = "localhost";
    $username = "root";
    $password = "disha";
    $db_name = "sql_test";

    $conn = new mysqli($servername, $username, $password, $db_name);

    // check connection
    if($conn->connect_error){
        die("Connection failed:" . $conn->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepared</title>

    
    <!-- bootsrtap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style>

        .message{
            background: red;
            text-align: center;
            padding: 10px;
            width: 50%;
            color: white;
        }
    </style>
</head>
<body>
<div class="container shadow pb-3" >
<h3 class="text-center bg-danger text-light p-2  mt-5">User Login</h3>

    <div class="container  d-flex justify-content-center flex-column align-items-center">
       

         <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="p-5 w-50"  style="background:lightgray;">
               
                <div class="input-group mb-3 gap-3">
                    <label for="username" class="form-label w-25">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" >
                </div>

                <div class="input-group mb-3 gap-3">
                    <label for="password" class="form-label w-25">Password</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>
                <div class="input-group mb-3 gap-3">
                    <div class="div w-25"></div>
                    <button type="submit" class="btn btn-danger rounded" value="submit" name="login">Submit</button>
                </div>
        </form>

        <?php
            if(isset($_POST['login'])){
                if(!isset($_POST['username']) || $_POST['username'] == ''){
                    echo '<div class="message error">Please fill All The Fields.</div>';
                }else  if(!isset($_POST['password']) || $_POST['password'] == ''){
                    echo '<div class="message error">Please fill All The Fields.</div>';
                }
                else{
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    $sql = "SELECT * FROM user WHERE user_email = '{$username}' AND password = '{$password}'";
                    // 'or''='

                    $sql = $conn->prepare("SELECT * FROM user WHERE user_email = ? AND password = ?");
                    $sql->bind_param("ss",$username,$password );
                    $sql->execute();

                    // insert 
                    // $sql = $conn->prepare("INSERT INTO user (user,password)VALUES(?,?)");
                    // $sql->bind_param("ss",$username,$password );
                    // $sql->execute();
                    // $sql->close();

                    // update
                    $sql = $conn->prepare("UPDATE user ASET password = ? WHERE UID = ?");
                    $sql->bind_param("si",$_POST['password'],$_POST['id']);
                    $sql->execute();
                    if($sql->affected_rows === 0)exit('No rows updated');
                    $sql->close();

                    $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
                    
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";

                    if(count($result) > 0){

                            // start the session
                            session_start();

                            // set session variables
                            $_SESSION["id"] = $result[0]['id'];
                            $_SESSION["first_name"] = $result[0]['first_name'];

                            header("location: dashbord.php");
                        
                    }else{
                        echo "<div class= message error>Email and Password Not Matched.</div>";
                    }
                }
            }

            // db close connection
            mysqli_close($conn);
        ?>
    </div>
</div>
    

    <!-- js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>