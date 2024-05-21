<?php
$stud = array(array("sneha", 'co'),
        array('tiya','if'),
        array('bhoomi','ej'),);

print_r($stud);
echo "<br>";
echo "<br>";

foreach ($stud as $keys) {
    foreach ($keys as $val) {
        echo $val . "<br>";
    }
}
echo "<br>";

foreach ($stud as $student) {
    foreach ($student as $val) {
        echo $val . " ";
    }
    echo "<br>";
}
?>