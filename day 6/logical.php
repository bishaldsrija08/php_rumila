<?php
// Logical Operators
$x = 100;
$y = 50;
var_dump($x > $y && $x < 200); // true
echo "<br>";
var_dump($x > $y || $x > 200); // true
echo "<br>";
var_dump(!($x < $y)); // true

?>