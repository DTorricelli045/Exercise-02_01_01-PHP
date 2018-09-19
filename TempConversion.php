<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 14 Sept 2018

TempConversion.php -->

    <meta charset="UTF-8">
    <title>Temperature Conversion</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Fahrenheit to Celsius</h2>

    <?php

    // for loop to display an echo with proper equations for temperature conversions
    for ($fahr = 0; $fahr < 101; $fahr++) { 

        $cel = ($fahr - 32) * (5/9);

        echo "<div style=color:red;>$fahr &#8457;</div> === <br> <div style=color:blue;>" , number_format($cel, 1) , " &#8451;</div> <br> <hr> <br>";
    }
    
    ?>

</body>

</html>