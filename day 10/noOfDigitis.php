<!-- WAP to find the number of digits in a number -->
 <?php
$num = 9874561230;
$og = $num;
$count = 0;

while($num >0){
    $num = (int)($num/10);
    $count++;
}

echo "The number of digits in $og is: $count <br>";

?>