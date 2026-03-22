<!-- WAP to check whether you're eligible to vote or not [age>=18] -->
 <?php
    $age = 20; // You can change this value to test with different ages

    if ($age >= 18) {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
    }