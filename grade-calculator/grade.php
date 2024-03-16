<?php
$input = $_GET["grade"];

if($input >=90) {
    echo "GRADE A";
}elseif($input >= 80){
    echo "GRADE B";
}elseif($input >= 70){
    echo "GRADE C";
}elseif($input >= 60){
    echo "GRADE D";
}elseif($input <= 59){
    echo "GRADE F";
}        
?>