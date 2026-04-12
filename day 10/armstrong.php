<!-- WAP to check if a number is an Armstrong number -->

<?php
$num = 1534;
$og = $num;
$sum = 0;

while ($num>0){
    $rem = $num % 10;
    $sum = $sum + ($rem * $rem * $rem);
    $num = (int)($num / 10);
}

if ($sum == $og) {
    echo "The number is an Armstrong number.";
} else {
    echo "The number is not an Armstrong number.";
}
?>