<?php
$student=array(array("Alex","Fisher",35,99),
              array("Ben","Benson",66,75),
              array("Cent","Smith",15,83));
#traversing using foreach loop:
    echo "Foreach loop:<br>";
    $cs= count($student);
 for($i=0;$i<$cs;$i++){
foreach($student[$i] as $val){
    echo $val."<br>";
} } 
?>
