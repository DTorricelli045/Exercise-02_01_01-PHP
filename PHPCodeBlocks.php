<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

PHPCodeBlock.php -->

    <meta charset="UTF-8">
    <title>PHP Code Blocks</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
        <h3>This is HTML</h3>

        <!-- add php strings to html -->
        <?php
        //write text into HTML
        echo "This text is displayed using standard PHP script delimeters.<br>";
        
        //write text into HTML (this is an alternate way)
        print "Second string";
        
        //write text into HTML (this is another alternate way)
        print ("<br>Third string");
        
        //write text into HTML with concatenation
        echo "<h1>This is a " , "multiple argument string.</h1>";
        
        //write text into HTML with concatenation (this is an alternate way)
        echo ("<h1>This is also a " . "multiple argument string.</h1>");
        
        //Write text into HTML with a math equation
        print("<h2>This is some cool math: " . (2 + 3) . "<h2>");
    ?>
    </p>
</body>

</html>