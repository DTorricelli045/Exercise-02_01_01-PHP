<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

DaysArray.php -->

    <meta charset="UTF-8">
    <title>DaysArray</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Days Array</h2>
    <?php

    //Create array
        $days = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

    //Display Array
        echo "The days of the week in English are: <br>";
        echo "$days[0]<br>";
        echo "$days[1]<br>";
        echo "$days[2]<br>";
        echo "$days[3]<br>";
        echo "$days[4]<br>";
        echo "$days[5]<br>";
        echo "$days[6]</p>";

    //Rename array
        $days[0] = "Dimanche";
        $days[1] = "Lundi";
        $days[2] = "Mardi";
        $days[3] = "Mercredi";
        $days[4] = "Jeudi";
        $days[5] = "Vendredi";
        $days[6] = "Samedi";

        //Display array
        echo "The days of the week in French are: <br>";
        echo "$days[0]<br>";
        echo "$days[1]<br>";
        echo "$days[2]<br>";
        echo "$days[3]<br>";
        echo "$days[4]<br>";
        echo "$days[5]<br>";
        echo "$days[6]</p>";
    ?>

</body>

</html>