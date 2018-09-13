<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

ArithmeticOperators.php -->

    <meta charset="UTF-8">
    <title>Arithmetic</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <?php
    echo "<h1>Arithmetic Operators</h1>";

    // Addition
    $x = 100;
    $y = 200;
    $returnValue = $x + $y;
    echo "<h2>Addition</h2>";
    echo '<P>$returnValue after addition expression: ', $returnValue, "</p>";

    // Subtraction
    $x = 10;
    $y = 7;
    $returnValue = $x - $y;
    echo "<h2>subtraction</h2>";
    echo '<P>$returnValue after subtraction expression: ', $returnValue, "</p>";

    //Division
    $x = 24;
    $y = 3;
    $returnValue = $x / $y;
    echo "<h2>Division</h2>";
    echo '<P>$returnValue after division expression: ', $returnValue, "</p>";


    //modulus
    $x = 10;
    $y = 7;
    $returnValue = $x % $y;
    echo "<h2>Modulus</h2>";
    echo '<P>$returnValue after modulus expression: ', $returnValue, "</p>";

    //unary
    echo "<h2>Unary increment: prefix notation</h2>";
    $studentID = 100;
    $curStudentID = ++$studentID;
    echo "The first student ID is used:", $curStudentID, "<br>";
    $curStudentID = ++$studentID;
    echo "The first second ID is used:", $curStudentID, "<br>";
    $curStudentID = ++$studentID;
    echo "The first third ID is used:", $curStudentID, "<br>";

    echo "<h2>Unary increment: postfix notation</h2>";
    $studentID = 100;
    $curStudentID = $studentID++;
    echo "The first student ID is:", $curStudentID, "<br>";
    $curStudentID = $studentID++;
    echo "The first second ID is:", $curStudentID, "<br>";
    $curStudentID = $studentID++;
    echo "The first third ID is:", $curStudentID, "<br>";

    echo "<h1>Assignment Operators</h1>";
    $number = 100;
    $number += 50;
    echo '$number: ', $number;

    echo "<h1>Conditional Operators</h1>";
    $value1 = "First text string";
    $value2 = "Second text string";
    $returnValue = ($value1 == $value2) ? "true" : "false";
    echo '$returnValue is: ', $returnValue;
    ?>

</body>

</html>