<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filters</title>
    <style>
        .heading{
            margin: 10px 0px;
            padding: 10px;
            background: linear-gradient(#e8bdee, #ad6ab5, #57245e, #45134b);
            color: #fae4fd;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2 class="heading">PHP Filters</h2>
    <!-- 
        filters_var(var, filename, options/flag)
     -->
    <h3>Filter list</h3>
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
            foreach (filter_list() as $id =>$filter) {
                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }
        ?>
    </table>

    <h3>Filter valiate INT</h3>
    <?php
        // filter validate int
        // $var = 99;
        // $var = 99.5;
        // $var = "99";
        // $var = true;
        $var = 50;

        var_dump(filter_var($var, FILTER_VALIDATE_INT));

        if(filter_var($var, FILTER_VALIDATE_INT)){
            echo "<br>$var is integer.";
        }
        else{
            echo "<br>$var is not integer.";
        }

        echo "<br><br>";

        $options = array(
                    "options" => array(
                        "min_range" => 20,
                        "max_range" => 30
                    )
                );

        var_dump(filter_var($var, FILTER_VALIDATE_INT));

        if(filter_var($var, FILTER_VALIDATE_INT, $options)){
            echo "<br>$var is integer.";
        }
        else{
            echo "<br>$var is not integer.";
        }
        echo "<br><br>";

        $var = 0;
        
        var_dump(filter_var($var, FILTER_VALIDATE_INT));

        if(filter_var($var, FILTER_VALIDATE_INT) || filter_var($var, FILTER_VALIDATE_INT) === 0){
            echo "<br>$var is integer.";
        }
        else{
            echo "<br>$var is not integer.";
        }

        

    ?>

    <h3>Filter validate folat</h3>
    <?php
        //   $var = 50;
        $var = 5.5;

          var_dump(filter_var($var, FILTER_VALIDATE_FLOAT));
  
          if(filter_var($var, FILTER_VALIDATE_FLOAT)){
              echo "<br>$var is float.";
          }
          else{
              echo "<br>$var is not float.";
          }

    ?>

    <h3>Filter validate Boolean</h3>
    <?php
        //   $var = 50;
        // $var = 5.5;
        // $var = true;
        // $var = false;
        // $var = "wow";
        $var = "TRUE";

        // var_dump(filter_var($var, FILTER_VALIDATE_BOOLEAN));
        var_dump(filter_var($var, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
 
        if(filter_var($var, FILTER_VALIDATE_BOOLEAN)){
             echo "<br>$var is Boolean.";
        }
        else{
             echo "<br>$var is not Boolean.";
        }
    ?>

    <h3>Filter validate email</h3>
    <?php
        
        $var = "disha@gmail.com";

        // var_dump(filter_var($var, FILTER_VALIDATE_EMAIL));
       
 
        if(filter_var($var, FILTER_VALIDATE_EMAIL)){
             echo "$var is valid email.";
        }
        else{
             echo "$var is not valid email.";
        }
    ?>

    <h3>Filter validate URL</h3>
    <?php
        
        $var = "https://PHP/test/page.php";
 
        if(filter_var($var, FILTER_VALIDATE_URL , FILTER_FLAG_PATH_REQUIRED)){
             echo "$var is valid URL.";
        }
        else{
             echo "$var is not valid URL.";
        }
        

        $var = "https://PHP/test/page.php?A=1&B=2";
       
 
        if(filter_var($var, FILTER_VALIDATE_URL , FILTER_FLAG_QUERY_REQUIRED)){
             echo "<br>$var is valid URL.";
        }
        else{
             echo "<br>$var is not valid URL.";
        }
    ?>

    <h3>Filter validate IP</h3>
    <?php
        
        $var = "192.168.1.1";
 
        if(filter_var($var, FILTER_VALIDATE_IP)){
             echo "$var is valid IP.";
        }
        else{
             echo "$var is not valid IP.";
        }
    ?>

    <h3>Filter validate MAC</h3>
    <?php
        
        $var = "FA-F9-DD-B2-5E";
       
 
        if(filter_var($var, FILTER_VALIDATE_MAC)){
             echo "$var is valid MAC.";
        }
        else{
             echo "$var is not valid MAC.";
        }
    ?>
</body>
</html>