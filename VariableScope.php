<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

VariableScope.php -->

    <meta charset="UTF-8">
    <title>Variable Scope</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <?php
    $globalVariable = "global variable";
    
    function scopeExample() {
        $localVariable = "local variable";
        echo "<p>This is a $localVariable</p>";
    }

    function globalExample() {
        global $globalVariable;
        echo "<p>This is a $globalVariable</p>";
    }

    scopeExample();
    echo "<p>This is a $globalVariable</p>";
    globalExample();
    ?>

</body>

</html>