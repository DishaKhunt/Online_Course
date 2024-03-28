<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date and Time</title>
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
    <h2 class="heading">PHP Date and Time</h2>

    <h3>Get a Date</h3>

    <!-- 
        d - Represents the day of the month (01 to 31)
        m - Represents a month (01 to 12)
        Y - Represents a year (in four digits)
        l (lowercase 'L') - Represents the day of the week
     -->

    <?php
        echo "Today is : " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");
    ?>

    <hr>
    <h3>PHP Tip - Automatic Copyright Year</h3>

    © 2010-<?php echo date("Y");?>

    <hr>
    <h3>Get a Time</h3>

    <!-- 
        H - 24-hour format of an hour (00 to 23)
        h - 12-hour format of an hour with leading zeros (01 to 12)
        i - Minutes with leading zeros (00 to 59)
        s - Seconds with leading zeros (00 to 59)
        a - Lowercase Ante meridiem and Post meridiem (am or pm)
     -->

    <?php
        echo "The time is " . date("h:i:sa");
    ?>

    <hr>
    <h3>Get Your Time Zone</h3>

    <?php
        date_default_timezone_set("America/New_York");
        echo "The time is " . date("h:i:sa");
    ?>

    <hr>
    <h3>Create a Date With mktime()</h3>
    <!-- 
        mktime(hour, minute, second, month, day, year)
     -->
    <?php
        $d=mktime(11, 14, 54, 2, 5, 2003);
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>

    <hr>
    <h3>Create a Date From a String With strtotime()</h3>
    <!-- 
        strtotime(time, now)
     -->
    <?php
        $d=strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("tomorrow");
        echo "Tomoroow : " . date("Y-m-d h:i:sa", $d) . "<br>";
        
        $d=strtotime("next Saturday");
        echo "Next Saturday : " . date("Y-m-d h:i:sa", $d) . "<br>";
        
        $d=strtotime("+3 Months");
        echo "+3 Month : " . date("Y-m-d h:i:sa", $d) . "<br>";
    ?>

    <hr>
    <h3>More Date Examples</h3>

    <?php
        $startdate=strtotime("Saturday");
        $enddate=strtotime("+6 weeks", $startdate);

        while ($startdate < $enddate) {
            echo date("M d", $startdate) . "<br>";
            $startdate = strtotime("+1 week", $startdate);
        }
    ?>

    <br>
    
    <?php
       $d1=strtotime("July 04");
       $d2=ceil(($d1-time())/60/60/24);
       echo "There are " . $d2 ." days until 4th of July.";
    ?>

</body>
</html>