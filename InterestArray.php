<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

InterestArray.php -->

    <meta charset="UTF-8">
    <title>InterestArray</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Interest Array</h2>
    <?php
    //variables
        $interestRate1 =".0725";
        $interestRate2 =".0750";
        $interestRate3 =".0775";
        $interestRate4 =".0800";
        $interestRate5 =".0825";
        $interestRate6 =".0850";
        $interestRate7 =".0875";

        

    //Create array
        $ratesArray = array("$interestRate1", "$interestRate2", "$interestRate3", "$interestRate4", "$interestRate5", "$interestRate6", "$interestRate7");

        //Display array

        echo "$ratesArray[0]<br>";
        echo "$ratesArray[1]<br>";
        echo "$ratesArray[2]<br>";
        echo "$ratesArray[3]<br>";
        echo "$ratesArray[4]<br>";
        echo "$ratesArray[5]<br>";
        echo "$ratesArray[6]</p>";
    ?>

</body>

</html>