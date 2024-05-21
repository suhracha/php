<?php

$a1=array("a"=>"PHP", 
"b"=>"Java","c"=>"Perl");
print_r(array_reverse($a1));
echo "<br>";
#traversing array using foreach:
    echo "Foreach loop:<br>";

foreach($a1 as $val){
echo $val."<br>";
}
echo "<br>";
#traversing array using for:

$a1=array(0=>"PHP", 
1=>"Java",2=>"Perl");
print_r(array_reverse($a1));
echo "<br>";
echo "For loop:<br>";
$ic = count($a1);
for($i=0;$i<$ic;$i++){
    echo $a1[$i]."<br>";
}

?>
