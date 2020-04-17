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
<?php
echo "PHP Array Practice" . "<br>";
// Step 2
echo "Step 2" . "<br>";
$numbers = array(7, 9, 8, 8, 8, 6);
// Step 3
include ("functions.php");
printArray($numbers);
// Step 3
echo "Step 3" . "<br>";
largest($numbers);


