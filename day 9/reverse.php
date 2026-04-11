<!-- WAP to find reverse of a number -->
<?php
$num=121;
$og=$num; // original number
$reverse=0;
while ($num>0){
    $digit = $num % 10; // last digit
    $reverse = $reverse * 10 + $digit; // add last digit to reverse
    $num = (int)($num / 10); // remove last digit
}
echo "Reverse of the number is: ".$reverse;
echo "<br>";
if($reverse == $og){
    echo "The number is a palindrome.";
}else{
    echo "The number is not a palindrome.";
}
?>