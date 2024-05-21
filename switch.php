<?php
echo "Using Switch Case:"."<br>";
$per=95;
$percentage = (int)($per/10);

switch ($percentage){
case 10:
case 9:
case 8:
echo "Distinction";
break;

case 7:
case 6:
echo "First Class";
break;

case 5:
case 4:
echo "Second Class";
break;

default:
echo "Fail!";
break;
}
?>
