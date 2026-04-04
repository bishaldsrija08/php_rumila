<!-- Ternery Operator
 
Syntax:
(condition) ? (value if true) : (value if false);

-->

<!-- WAP to check if a number is even or odd -->
<?php
$number = 11;
$result = ($number %2 ==0)? "$number is even" : "$number is odd";

echo $result;
?>