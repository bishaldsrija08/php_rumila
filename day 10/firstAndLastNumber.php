<!-- WAP to find the first and last digit of a number -->

<?php
$num = 9875756;
$firstDigit = $num;
// Find the last digit
$lastDigit = $num % 10;
echo "The last digit of $num is: $lastDigit <br>";

while ($firstDigit>=10){
    $firstDigit = (int)($firstDigit / 10);
}

echo "The first digit of $num is: $firstDigit <br>";
?>