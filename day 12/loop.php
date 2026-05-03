<?php
$cars = array("Volvo", "BMW", "Toyota");
$cars[0]= "Opel";

foreach($cars as $car){
    echo $car . "<br>";
}
echo "<br>";

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["color"] = "red";
$car["model"] = "Focus";
foreach($car as $x=>$x_value){
    echo $x . ": " . $x_value . "<br>";
}

?>