<?php
$x = "Hello World!";
echo strtoupper($x); // strtoupper() is a built-in PHP function that converts all characters in a string to uppercase. In this case, it takes the string "Hello World!" and returns "HELLO WORLD!".

echo "<br>";
echo strtolower($x); // strtolower() is a built-in PHP function that converts all characters in a string to lowercase. In this case, it takes the string "Hello World!" and returns "hello world!".

echo "<br>";

$x = "Hello World!";
echo str_replace("World", "Dolly", $x); // str_replace() is a built-in PHP function that replaces all occurrences of a search string with a replacement string in a given input string. In this case, it takes the string "Hello World!", searches for the substring "World", and replaces it with "Dolly". The resulting string will be "Hello Dolly!".

echo "<br>";

$x = "Hello World!";
echo strrev($x); // strrev() is a built-in PHP function that reverses a string. In this case, it takes the string "Hello World!" and returns "!dlroW olleH".

echo "<br>";

$x = "    Hello World!         ";
echo trim($x); // trim() is a built-in PHP function that removes whitespace from both ends of a string. In this case, it takes the string "    Hello World! " and returns "Hello World!".

echo "<br>";

$x = "Hello lovely World!";
$y = explode(" ", $x);

//Use print_r() to display the result
print_r($y);

echo "<br>";

$x = "Bishal ";
$y = "Rijal";
$z = $x . $y;
echo $z; // The . operator is used to concatenate two strings in PHP. In this case, it takes the string "Bishal " and the string "Rijal", concatenates them together, and assigns the result to the variable $z. The resulting value of $z will be "Bishal Rijal".


echo "<br>";

$x = "Hello World!";
echo substr($x, 6, 5); // substr() is a built-in PHP function that returns a portion of a string. In this case, it takes the string "Hello World!", starts at index 6 (the position of the first character after "Hello "), and extracts 5 characters. The resulting string will be "World".

echo "<br>";
echo substr($x, 6);

echo "<br>";
echo substr($x, -5, 3);

echo "<br>";
$x = "Hi, how are you?";
echo substr($x, 5, -3); // In this case, it takes the string "Hi, how are you?", starts at index 5 (the position of the first character after "Hi, "), and extracts characters until 3 characters from the end of the string. The resulting string will be "how are yo".
?>