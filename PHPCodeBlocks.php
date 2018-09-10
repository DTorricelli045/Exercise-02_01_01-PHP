<!DOCTYPE html>
<html>
<head>
<!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

PHPCodeBlock.php -->

    <meta charset="UTF-8"> 
    <title>PHP Code Blocks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>
    <h3>This is HTML</h3>
    <?php
        echo "This text is displayed using standard PHP script delimeters.<br>";
        // phpinfo();
        print "Second string";
        print ("<br>Third string");
        echo "<h1>This is a " , "multiple argument string.</h1>";
        echo ("<h1>This is also a " . "multiple argument string.</h1>");
        print("<h2>This is some cool math: " . (2 + 3) . "<h2>");
    ?>
    </p>
</body>
</html>