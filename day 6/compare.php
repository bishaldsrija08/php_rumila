<?php
// Comparison Operators
$x = 10;
$y = 5;
echo "x = " . $x . ", y = " . $y . "<br>";
var_dump ($x == $y); // false
echo "<br>";
var_dump ($x != $y); // true
echo "<br>";
var_dump ($x > $y); // true
echo "<br>";
var_dump ($x < $y); // false
echo "<br>";
var_dump ($x >= $y); // true
echo "<br>";
var_dump ($x <= $y); // false

$a = "5";
$b = 5;
var_dump ($a === $b); // true (loose comparison)
echo "<br>";
?>