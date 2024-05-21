<?php
$a = 10;
$b = 15;
$c = 8;

echo "Using Nested If Else:" . "<br>";

if ($a > $b && $a > $c) {
    echo "A is Greatest";
} elseif ($b > $a && $b > $c) {
    echo "B is Greatest";
} else {
    echo "C is Greatest";
}
?>
