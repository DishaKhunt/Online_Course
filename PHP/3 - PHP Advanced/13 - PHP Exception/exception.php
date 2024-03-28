<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exceptions</title>
    <style>
        .heading{
            margin: 10px 0px;
            padding: 10px;
            background: linear-gradient(#e8bdee, #ad6ab5, #57245e, #45134b);
            color: #fae4fd;
        }
    </style>
</head>
<body>
    <h2 class="heading">PHP Exceptions</h2>
    <?php
    class MyException extends Exception{
        function errorMessage(){
            $error = "<br>My Exception Message : " . $this->getMessage(). 
            "<br> Error on line no. : " . $this->getLine();

            return $error;
        }
    } 

        function division($n){
            try{
                if($n<=0){
                    throw new Exception("<br>Enter the valid Number.");
                }   
                if($n == 3){
                    throw new MyException("Number is 3.");
                }       
                $div = 2/$n;
                    echo "<br>" . $div; 
            }
            catch(MyException $e){
                echo $e->errorMessage();
            }
            catch(Exception $e){
                echo $e->getMessage();
                echo = $e->getCode();
                // echo $e->getFile();
                // echo $e->getLine();
            }finally{
                echo "<br> Finally";
            }
        }
      
        division(2);
        division(3);
        division(0);
        division(4);
      

        
    ?>
</body>
</html>