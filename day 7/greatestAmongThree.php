<!-- WAP to find the greatest among three numbers -->

<?php
$num1 = 10;
$num2 = 20;
$num3 = 50;

if($num1>$num2 && $num>$num3){
    echo "$num1 is greatest";
}else if($num2>$num1 && $num2>$num3){
    echo "$num2 is greatest";
}else{
    echo "$num3 is greatest";
}
?>