<?php
/*
 * Lewis Scott
 * 4/17/20
 * filename https://lscott.greenriverdev.com/328/pp2/index.php
 * Pair Program 2
 */
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pair Program 2</title>
    </head>
    <body>
    <?php

        // Step 1
        echo "PHP Array Practice" . "<br>";
        // Step 2
        echo "Step 2 - print array" . "<br>";
        $numbers = array(7, 9, 8, 8, 8, 6);
        // Step 3
        include ("functions.php");
        printArray($numbers);
        echo "Step 3 - moved function to a functions.php file" . "<br>";
        // Step 4
        echo "Step 4 - find largest number in array" . "<br>";
        largest($numbers);
        // Step 5
        echo "Step 5 - remove duplicates from array" . "<br>";
        removeDups($numbers);
        // Step 6
        echo "Step 6 - associative array with number and its frequency in array" . "<br>";
        distribution($numbers);

    ?>
    </body>
    </html>

