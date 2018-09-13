<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

HelloWorld2.php -->

    <meta charset="UTF-8">
    <title>Hello World 2</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <?php
     // Create Variables in php
    $worldVar = "world";
    $sunVar = "Sun";
    $moonVar = "Moon";
    
    // Create alternate Variables in php
    define("WORLD_INFO", 92897000);
    define("SUN_INFO", 72000000);
    define("MOON_INFO", 3456);

    // Call variables in the html via php
    echo "<p>Hello $worldVar!<br>";
    echo "the $worldVar is " , number_format(WORLD_INFO, 0) , " miles from the $sunVar. <br>";
    echo "Hello ", $sunVar , "!<br>";
    echo "The $sunVar's core temperature is approx " , number_format(SUN_INFO, 0) , " degrees Fahrenheit.<br>";
    echo "Hello ", $moonVar , "!<br>";
    echo "the $moonVar is " , number_format(MOON_INFO, 0) , " miles in diameter.</p>";

    ?>

</body>

</html>