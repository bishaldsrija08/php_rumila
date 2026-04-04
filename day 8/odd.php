<!-- WAP to print odd numbers from 1 to 10 -->

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>