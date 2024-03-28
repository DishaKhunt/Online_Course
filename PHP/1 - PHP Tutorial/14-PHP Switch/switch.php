<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP switch Statement</title>
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
    <h2 class="heading">PHP switch Statement</h2>
    
    <?php
    $favcolor = "red";

    switch ($favcolor){
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
      
    }

    // The default Keyword
    echo "<h3>The default Keyword</h3>";
    $d = 4;

    switch ($d) {
        case 6:
            echo "Today is Saturday";
            break;
        case 0:
            echo "Today is Sunday";
            break;
        default:
            echo "Looking forward to the Weekend";
    }   

    // Common Code Blocks
    echo "<h3>Common Code Blocks</h3>";
    
    switch ($d) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:  
          echo "The weeks feels so long!";
          break;
        case 6:
        case 0:
          echo "Weekends are the best!";
          break;
        default:
          echo "Something went wrong";
      }
    ?>
</body>
</html>