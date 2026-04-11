<!-- WAP to print factorial of a number -->
<?php
$num =10;
$fact=1;
$i=1;
while($i<=$num){
    $fact=$fact*$i;
    $i++;
}
echo "Factorial of " . $num . " is " . $fact;
?>