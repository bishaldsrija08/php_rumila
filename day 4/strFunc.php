<?php
echo strlen("Hello world!"); // The strlen() function returns the length of a string, including spaces and punctuation. In this case, "Hello world!" has 12 characters (5 letters in "Hello", 1 space, and 6 characters in "world!"), so it will return 12.
echo "<br>";
echo str_word_count("Hello world!"); // The str_word_count() function counts the number of words in a string. In this case, "Hello world!" has 2 words ("Hello" and "world!"), so it will return 2.

echo "<br>";

$txt = "I really love PHP!";
var_dump(str_contains($txt, "love"));

echo "<br>";

echo strpos("Hello world!", "world"); // The strpos() function finds the position of the first occurrence of a substring in a string. In this case, "world" starts at position 6 in "Hello world!" (counting starts from 0), so it will return 6.

echo "<br>";

$txt = "I really love PHP!";
var_dump(str_starts_with($txt, "I really")); // The str_starts_with() function checks if a string starts with a specified substring. In this case, "I really love PHP!" does start with "I really", so it will return true.

echo "<br>";

$txt = "I really love PHP!";
var_dump(str_starts_with($txt, "i really")); // The str_starts_with() function is case-sensitive, so "I really love PHP!" does not start with "i really" (lowercase "i"), so it will return false.

echo "<br>";

$txt = "I really love PHP!";
var_dump(str_ends_with($txt, "PHP!")); // The str_ends_with() function checks if a string ends with a specified substring. In this case, "I really love PHP!" does end with "PHP!", so it will return true.

echo "<br>";

$txt = "I really love PHP!";
var_dump(str_ends_with($txt, "php!")); // The str_ends_with() function is case-sensitive, so "I really love PHP!" does not end with "php!" (lowercase "p"), so it will return false.

?>