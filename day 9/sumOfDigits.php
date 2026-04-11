<!-- WAP to find sum of digits of a number -->
<?php
$num=12345;
$sum=0;
while ($num>0){
    $digit = $num % 10; // last digit
    $sum = $sum + $digit; // add last digit to sum
    $num = (int)($num / 10); // remove last digit
}
echo "Sum of digits is: ".$sum;
?>