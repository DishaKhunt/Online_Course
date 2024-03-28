<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Regular Expressions</title>
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
    <h2 class="heading">PHP Regular Expressions</h2>

    <?php
        echo "<h3>Using preg_match()</h3>";
        echo "<p>Returns 1 if the pattern was found in the string and 0 if not</p>";
        $str = "Visit W3Schools";
        $pattern = "/w3schools/i";
        echo preg_match($pattern, $str); 
        
        echo "<h3>Using preg_match_all()</h3>";
        echo "<p>Returns the number of times the pattern was found in the string, which may also be 0</p>";
        $str = "The rain in SPAIN falls mainly on the plains.";
        $pattern = "/ain/i";
        echo preg_match_all($pattern, $str);

        echo "<h3>Using preg_replace()</h3>";
        echo "<p>Returns a new string where matched patterns have been replaced with another string</p>";
        $str = "Visit Microsoft!";
        $pattern = "/microsoft/i";
        echo preg_replace($pattern, "W3Schools", $str);

        echo "<hr>";

        echo "<h3>Regular Expression Modifiers</h3>";
        
        echo "<h4>i =>	Performs a case-insensitive search</h4>";
        $txt = "W3Schools";
        echo $txt . "<br>"; 
        $pattern = "/s/i";
        echo "/s/i : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>";

                
        echo "<h4>m => Performs a multiline search (patterns that search for a match at the beginning or end of a string will now match the beginning or end of each line)</h4>";
        $txt = "you are better than <br> you think";
        $pattern = "/^you/m";
        echo $txt . "<br>";
        echo "/^you/m : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<hr>";

        echo "<h3>Regular Expression Patterns</h3>";
                
        echo "<h4>[abc] => Find one or many of the characters inside the brackets</h4>";
        $txt = "W3Schools.com";
        $pattern = "/[co]/";
        echo $txt . "<br>";
        echo "/[co]/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>[^abc] => Find any character NOT between the brackets</h4>";
        $txt = "W3Schools.com";
        $pattern = "/[^eo]/";
        echo $txt . "<br>";
        echo "/[^eo]/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>[a-z] => Find any character alphabetically between two letters</h4>";
        $txt = "Welcome";
        $pattern = "/[e-o]/";
        echo $txt . "<br>";
        echo "/[e-o]/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>[A-z] => Find any character alphabetically between a specified upper-case letter and a specified lower-case letter</h4>";
        $txt = "Welcome to W3Schools";
        $pattern = "/[T-e]/";
        echo $txt . "<br>";
        echo "/[T-e]/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>[A-Z] => Find any character alphabetically between two upper-case letters.</h4>";
        $txt = "W3Schools.com";
        $pattern = "/[A-Z]/";
        echo $txt . "<br>";
        echo "/[A-Z]/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>[123] => 	Find one or many of the digits inside the brackets</h4>";
        $txt =  "W3Schools has been live since 1999";
        $pattern = "/[123]/";
        echo $txt . "<br>";
        echo "/[123]/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>[0-5] => 	Find any digits between the two numbers</h4>";
        $txt = "Call 9913- 5547";
        $pattern = "/[0-5]/";
        echo $txt . "<br>";
        echo "/[0-5]/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>[0-9] => Find any digits</h4>";
        $txt = "Call 9913- 5547";
        $pattern = "/[0-9]/";
        echo $txt . "<br>";
        echo "/[0-9]/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<hr>";

        echo "<h3>Metacharacters</h3>";

        echo "<h4>|	 => Find a match for any one of the patterns separated by | as in: cat|dog|fish</h4>";
        $txt = "We have three dogs, one fish, but no cats";
        $pattern = "/cat|dog|fish/";
        echo $txt . "<br>";
        echo "/cat|dog|fish/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>. => 	Find any character</h4>";
        $txt = "W3Schools has been live since 1999.";
        $pattern = "/./";
        echo $txt . "<br>";
        echo "/./ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>^ => Finds a match as the beginning of a string as in: ^Hello</h4>";
        $txt = "W3Schools";
        $pattern = "/^W3/";
        echo $txt . "<br>";
        echo "/^W3/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>$	 => Finds a match at the end of the string as in: World$</h4>";
        $txt = "Hello World";
        $pattern = "/World$/";
        echo $txt . "<br>";
        echo "/World\$/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>\d => Find any digits</h4>";
        $txt = "W3Schools has been live since 1999";
        $pattern = "/\d/";
        echo $txt . "<br>";
        echo "/\d/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>\D => Find any non-digits</h4>";
        $txt = "W3Schools has been live since 1999";
        $pattern = "/\D/";
        echo $txt . "<br>";
        echo "/\D/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

       
        echo "<h4>\s => Find any whitespace character</h4>";
        $txt = "W3Schools has been live since 1999";
        $pattern = "/\s/";
        echo $txt . "<br>";
        echo "/\s/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>\S => Find any non-whitespace character</h4>";
        $txt = "W3Schools has been live since 1999";
        $pattern = "/\S/";
        echo $txt . "<br>";
        echo "/\S/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>\w => Find any alphabetical letter (a to Z) and digit (0 to 9)</h4>";
        $txt = "W3Schools.com";
        $pattern = "/\w/";
        echo $txt . "<br>";
        echo "/\w/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>\W => Find any non-alphabetical and non-digit character</h4>";
        $txt = "W3Schools.com";
        $pattern = "/\W/";
        echo $txt . "<br>";
        echo "/\W/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>\b => Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b</h4>";
        $txt = "Hello World";
        $pattern = "/\bHel/";
        echo $txt . "<br>";
        echo "/\bHel/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>\uxxxx => Find the Unicode character specified by the hexadecimal number xxxx</h4>";
        $txt = "W3Schools has been live since 1999";
        $pattern = "/\u{0039}/";
        echo $txt . "<br>";
        echo "/\u{0039}/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<hr>";

        echo "<h3>Quantifiers</h3>";

        echo "<h4>n+ =>Matches any string that contains at least one n</h4>";
        $txt = "W3Schools has been live since 1999";
        $pattern = "/n+/";
        echo $txt . "<br>";
        echo "/n+/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>n* => Matches any string that contains zero or more occurrences of n</h4>";

        echo "<h4>n? => Matches any string that contains zero or one occurrences of n</h4>";

        echo "<h4>n{3}	 =>Matches any string that contains a sequence of 3 n's</h4>";
        $txt = "W3Schools is goood";
        $pattern = "/o{3}/";
        echo $txt . "<br>";
        echo "/o{3}/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>n{2, 5} =>Matches any string that contains a sequence of at least 2, but not more that 5 n's</h4>";
        $txt = "W3Schools is gooood";
        $pattern = "/o{2,5}/";
        echo $txt . "<br>";
        echo "/o{2,5}/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;

        echo "<h4>n{3,} =>	Matches any string that contains a sequence of at least 3 n's</h4>";
        $txt = "W3Schools is goooooood";
        $pattern = "/o{3,}/";
        echo $txt . "<br>";
        echo "/o{3,}/ : " . preg_match_all($pattern, $txt) . "<br>";
        echo preg_replace($pattern, "#", $txt) . "<br>" ;


        

    ?>
</body>
</html>