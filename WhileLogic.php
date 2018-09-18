<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 14 Sept 2018

WhileLogic.php -->

    <meta charset="UTF-8">
    <title>Is Even</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>While Logic</h2>

    <?php

    //Global Variables
    $counter = 0;
    $numbers = array();

    //While loop to create an array with numbers 1 through 100 and a foreach to display the array
    while ($counter < 100) {
        ++$counter;
        $numbers[] = $counter;
    }
    foreach ($numbers as $currentNum) {
        echo "$currentNum<br>";
    }
    
    ?>

</body>

</html>