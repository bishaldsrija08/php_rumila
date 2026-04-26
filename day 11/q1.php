<?php

function si($i, $time, $rate) {
    return ($i * $time * $rate) / 100;
}

$i = 5000;
$time = 2;
$rate = 5;

$result = si($i, $time, $rate);
echo "The simple interest is: " . $result;
echo "<br>";
echo "The simple interest is: " . si(4000, 3, 4.5);


?>