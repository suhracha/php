<?php
$str = "Hello world!";
$a = 5;
$b = 10.5;

echo "Using echo";
echo "String is: $str </br>"; 
echo "Integer is: $a <br/>"; 
echo "Float is: $b <br/>"; 
echo "<br>";

echo "Using print()";
print "String is: $str </br>"; 
print "Integer is: $a <br/>"; 
print "Float is: $b <br/>"; 
echo "<br>";

echo "Using var_dump()";
echo "<br>";
var_dump($str);
var_dump($a);
var_dump($b);
echo "<br>";
echo "<br>";

echo "Using print_r()";
echo "<br>";
print_r($str);
print_r($a);
print_r($b);
echo "<br>";
echo "<br>";

echo "Using printf()";
echo "<br>";
printf("String is: %s<br>", $str);
printf("Integer is: %d<br>", $a);
printf("Float is: %.2f<br>", $b);
?>

