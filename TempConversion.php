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

    for ($fahr = 0; $fahr < 5; $fahr++) { 

        $cel = ($fahr - 32) * (5/9);

        echo "$fahr &#8457; is equal to "round($cel, 2) "&#8451;<br>";
    }
    
    ?>

</body>

</html>