<!DOCTYPE html>
<html>

<head>
    <!-- Exercise 02_01_01

Author: Dominic Torricelli
Date: 10 Sept 2018

MultipleScript.php -->

    <meta charset="UTF-8">
    <title>MultipleScript</title>
    <meta name="viewport" content=" initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>PHP Environment Info</h1>
    <p>
        The PHP code was rendered with PHP version

        <!-- php call on php version -->
        <?php
    echo phpversion();
    ?>
    </p>

    <p>The PHP code was rendered with zend engine version

        <!-- php call on zend version -->
        <?php
    echo zend_version();
    ?>
    </p>

    <p>PHP's default MIME type is

        <!-- php call on mime type -->
        <?php
    echo ini_get("default_mimetype");
    ?>
    </p>

    <p>The maximum allowable execution time of a PHP script is

        <!-- php call on the max execution time -->
        <?php
    echo ini_get("max_execution_time");
    ?>
    </p>

</body>

</html>