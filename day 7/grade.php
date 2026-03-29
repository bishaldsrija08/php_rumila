<!-- Grade a student based on marks:
90+ → A
75–89 → B
50–74 → C
Below 50 → Fail -->

<?php
$marks = 905;
if($marks>90 && $marks<=100){
    echo "Grade A";
}else if($marks>=75 && $marks<=89){
    echo "Grade B";
}else if($marks>=50 && $marks<=74){
    echo "Grade C";
}else if ($marks<50){
    echo "Fail";
}else{
    echo "Invalid marks";
}
?>