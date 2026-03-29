<!-- Check whether a number is a multiple of both 3 and 5. -->
<?php
$num = 50;
if ($num % 3 == 0 && $num % 5 == 0) {
    echo "$num is a multiple of both 3 and 5.";
} else {
    echo "$num is not a multiple of both 3 and 5.";
}