<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

PHPTest.php -->

    <meta charset="UTF-8">
    <title>PHP Test</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
        <h3>This is HTML</h3>

        <!-- add php strings to html -->
        <?php
        //write text into HTML
        echo "This is a chart of all our php info.<br>";
        //Add php info chart
        phpinfo();
    ?>
    </p>
</body>

</html>