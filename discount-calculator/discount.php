<?php
$input = $_GET["price"];


if($input >= 1000) {
        $discount = $input * .10;
        $total = $input - $discount;
        echo "Total: " . $total ;
        echo"<br>Discount: " . $discount;
    }elseif($input >= 500 && $input <=999){
        $discount = $input * .05;
        $total = $input - $discount;
        echo "Total: " . $total ;
        echo"<br>Discount: " . $discount;
    }elseif($input <= 499){
        
        $total = $input;
        echo "Total: " . $total ;
        echo"<br>NO Discount: ";
    }

?>