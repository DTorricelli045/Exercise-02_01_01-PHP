<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 14 Sept 2018

OddNumbers.php -->

    <meta charset="UTF-8">
    <title>Odd Numbers</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Odd numbers</h2>

    <?php
    //Global variables
    $number = 1;

    //while loop to display every number from 1 to 100
    while ($number <= 100) {
        echo $number;
        echo "<br>";
        $number++;
    }


    ?>

</body>

</html>