<?php
$cars = [];
$cars[0]= "Volvo";
$cars[1]= "BMW";
$cars[2]= "Toyota";
echo count($cars); // Output: 3
echo "<br>";
var_dump($cars); // Output: array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }
echo "<br>";
echo $cars[0]; // Output: Volvo

?>