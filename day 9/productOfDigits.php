<!-- WAP to find product of digits of a number -->
<?php
$num=9877;
$product=1;
while ($num>0){
    $digit = $num % 10; // last digit
    $product = $product * $digit; // multiply last digit with product
    $num = (int)($num / 10); // remove last digit
}
echo "Product of digits is: ".$product;
?>