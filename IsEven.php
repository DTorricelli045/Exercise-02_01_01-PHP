<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

IsEven.php -->

    <meta charset="UTF-8">
    <title>IsEven</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Is Even</h2>
    <?php
    //create array with random numbers
    $numbersArray = array( rand(0,10000) , rand(0,10000) , rand(0,10000) , rand(0,10000) , rand(0,10000) , rand(0,10000) , rand(0,10000) , rand(0,10000) , rand(0,10000) , rand(0,10000));

    //Display array and check wether number is odd or even
    $returnValue = ($numbersArray[0] % 2 == 0) ? "even number" : "odd number";
    echo "$numbersArray[0] is an ", $returnValue, "<br>";

    $returnValue = ($numbersArray[1] % 2 == 0) ? "even number" : "odd number";
    echo "$numbersArray[1] is an ", $returnValue, "<br>";

    $returnValue = ($numbersArray[2] % 2 == 0) ? "even number" : "odd number";
    echo "$numbersArray[2] is an ", $returnValue, "<br>";

    $returnValue = ($numbersArray[3] % 2 == 0) ? "even number" : "odd number";
    echo "$numbersArray[3] is an ", $returnValue, "<br>";

    $returnValue = ($numbersArray[4] % 2 == 0) ? "even number" : "odd number";
    echo "$numbersArray[4] is an ", $returnValue, "<br>";

    $returnValue = ($numbersArray[5] % 2 == 0) ? "even number" : "odd number";
    echo "$numbersArray[5] is an ", $returnValue, "<br>";

    $returnValue = ($numbersArray[6] % 2 == 0) ? "even number" : "odd number";
    echo "$numbersArray[6] is an ", $returnValue, "<br>";

    $returnValue = ($numbersArray[7] % 2 == 0) ? "even number" : "odd number";
    echo "$numbersArray[7] is an ", $returnValue, "<br>";

    $returnValue = ($numbersArray[8] % 2 == 0) ? "even number" : "odd number";
    echo "$numbersArray[8] is an ", $returnValue, "<br>";

    $returnValue = ($numbersArray[9] % 2 == 0) ? "even number" : "odd number";
    echo "$numbersArray[9] is an ", $returnValue, "<br>";

    

    ?>

</body>

</html>