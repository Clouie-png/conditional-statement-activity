<?php
$input = $_GET["age"];


if($input > 18) {
        echo "You are old enough to enter." ;
    }elseif($input < 18){
        echo  "You are too young to enter.";
    };

?>