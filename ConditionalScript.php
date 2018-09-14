<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 14 Sept 2018

ConditionalScript.php -->

    <meta charset="UTF-8">
    <title>Conditional Script</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Conditional Script</h2>

    <?php

    //Global Variables
    $intVariable = 75;
    $result = "";

    //
    ($intVariable > 100) ? $result = '$intVariable is greater than 100' : $result = '$intVariable is less than or equal to 100';
    echo '<h3>$result: ' . "$result</h3>"
  
    ?>

</body>

</html>