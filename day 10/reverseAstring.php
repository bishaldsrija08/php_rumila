<!-- WAP to reverse a string and check if it is a palindrome -->

<?php
$name = "madam";
$reversedName = strrev($name);
echo "Original String: " . $name . "<br>";
echo "Reversed String: " . $reversedName . "<br>";

if ($name === $reversedName) {
    echo "The string is a palindrome.";
} else {
    echo "The string is not a palindrome.";
}
?>