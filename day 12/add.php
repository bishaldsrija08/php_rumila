<?php
$fruits = array("Apple", "Banana", "Cherry");
// $fruits[] = "Date"; // Adding a new fruit to the array
// array_push($fruits, "Mango", "Lemon"); // Another way to add a new fruit to the array
// array_unshift($fruits, "Orange", "Kiwi", "Lemon");
$new_fruits = "Grapes";
array_splice($fruits, 0, 0, $new_fruits); // Adding a new fruit at index 2 without removing any existing fruits
var_dump($fruits); // Output the contents of the array
?>