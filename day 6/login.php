<!-- WAP to check login credentials -->
<?php
$username = "admin"; // You can change this value to test with different usernames
$password = "password123"; // You can change this value to test with different passwords
if ($username == "admin" && $password == "password123") {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}