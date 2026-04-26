<?php
function sum($a, $b){
    return $a + $b;
}

$result = sum(5,10);
echo "The sum of 5 and 10 is: " . $result;
echo "<br>";
echo "The sum of 20 and 30 is: " . sum(20,30);

?>