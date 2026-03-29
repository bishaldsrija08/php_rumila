<!-- WAP to check if a person is a child, adult, young or old -->
<?php
$age = 40;
if($age<13){
    echo "The person is a child.";
}else if($age>=13 && $age<18){
    echo "The person is a young.";
}else if($age>=18 && $age<30){
    echo "The person is an adult.";
}else{
    echo "The person is old.";
}
?>