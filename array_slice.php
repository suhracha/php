<?php 
$subject = array('java','C++','os','DBMS'); 
$result=array_slice($subject,3); 
print_r($result);
echo "<pre>";
print_r(array_slice($subject,1,2));
echo "<pre>";
print_r(array_slice($subject,0,-3));
echo "<pre>";
?>
