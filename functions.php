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
function printArray($myArray)
{
    foreach ($myArray as $number)
    {
        echo "$number" . "<br>";
    }
}