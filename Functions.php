<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

Functions.php -->

    <meta charset="UTF-8">
    <title>Functions</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Passing Parameters</h2>

    <?php

    //create functions
    function incrementByValue($countByValue) {
        ++$countByValue;
        echo "<p>incrementByValue() value is $countByValue</p>";
    }
    
    function incrementByReference(&$countByValue) {
        ++$countByValue;
        echo "<p>incrementByRference() value is $countByValue</p>";
    }

    // main program
    $count = 1;
    echo "<p>Main program starting value is $count.</p>";

    incrementByValue($count);
    echo "<p>Main program after incrementByValue is $count.</p>";

    $count = 1;
    echo "<p>Main program starting value is $count.</p>";
    incrementByReference($count);
    echo "<p>Main program after incrementByReference is $count.</p>";
    ?>

<h2>Default Arguments</h2>
    <?php
    function paint($room="office", $color="red") {
        return "<p>The color of the {$room} is {$color}.</p>";
    }

    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null);
    echo paint("bedroom");
    echo paint("blue");
    


    ?>

</body>

</html>