<?php
$input1 = $_GET["input1"];
$input2 = $_GET["input2"];

if($input1 > $input2) {
    echo $input1 . " is GREATER than " . $input2;
}elseif($input1 < $input2) {
    echo $input1 . " is LESS than " . $input2;
}elseif($input1 == $input2) {
    echo $input1 . " is EQUAL to " . $input2;
}

?>