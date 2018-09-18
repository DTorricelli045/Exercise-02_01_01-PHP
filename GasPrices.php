<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 14 Sept 2018

GasPrices.php -->

    <meta charset="UTF-8">
    <title>Gas Prices</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Gas Prices</h2>

    <?php

    //Global Variables
    $gasPrice = 2.57;

    if ($gasPrice >= 2 && $gasPrice <= 3) {
        echo "<p>Gas prices are between $2.00 and $3.00.</p>";
    } 
    else {
        echo "<p>Gas prices are NOT between $2.00 and $3.00.</p>";
    }
    ?>

</body>

</html>