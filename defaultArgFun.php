<?php 
function fun($a,$b,$gst=8){

    $price = $a+$b;
    $tax = ($gst * $price)/100;
    $total = $price + $tax;

    echo "Price = ". $price. "\n Tax = ". $tax . "\nTotal = ".$total."<br>";

}

fun(1500,2300);
fun(1500,2300,2);

?>