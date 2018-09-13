<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

HelloWorld.php -->

    <meta charset="UTF-8">
    <title>Hello World</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <?php

    // Create Variables in php
    $worldVar = "world";
    $sunVar = "Sun";
    $moonVar = "Moon";
    $worldInfo = 92897000;
    $sunInfo = 72000000;
    $moonInfo = 3456;

    // Call variables in the html via php
    echo "<p>Hello $worldVar!<br>";
    echo "the $worldVar is $worldInfo miles from the $sunVar. <br>";
    echo "Hello ", $sunVar , "!<br>";
    echo "The $sunVar's core temperature is approx $sunInfo degrees Fahrenheit.<br>";
    echo "Hello ", $moonVar , "!<br>";
    echo "the $moonVar is $moonInfo miles in diameter.</p>";

    echo "This is a {$moonVar}embedded in double quotes.";
    echo "This is a $moonVar embedded in double quotes.";

    ?>

</body>

</html>