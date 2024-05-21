<?php
$num = 17;
$flag = 0;
if($num == 1){
    echo "Number is nor prime nor composite";
}else{
    for($i=2; $i < $num / 2; $i++){
        if($num % $i == 0){
            $flag = 1;
        }
    }
}
if($flag == 1){
    echo $num. " is not prime";
}else{
    echo $num. " is prime";
}
?>
