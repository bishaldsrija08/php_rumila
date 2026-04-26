<?php
function change($value){
    $value = 10;    
    echo $value;
    echo "<br>";
}
$value = 5;
echo $value . ' Outside the function' . "<br>";
change($value);
echo $value. ' Outside the function after calling change()' . "<br>";


?>