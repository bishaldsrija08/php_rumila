<!-- WAP in swith to calculate evern or odd, positive negetive or zero -->

<?php
$number = 0;
// 1 for even or odd, 2 for positive, negetive or zero
$choice = 2;
switch($choice){
    case 1:
        if($number % 2 == 0){
            echo "$number is even";
        }else{
            echo "$number is odd";
        }
        break;

    case 2:
        if($number > 0){
            echo "$number is positive";
        }elseif($number < 0){
            echo "$number is negetive";
        }else{
            echo "$number is zero";
        }
        break;

    default:
        echo "Invalid choice";
}


?>